<?php

/**********************************************************************************
nb_theme_setup - sets up themes
- adds theme support for post formats, post thumbnails, HTML5 and automatic feed links
- registers a translation file
- registers navigation menus
**********************************************************************************/


require(get_template_directory().'/inc/acf.php');
require(get_template_directory().'/inc/widgets.php');

// Optimising website performances
include(get_template_directory().'/inc/wp-settings.php');


// Admin Requirements
if(is_admin()){
    
}
