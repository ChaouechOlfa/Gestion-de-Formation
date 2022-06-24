<?php
/*function university_post_types()
{
   register_post_type('formation',array(
                       'public'=>true,
                     'labels'=>array(
                        'name'=>'Formations',
                        'add_new_item'=>'Ajouter Formation',
                        'edit_item'=>'Modifier Formation',
                        'all_items'=>'Lister Formations',
                        'singular_name'=>'Formation',
                        'featured_image'     => 'Poster',
                        'set_featured_image' => 'Add Poster'
                     ),
                     'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
                     'menu_icon'=>'dashicons-calendar'
                  ));
}
add_action('init','university_post_types');*/
add_theme_support('post-thumbnails');
add_post_type_support( 'formation', 'thumbnail' );  
add_action( 'init', 'ht_custom_post_formation' );
// The custom function to register a Formation post type
function ht_custom_post_formation() {
// Set the labels, this variable is used in the $args array
$labels = array(
'name'               => __( 'Formations' ),
'singular_name'      => __( 'Formation' ),
'add_new'            => __( 'Ajouter une Formation' ),
'add_new_item'       => __( 'Ajouter une Formation' ),
'edit_item'          => __( 'Modifier Formation' ),
'new_item'           => __( 'Nouvelle Formation' ),
'all_items'          => __( 'Lister Formations' ),
'view_item'          => __( 'Consulter Formation' ),
'search_items'       => __( 'Rechercher Formation' ),
'featured_image'     => 'Poster',
'set_featured_image' => 'Ajouter Poster'
);
// The arguments for our post type, to be entered as parameter 2 of register_post_type()
$args = array(
'labels'            => $labels,
'description'       => 'description formation',
'public'            => true,
'menu_position'     => 5,
'supports'          => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields' ),
'has_archive'       => true,
'show_in_admin_bar' => true,
'show_in_nav_menus' => true,
'query_var'         => true,
'menu_icon'=>'dashicons-calendar'
);
// Call the actual WordPress function
// Parameter 1 is a name for the post type
// Parameter 2 is the $args array
register_post_type( 'formation', $args);
}
?>

