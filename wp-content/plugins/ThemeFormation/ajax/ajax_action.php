<?php
add_action('wp_ajax_wqnew_entry', 'wqnew_entry_callback_function');
add_action('wp_ajax_nopriv_wqnew_entry', 'wqnew_entry_callback_function');

function wqnew_entry_callback_function() {
  global $wpdb;
  $wpdb->get_row( "SELECT * FROM `wp_theme_crud` WHERE `ThemeFormation` = '".$_POST['wqThemeFormation']."' AND `description` = '".$_POST['wqdescription']."' ORDER BY `id` DESC" );
  if($wpdb->num_rows < 1) {
    $wpdb->insert("wp_theme_crud", array(
      "ThemeFormation" => $_POST['wqThemeFormation'],
      "description" => $_POST['wqdescription'],
      "created_at" => time(),
      "updated_at" => time()
    ));

    $response = array('message'=>'Les données ont été insérées avec succès', 'rescode'=>200);
  } else {
    $response = array('message'=>'Les données existent déjà', 'rescode'=>404);
  }
  echo json_encode($response);
  exit();
  wp_die();
}



add_action('wp_ajax_wqedit_entry', 'wqedit_entry_callback_function');
add_action('wp_ajax_nopriv_wqedit_entry', 'wqedit_entry_callback_function');

function wqedit_entry_callback_function() {
  global $wpdb;
  $wpdb->get_row( "SELECT * FROM `wp_theme_crud` WHERE `ThemeFormation` = '".$_POST['wqThemeFormation']."' AND `description` = '".$_POST['wqdescription']."' AND `id`!='".$_POST['wqentryid']."' ORDER BY `id` DESC" );
  if($wpdb->num_rows < 1) {
    $wpdb->update( "wp_theme_crud", array(
      "ThemeFormation" => $_POST['wqThemeFormation'],
      "description" => $_POST['wqdescription'],
      "updated_at" => time()
    ), array('id' => $_POST['wqentryid']) );

    $response = array('message'=>'Les données ont été mises à jour avec succès', 'rescode'=>200);
  } else {
    $response = array('message'=>'Les données existent déjà', 'rescode'=>404);
  }
  echo json_encode($response);
  exit();
  wp_die();
}
