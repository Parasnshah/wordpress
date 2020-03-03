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

//custom template files
get_template_part();

//comments template
comments_template();

//Display search form.
get_search_form();

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
wp_nav_menu()
walk_nav_menu_tree()

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


//Auther
the_author()
get_the_author()
the_author_link()
get_the_author_link()
the_author_meta()
the_author_posts()
the_author_posts_link()
wp_dropdown_users()
wp_list_authors()
get_author_posts_url()

//Category
category_description()
single_cat_title()
the_category()
the_category_rss()
wp_dropdown_categories()
wp_list_categories()
single_tag_title()
tag_description()
the_tags()
wp_generate_tag_cloud()
wp_tag_cloud()
term_description()
single_term_title()
get_the_term_list()
the_terms()
the_taxonomies()

//comment
cancel_comment_reply_link()
comment_author()
comment_author_email()
comment_author_email_link()
comment_author_IP()
comment_author_link()
comment_author_rss()
comment_author_url()
comment_author_url_link()
comment_class()
comment_date()
comment_excerpt()
comment_form_title()
comment_form()
comment_ID()
comment_id_fields()
comment_reply_link()
comment_text()
comment_text_rss()
comment_time()
comment_type()
comments_link()
comments_number()
comments_popup_link()
comments_popup_script()
comments_rss_link()
get_avatar()
next_comments_link()
paginate_comments_links()
permalink_comments_rss()
previous_comments_link()
wp_list_comments()

//links
the_permalink()
user_trailingslashit()
permalink_anchor()
get_permalink()
get_post_permalink()
post_permalink()
get_page_link()
get_attachment_link()
wp_shortlink_header()
wp_shortlink_wp_head()
edit_bookmark_link()
edit_comment_link()
edit_post_link()
get_edit_post_link()
get_delete_post_link()
edit_tag_link()
get_admin_url()
get_home_url()
get_site_url()
home_url()
site_url()
get_search_link()
get_search_query()
the_feed_link()

//post thumbnail
has_post_thumbnail()
get_post_thumbnail_id()
the_post_thumbnail()
get_the_post_thumbnail()










//code section
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