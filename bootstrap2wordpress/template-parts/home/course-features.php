<?php
$features_section_image = get_field('features_section_image');
$features_section_image = !empty($features_section_image)
  ? $features_section_image
  : array(
    'url' => get_template_directory_uri() . '/assets/img/icon-rocket.png',
    'alt' => 'An icon of rocket'
  );

$features_section_title = get_field('features_section_title');
$features = new WP_Query(array(
  'post_type' => 'course_feature',
  'orderby' => 'ID',
  'order' => 'ASC'
));
?>

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
      <?php endwhile; wp_reset_postdata(); ?>
    </div>

  </div>
</section>