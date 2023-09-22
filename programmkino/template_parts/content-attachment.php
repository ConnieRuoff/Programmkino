<h1><?php the_title();?></h1>
        
<?php if(wp_attachment_is_image()) {?>
    <img src="<?php echo wp_get_attachment_url(); ?>" alt="<?php the_title();?>" >
<?php } else { ?>
    <a href="<?php echo wp_get_attachment_url(); ?>" target="_blank">Datei öffnen</a>
<?php } ?>

<?php the_excerpt();?>
<?php the_content();?>