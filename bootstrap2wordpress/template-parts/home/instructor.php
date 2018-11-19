<?php
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
?>

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