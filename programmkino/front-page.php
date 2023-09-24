<?php get_header();?>

<main class="site-main">
    
    <article class="site-content">
        
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           <?php get_template_part('template_parts/content','page');?>
        <?php endwhile; else : ?>
            <?php get_template_part('template_parts/content','error');?>
        <?php endif; ?>
        
      
        
        
        
        
        <div class="container-filme">
            
            <?php 
            
            $args = array(
                post_type => 'filme',
                posts_per_page => 6
            );
            
            $loop3 = new WP_Query($args);
            
            if ( $loop3->have_posts() ) : while ( $loop3->have_posts() ) : $loop3->the_post(); ?>
               <?php get_template_part('template_parts/content', 'filme-front-page');?>
            <?php endwhile; else : ?>
                <?php get_template_part('template_parts/content','error');?>
            <?php endif; wp_reset_postdata(); ?>
        
        </div>
        
        
        
         <div class="main">
    <nav class="container">
      <ul>
        <li>Store</li>
        <li>Hours</li>
        <li>Wholesale</li>
      </ul>
    </nav>
    <img src="https://content.codecademy.com/courses/freelance-1/unit-5/tsunami-coffee/images/logo.png" />
  </div>
        
        <div class="container-posts">
        
        <?php 
        
        $args = array(
            post_type => 'post',
            posts_per_page => 3
        );
        
        $loop2 = new WP_Query($args);
        
        if ( $loop2->have_posts() ) : while ( $loop2->have_posts() ) : $loop2->the_post(); ?>
           <?php get_template_part('template_parts/content', get_post_format());?>
        <?php endwhile; else : ?>
            <?php get_template_part('template_parts/content','error');?>
        <?php endif; wp_reset_postdata(); ?>
       
        </div>
        
    </article>
    
    
</main>

<?php get_footer();?>