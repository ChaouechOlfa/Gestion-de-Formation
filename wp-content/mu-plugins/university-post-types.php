<?php
function university_post_types()
{
   register_post_type('formation',array(
                       'public'=>true,
                     'labels'=>array(
                        'name'=>'Formations',
                        'add_new_item'=>'Ajouter Formation',
                        'edit_item'=>'Modifier Formation',
                        'all_items'=>'Lister Formations',
                        'singular_name'=>'Formation'
                     ),
                     'menu_icon'=>'dashicons-calendar'
                  ));
}
add_action('init','university_post_types');
add_action('after_setup_theme','university_features');
?>
