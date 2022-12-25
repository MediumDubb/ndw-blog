<?php
 get_header();

 if( is_front_page() ){
  get_template_part( 'framework/page_templates/page-home', 'home' );
 }

 get_footer();

