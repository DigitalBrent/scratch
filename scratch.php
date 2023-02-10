<?php 
function register_my_menus() {
  register_header_menus(
    array(
      'top-menu' => __( 'Top Menu' ),
      'mid-menu' => __( 'Middle Menu' ),
      'bot-menu' => __( 'Bottom Menu' )
    )
  );
}
add_action( 'init', 'register_header_menus' );

function menu_shortcode($atts, $content = null) {
    extract(shortcode_atts(array( 'name' => null, ), $atts));
    return wp_nav_menu( array( 'menu' => $name, 'echo' => false ) );
}
    
add_shortcode('menu', 'menu_shortcode');
$randomvar = "hello";
?>