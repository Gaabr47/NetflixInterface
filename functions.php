<?php 
function ed_support_thumbnails() {
    add_theme_support('post-thumbnails'); // thumbnails
}
add_action('after_setup_theme', 'ed_support_thumbnails'); // carrega parametros de suporte do tema


?>

<?php
/* WIDGETS */
 
if (function_exists('register_sidebar'))
{
register_sidebar(array(
'name' => 'Sidebar',
'before_widget' => '<div class="widget">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
}
 
?>