<?php
    $page_id = 9;

    // hero section
    $prelaunch_price = get_post_meta($page_id, 'prelaunch_price', true);
    $launch_price = get_post_meta($page_id, 'launch_price', true);
    $final_price = get_post_meta($page_id, 'final_price', true);

    $course_url = get_post_meta($page_id, 'course_url', true);
    $course_button_text = get_post_meta($page_id, 'course_button_text', true);
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