 <section <?php post_class();?>>
     <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
<?php the_post_thumbnail('medium'); ?>
     <?php the_content();?>
</section>