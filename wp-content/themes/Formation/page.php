<?php get_header(); ?>

<main id="main" data-aos="fade-in">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">
    <h2>Formations</h2>
    <p>A remplir après </p>
  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Courses Section ======= -->
<section id="courses" class="courses">
  <div class="container" data-aos="fade-up">

    <div class="row" data-aos="zoom-in" data-aos-delay="100">

    <?php
              $homepageEvents = new WP_Query(array(
                'posts_per_page'=> 3,
                'post_type' =>'formation'
            ));
            while($homepageEvents->have_posts()){
                $homepageEvents->the_post();?>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="course-item">
        <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'title' => 'Feature image']); ?>
          <div class="course-content">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4><?php the_title()?></h4>
              <p class="price">$169</p>
            </div>

            <h3><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>
            <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
            <div class="trainer d-flex justify-content-between align-items-center">
              <div class="trainer-profile d-flex align-items-center">
              <img src="<?php echo get_theme_file_uri('/img/trainers/trainer-1.jpg')?>" class="img-fluid" alt="">
                <span>Antonio</span>
              </div>
              <div class="trainer-rank d-flex align-items-center">
                <i class="bx bx-user"></i>&nbsp;50
                &nbsp;&nbsp;
                <i class="bx bx-heart"></i>&nbsp;65
              </div>
            </div>
          </div>
        </div>
      </div> <!-- End Course Item-->

      <?php
                }
                ?>

    </div>

  </div>
</section><!-- End Courses Section -->

</main><!-- End #main -->

<?php get_footer(); ?>
