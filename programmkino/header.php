<!DOCTYPE html>
<html lang="<?php bloginfo('language');?>">
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php wp_title('');?> <?php bloginfo('name');?></title>
    
    <?php wp_enqueue_script('jquery'); ?>
    <?php wp_enqueue_script('comment-reply');?>
    <?php wp_head();?>
    
    <style>
    
        .container::before {
            content:'';
            display:block;
            position: absolute;
            top:0;
            left:0;
            right:0;
            height:<?php echo get_custom_header()->height; ?>px;
            background:url(<?php header_image();?>) top center no-repeat;
        }
        
        .admin-bar .container::before {
            top:32px;
        }
        
        body {
            padding-top:calc(<?php echo get_custom_header()->height; ?>px + 20px);
            background-blend-mode: <?php $wpv_blendmodes = get_option('wpv_blendmodes'); echo $wpv_blendmodes ;?>;
            color: <?php $wpv_color = get_option('wpv_color'); echo $wpv_color ;?>;
        }
        
        
        
    </style>
    
</head>

<body <?php body_class();?>> 
   

<div class="container">
<header class="site-header">
    <a class="logo" href="<?php echo home_url('/');?>">
        <?php bloginfo('name');?> – <?php bloginfo('description');?>
    </a>
    <div class="first photo">
      <div class="image-container">
        <img src="https://content.codecademy.com/courses/freelance-1/unit-6/project-morocco/photo1.png">
      </div>
      <span class="caption">A convoy of camels criss-crossing the crests of the Sahara</span>
    </div>
   
    
    <?php get_search_form();?>
    
    
    <nav class="site-nav">
       <?php 
        
        $args = array(
            'theme_location' => 'nav_main',
            'depth' => 2,
            'container' => ''
        );
        
        wp_nav_menu($args);?>
    </nav>
</header>