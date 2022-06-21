<?php
function university_post_types()
{
   register_post_type('event',array(
                       'public'=>true,
                     'labels'=>array(
                        'name'=>'Formations',
                        'add_new_item'=>'Ajouter Formation',
                        'edit_item'=>'Modifier Formation',
                        'all_items'=>'lister Formations'
                     ),
                     'menu_icon'=>'dashicons-calendar'
                  ));
}
add_action('init','university_post_types');
add_action('after_setup_theme','university_features');
?>
