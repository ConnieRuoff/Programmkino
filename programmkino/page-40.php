<?php 

get_header();?>

<main class="site-main">
    
    <article class="site-content">
        
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           <?php get_template_part('template_parts/content','page');?>
        <?php endwhile; else : ?>
            <?php get_template_part('template_parts/content','error');?>
        <?php endif; ?>
        
    
        
        
        <?php 
        
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        
        $args = array(
            'post_type' => 'filme',
            'posts_per_page' => 10,
            'paged' => $paged,
            
            /*
            'meta_query' => array(
                array(
                    'key' => 'wpv_film_fsk',
                    'value' => '16',
                ),
            ),
            */
    
            
            'orderby' => 'meta_value',
            'order' => 'DESC', // ASC
            'meta_query' => array(
                array(
                    'key'     => 'wpv_film_start',
                    'value'   => getdate(), // Aktuelles Datum
                    'compare' => '>'
                ),
            ),
            
        );
        
        $loop2 = new WP_Query($args);
        
        if ( $loop2->have_posts() ) : while ( $loop2->have_posts() ) : $loop2->the_post(); ?>
           <?php get_template_part('template_parts/content', 'filme');?>
        <?php endwhile; else : ?>
            <?php get_template_part('template_parts/content','error');?>
        <?php endif; ?>
        
        <nav class="pagination">
        <?php previous_posts_link('« Vorherige Seite', $loop2->max_num_pages);?>
        <?php next_posts_link('Nächste Seite »', $loop2->max_num_pages);?>
        </nav>
        
        <?php wp_reset_postdata(); ?>
    
        
    </article>
    
    
</main>

<?php get_footer();?>