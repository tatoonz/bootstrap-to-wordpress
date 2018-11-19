<?php
$testimonials = new WP_Query(array(
  'post_type' => 'testimonial',
  'orderby' => 'ID',
  'order' => 'ASC'
));
?>

<!-- Testimonials -->
<section id="kudos">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 offset-sm-2">
          <h2>What People Are Saying About Brad</h2>

          <?php while ($testimonials->have_posts()): $testimonials->the_post(); ?>
            <div class="row testimonial">
              <div class="col-sm-4">
                <?php
                  if (has_post_thumbnail()) {
                    the_post_thumbnail();
                  }
                ?>
              </div>
              <div class="col-sm-8">
                <blockquote>
                  <?php the_content(); ?>
                  <cite>&mdash; <?php the_title(); ?></cite>
                </blockquote>
              </div>
            </div>
          <?php endwhile; wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
</section>