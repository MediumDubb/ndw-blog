<?php
get_header();

if( is_home() ){
    get_template_part( 'framework/page_templates/page-blog', 'blog' );
}

get_footer();
