<?php show_admin_bar(true); ?>

<?php

// Register Custom Navigation Walker
require_once get_template_directory() .'/class-wp-bootstrap-navwalker.php';
register_nav_menus(array(
    'primary-menu' => __('Primary Menu')
));

add_theme_support('post-thumbnails');
add_theme_support('menus');


?>