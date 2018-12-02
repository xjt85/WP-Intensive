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
