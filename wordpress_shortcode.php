<?php 

//pages
//style.css
//rtl.css
//index.php
//comments.php
//front-page.php
//home.php
//single.php
//page.php
//category.php
//tag.php
//taxonomy.php
//author.php
//date.php
//archive.php
//search.php
//attachment.php
//image.php
//404.php

//set path
wp_enqueue_script();
wp_enqueue_script();

//header
get_header();
wp_head() 

//footer
get_footer();
wp_footer()

//sidebar
get_sidebar();

//logo
the_custom_logo();

//site info
get_bloginfo();

//title
the_title();
get_the_title();
wp_title('');

//contect
the_content();
get_the_content();

//permalink
the_permalink();
get_the_permalink();

//search
get_search_form();

//menu
wp_nav_menu();

//language
language_attributes();
/*<html <?php language_attributes(); ?>>*/

//current site.
bloginfo( 'name' );
bloginfo('charset');
bloginfo( 'url' );
bloginfo('description'); 

//body class
body_class();
/*<body <?php body_class(); ?>> */








//doe

//simple index loop
get_header();
if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
   endwhile;
endif;
get_sidebar();
get_footer(); 

//basic
if (have_posts()) :
while (have_posts()) : the_post();

?>