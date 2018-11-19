<?php
// boot your income section
$income_feature_image = get_field('income_feature_image');
$income_feature_image = !empty($income_feature_image)
  ? $income_feature_image
  : array(
    'url' => get_template_directory_uri() . '/assets/img/icon-boost.png',
    'alt' => 'An icon of graph'
  );

$income_section_title = get_field('income_section_title');
$income_section_description = get_field('income_section_description');
$income_reason_1_title = get_field('reason_1_title');
$income_reason_1_description = get_field('reason_1_description');
$income_reason_2_title = get_field('reason_2_title');
$income_reason_2_description = get_field('reason_2_description');
?>

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