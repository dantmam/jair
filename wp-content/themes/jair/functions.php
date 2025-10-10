<?php
/*
All the functions are in the PHP files in the `functions/` folder.
*/

if (! defined('ABSPATH')) {
  exit;
}
require get_template_directory() . '/functions/cleanup.php';
require get_template_directory() . '/functions/setup.php';
require get_template_directory() . '/functions/enqueues.php';
require get_template_directory() . '/functions/hooks.php';
require get_template_directory() . '/functions/navbar.php';
require get_template_directory() . '/functions/dimox-breadcrumbs.php';
require get_template_directory() . '/functions/widgets.php';
require get_template_directory() . '/functions/search-widget.php';
require get_template_directory() . '/functions/single-split-pagination.php';


// Desativa a criação da versão "scaled" das imagens grandes
add_filter('big_image_size_threshold', '__return_false');