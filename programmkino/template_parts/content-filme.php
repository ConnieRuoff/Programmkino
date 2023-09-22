<section <?php post_class();?>>
    
    <?php if(is_page(40) || is_archive()) { ?>
        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
    <?php } else { ?>
        <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
    <?php } ?>  
    
    
    
    <?php 
        $wpv_film_start = get_post_meta( get_the_ID(), 'wpv_film_start', true ); 
        $wpv_film_end = get_post_meta( get_the_ID(), 'wpv_film_end', true ); 
        $wpv_film_fsk = get_post_meta( get_the_ID(), 'wpv_film_fsk', true ); 
    ?>
    
    <?php 
        $wpv_film_start_neu = date('d.m.Y', strtotime($wpv_film_start));
        $wpv_film_end_neu = date('d.m.Y', strtotime($wpv_film_end));
    ?>
    
    <?php echo '<p>' . $wpv_film_start_neu . ' - ' . $wpv_film_end_neu . '</p>' ;?>
    
    <?php 
        if ( ! empty( $wpv_film_fsk ) ) {
            echo '<p>Geeignet ab ' . $wpv_film_fsk . ' Jahren.</p>' ;
        }
    ?>
    
    <?php the_field('wpv_film_time'); ?>
    
    <p class="post-meta">
        <?php echo get_the_term_list( $post->ID, 'genre', 'Genre: ', ', ' ); ?>
        <?php echo get_the_term_list( $post->ID, 'sprachen', 'Sprache: ', ', ' ); ?>
    </p>     
    
    <?php the_post_thumbnail('medium');?>
    <?php the_content('Weiterlesen »');?>
    
</section> 