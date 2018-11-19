<?php
$who_section_image = get_field('who_section_image');
$who_section_image = !empty($who_section_image)
  ? $who_section_image
  : array(
    'url' => get_template_directory_uri() . '/assets/img/icon-pad.png',
    'alt' => 'An icon of pad'
  );

$who_section_title = get_field('who_section_title');
$who_section_body = get_field('who_section_body');  
?>

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