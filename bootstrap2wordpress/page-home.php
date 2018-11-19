<?php
/*
    Template Name: Home Page
*/
$page_id = 9;

// hero section
$prelaunch_price = get_post_meta($page_id, 'prelaunch_price', true);
$launch_price = get_post_meta($page_id, 'launch_price', true);
$final_price = get_post_meta($page_id, 'final_price', true);

$course_url = get_post_meta($page_id, 'course_url', true);
$course_button_text = get_post_meta($page_id, 'course_button_text', true);

$optin_text = get_post_meta($page_id, 'optin_text', true);
$optin_button_text = get_post_meta($page_id, 'optin_button_text', true);

// boot your income section
$income_feature_image = get_field('income_feature_image', $page_id);
$income_feature_image = !empty($income_feature_image)
  ? $income_feature_image
  : array(
    'url' => get_template_directory_uri() . '/assets/img/icon-boost.png',
    'alt' => 'An icon of graph'
  );

$income_section_title = get_field('income_section_title', $page_id);
$income_section_description = get_field('income_section_description', $page_id);
$income_reason_1_title = get_field('reason_1_title', $page_id);
$income_reason_1_description = get_field('reason_1_description', $page_id);
$income_reason_2_title = get_field('reason_2_title', $page_id);
$income_reason_2_description = get_field('reason_2_description', $page_id);

// who should take this course section
$who_section_image = get_field('who_section_image', $page_id);
$who_section_image = !empty($who_section_image)
  ? $who_section_image
  : array(
    'url' => get_template_directory_uri() . '/assets/img/icon-pad.png',
    'alt' => 'An icon of pad'
  );

$who_section_title = get_field('who_section_title', $page_id);
$who_section_body = get_field('who_section_body', $page_id);  

// course features section
$features_section_image = get_field('features_section_image', $page_id);
$features_section_image = !empty($features_section_image)
  ? $features_section_image
  : array(
    'url' => get_template_directory_uri() . '/assets/img/icon-rocket.png',
    'alt' => 'An icon of rocket'
  );

$features_section_title = get_field('features_section_title', $page_id);
$features = new WP_Query(array(
  'post_type' => 'course_feature',
  'orderby' => 'ID',
  'order' => 'ASC'
));

// final project features section
$project_features_title = get_field('project_features_title', $page_id);
$project_feature_body = get_field('project_feature_body', $page_id);
$project_features = new WP_Query(array(
  'post_type' => 'project_feature',
  'orderby' => 'ID',
  'order' => 'ASC'
));

// course introduction section
$featurette_title = get_field('featurette_title');
$featurette_url = get_field('featurette_url');

// instructor section
$instructor_section_title = get_field('instructor_section_title');
$instructor_name = get_field('instructor_name');
$instructor_twitter_username = get_field('instructor_twitter_username');
$instructor_facebook_username = get_field('instructor_facebook_username');
$instructor_google_plus_username = get_field('instructor_google_plus_username');
$instructor_bio_excerpt = get_field('instructor_bio_excerpt');
$instructor_full_bio = get_field('instructor_full_bio');
$instructor_students = get_field('instructor_students');
$instructor_reviews = get_field('instructor_reviews');
$instructor_courses = get_field('instructor_courses');

get_header();
?>

