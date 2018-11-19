<?php
$project_features_title = get_field('project_features_title');
$project_feature_body = get_field('project_feature_body');
$project_features = new WP_Query(array(
  'post_type' => 'project_feature',
  'orderby' => 'ID',
  'order' => 'ASC'
));
?>

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
        <?php endwhile; wp_reset_postdata(); ?>
      </div>

    </div>
</section>