<?php
Function university_files(){
    wp_enqueue_style('university_font_styles','//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i');
   wp_enqueue_style('university_main_styles','/vendor/animate.css/animate.min.css');
   wp_enqueue_style('university_extra_styles','vendor/aos/aos.css');
   wp_enqueue_style('university_extra1_styles','/vendor/bootstrap/css/bootstrap.min.css');
   wp_enqueue_style('university_extra2_styles','/vendor/bootstrap-icons/bootstrap-icons.css');
   wp_enqueue_style('university_extra3_styles','/vendor/boxicons/css/boxicons.min.css');
   wp_enqueue_style('university_extra4_styles','/vendor/remixicon/remixicon.css');
   wp_enqueue_style('university_extra5_styles','/vendor/swiper/swiper-bundle.min.css');
   wp_enqueue_style('university_extra6_styles','/css/style.css');
}
add_action( 'wp_enqueue_scripts','university_files');

?>