<!-- Hero -->
<section id="hero" data-type="background" data-speed="5">
    <article>
      <div class="container">
        <div class="row">
          <div class="col-sm-5">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-badge.png" alt="Bootstrap to Wordpress">
          </div>
          <div class="col-sm-7 hero-text">
            <h1><?php bloginfo('name'); ?></h1>
            <p class="lead"><?php bloginfo('description'); ?></p>
            <div id="price-timeline">
              <div class="price active">
                <h4>Pre-Launch Price <small>Ends soon!</small></h4>
                <span><?php echo $prelaunch_price; ?></span>
              </div>
              <div class="price">
                <h4>Launch Price <small>Coming soon!</small></h4>
                <span><?php echo $launch_price; ?></span>
              </div>
              <div class="price">
                  <h4>Final Price <small>Coming soon!</small></h4>
                  <span><?php echo $final_price; ?></span>
              </div>
            </div>

            <div>
              <a href="<?php echo $course_url; ?>" class="btn btn-lg btn-danger" role="button"><?php echo $course_button_text; ?></a>
            </div>
          </div>
        </div>
      </div>
    </article>
  </section>

  <!-- Opt in section -->
  <section id="optin">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <p class="lead"><?php echo $optin_text; ?></p>
        </div>
        <div class="col-sm-4">
          <button 
            class="btn btn-lg btn-success btn-block"
            data-toggle="modal"
            data-target="#myModal"
          >
            <?php echo $optin_button_text; ?>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Boost your income -->
  <section>
    <div class="container">
      <div class="section-header">
        <img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt']; ?>">
        <h2><?php echo $income_section_title; ?></h2>
      </div>

      <p class="lead"><?php echo $income_section_description; ?></p>

      <div class="row">
        <div class="col-sm-6">
          <h3><?php echo $income_reason_1_title; ?></h3>
          <p><?php echo $income_reason_1_description; ?></p>
        </div>
        <div class="col-sm-6">
          <h3><?php echo $income_reason_2_title; ?></h3>
          <p><?php echo $income_reason_2_description; ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- Who benefits -->
  <section id="who-benefits">
    <div class="container">
      <div class="section-header">
        <img src="<?php echo $who_section_image['url']; ?>" alt="<?php echo $who_section_image['alt']; ?>">
        <h2><?php echo $who_section_title; ?></h2>
      </div>

      <div class="row">
        <div class="col-sm-8 offset-sm-2"><?php echo $who_section_body; ?></div>
      </div>
    </div>
  </section>

  <!-- Course features -->
  <section id="course-features">
    <div class="container">

      <div class="section-header">
        <img src="<?php echo $features_section_image['url']; ?>" alt="<?php echo $features_section_image['alt']; ?>">
        <h2>Course Features</h2>
      </div>

      <div class="row">
        <?php while ($features->have_posts()) : $features->the_post(); ?>
          <div class="col-sm-2">
            <i class="<?php the_field('course_feature_icon'); ?>"></i>
            <h4><?php the_title(); ?></h4>
          </div>
        <?php endwhile; ?>
      </div>

    </div>
  </section>

  <!-- Project features -->
  <section id="project-features">
    <div class="container">

      <h2><?php echo $project_features_title; ?></h2>
      <p class="lead"><?php echo $project_feature_body; ?></p>

      <div class="row">
        <?php while ($project_features->have_posts()): $project_features->the_post(); ?>
          <div class="col-sm-4">
            <?php
              if (has_post_thumbnail()) {
                the_post_thumbnail();
              }
            ?>

            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
          </div>
        <?php endwhile; ?>
      </div>

    </div>
  </section>

  <!-- Video featurette -->
  <section id="featurette">

    <div class="container">
      <div class="row">
        <div class="col-sm-8 offset-sm-2">
          <h2><?php echo $featurette_title; ?></h2>

          <div class="embed-container">
            <?php echo $featurette_url; ?>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- Instructor -->
  <section id="instructor">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-6">

          <div class="row">
            <div class="col-lg-8">
              <h2><?php echo $instructor_section_title; ?> <small class="text-muted"><?php echo $instructor_name; ?></small></h2>
            </div>
            <div class="col-lg-4">
              <a href="https://twitter.com/<?php echo $instructor_twitter_username; ?>" target="_blank" class="badge social twitter">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://facebook.com/<?php echo $instructor_facebook_username; ?>" target="_blank" class="badge social facebook">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://plus.google.com/<?php echo $instructor_google_plus_username; ?>" target="_blank" class="badge social gplus">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </div>
          </div>

          <p class="lead"><?php echo $instructor_bio_excerpt; ?></p>
          <?php echo $instructor_full_bio; ?>

          <hr>

          <h3>The Numbers <small class="text-muted">They Don't Lie</small></h3>

          <div class="row">
            <div class="col-4">
              <div class="num">
                <div class="num-content"><?php echo $instructor_students; ?> <span>students</span></div>
              </div>
            </div>

            <div class="col-4">
              <div class="num">
                <div class="num-content"><?php echo $instructor_reviews; ?> <span>reviews</span></div>
              </div>
            </div>

            <div class="col-4">
              <div class="num">
                <div class="num-content"><?php echo $instructor_courses; ?> <span>courses</span></div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section id="kudos">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 offset-sm-2">
          <h2>What People Are Saying About Brad</h2>

          <div class="row testimonial">
            <div class="col-sm-4">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brennan.jpg" alt="Brennan">
            </div>
            <div class="col-sm-8">
              <blockquote>
                These videos are well created, concise, fast-paced, easy to follow, and just funny enough to keep you chuckling as you're slamming out lines of code. I've taken 3 courses from this instructor. Whenever I have questions he is right there with a simple solution or a helpful suggestion to keep me going forward with the course work.
                <cite>&mdash; Brennan, graduate of all of Brad's courses</cite>
              </blockquote>
            </div>
          </div>

          <div class="row testimonial">
            <div class="col-sm-4">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ben.png" alt="Illustration of a man with a mustache">
            </div>
            <div class="col-sm-8">
              <blockquote>
                I found Brad to be a great teacher, and a very inspiring person. It's clear he is very passionate about helping designers learn to code, and I look forward to more courses from him!
                <cite>&mdash; Ben, graduate of Build a Website from scratch with HTML</cite>
              </blockquote>
            </div>
          </div>

          <div class="row testimonial">
            <div class="col-sm-4">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aj.png" alt="Illustration of a man with a beard">
            </div>
            <div class="col-sm-8">
              <blockquote>
                Brad is amazing and I honestly think he's the best tutor of all the courses I have taken on Udemy. Will defenitely be following him in the future. Thanks Brad!
                <cite>&mdash; AJ, graduate of Code a Responsive Website with Bootstrap 3</cite>
              </blockquote>
            </div>
          </div>

          <div class="row testimonial">
            <div class="col-sm-4">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ernest.png" alt="Illustration of a man with a goatee">
            </div>
            <div class="col-sm-8">
              <blockquote>
                Brad is an excellent instructor. His content is super high quality, and you can see the love and care put into every section. The tutorials are the perfect length, and you feel lik you doing something right out the gate! I really can't believe this is free. I highly recommend taking advantage of this course.
                <cite>&mdash; Ernest, graduate of Code Dynamic Websites with PHP</cite>
              </blockquote>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
