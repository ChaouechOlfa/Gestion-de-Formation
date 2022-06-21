<?php
Function university_files(){

   wp_enqueue_style('university_font_styles','//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i');
   wp_enqueue_style('university_main_styles',  get_template_directory_uri() . '/vendor/animate/animate.min.css');
   wp_enqueue_style('university_extra_styles', get_template_directory_uri() .  '/vendor/aos/aos.css');
   wp_enqueue_style('university_extra1_styles',get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');
   wp_enqueue_style('university_extra2_styles',get_template_directory_uri() . '/vendor/bootstrap-icons/bootstrap-icons.css');
   wp_enqueue_style('university_extra3_styles',get_template_directory_uri() . '/vendor/boxicons/css/boxicons.min.css');
   wp_enqueue_style('university_extra4_styles',get_template_directory_uri() . '/vendor/remixicon/remixicon.css');
   wp_enqueue_style('university_extra5_styles',get_template_directory_uri() . '/vendor/swiper/swiper-bundle.min.css');
 
   wp_enqueue_style('university_extra6_styles',get_template_directory_uri() . '/css/style.css');

  
   wp_enqueue_script('university_extra1_script',get_template_directory_uri() . '/vendor/purecounter/purecounter.js');
   wp_enqueue_script('university_extra2_script',get_template_directory_uri() . '/vendor/aos/aos.js');
   wp_enqueue_script('university_extra3_script',get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js');
   wp_enqueue_script('university_extra4_script',get_template_directory_uri() . '/vendor/swiper/swiper-bundle.min.js');
   wp_enqueue_script('university_extra5_script',get_template_directory_uri() . '/vendor/php-email-form/validate.js');
   wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}

add_action('wp_enqueue_scripts','university_files');
function university_features(){
   register_nav_menu('headerMenuLocation','Header Menu Location');
   add_theme_support('title_tag');
}

function university_post_types()
{
   register_post_type('event',array(
                       'public'=>true,
                     'labels'=>array(
                        'name'=>'Events'
                     ),
                     'menu_icon'=>'dashicons-calendar'
                  ));
}
add_action('init','university_post_types');
add_action('after_setup_theme','university_features');


 

?>