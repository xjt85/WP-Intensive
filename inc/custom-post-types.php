<?php
function wpint_cpt_gallery() {
    $labels = array(
        'name'                  => 'Галерея',
        'singular_name'         => 'Галерея - элемент'
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'gallery' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'thumbnail', 'title', 'editor' ),
    );
 
    register_post_type( 'gallery', $args );
}
 
add_action( 'init', 'wpint_cpt_gallery' );

function wpint_cpt_deals() {
    $labels = array(
        'name'                  => 'Предложения',
        'singular_name'         => 'Предложение'
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'deals' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'thumbnail', 'title', 'editor' ),
    );
 
    register_post_type( 'deals', $args );
}
 
add_action( 'init', 'wpint_cpt_deals' );

function wpint_cpt_testimonials() {
    $labels = array(
        'name'                  => 'Отзывы',
        'singular_name'         => 'Отзыв'
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonials' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'thumbnail', 'title', 'editor' ),
    );
 
    register_post_type( 'testimonials', $args );
}
 
add_action( 'init', 'wpint_cpt_testimonials' );


function custom_taxonomy_for_wpint() {
    $args = array(
        'label'        => __( 'Location', 'wp-int' ),
        'public'       => true,
        'rewrite'      => false,
        'hierarchical' => true
    );
    $args_price = array(
        'label'        => __( 'Price', 'wp-int' ),
        'public'       => true,
        'rewrite'      => false,
        'hierarchical' => true
    );
    $args_type = array(
        'label'        => __( 'Type', 'wp-int' ),
        'public'       => true,
        'rewrite'      => false,
        'hierarchical' => true
    );
     
    register_taxonomy( 'location', 'deals', $args );
    register_taxonomy( 'price', 'deals', $args_price );
    register_taxonomy( 'type', 'deals', $args_type );
}
add_action( 'init', 'custom_taxonomy_for_wpint', 0 );