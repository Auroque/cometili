<?php 

include 'links/link-bootstrap.php';
include 'posttype/slide.php';
include 'posttype/artigo.php';
include 'posttype/parceiros.php';
include 'posttype/clientes.php';

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 380, 300 );
add_theme_support('nav-menus');