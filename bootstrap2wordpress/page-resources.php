<?php
/*
    Template Name: Resources Page
*/

get_header();

while (have_posts()) : the_post();
?>
<!-- feature-image -->
<section
    class="feature-image feature-image-default"
    data-type="background"
    data-speed="2"

    <?php if (has_post_thumbnail()): ?>
        style="background: url('<?php the_post_thumbnail_url(); ?>') no-repeat; background-size: cover;"
    <?php endif; ?>
>
    <h1 class="page-title"><?php the_title(); ?></h1>
</section><!-- feature-image -->

  <!-- Main Content -->
<div class="container">
    <div class="row" id="primary">

      <div id="content" class="col-sm-12">

        <section class="main-content">
            <?php the_content(); ?>
          
            <hr>

            <?php
                $resources = new WP_Query(array(
                    'post_type' => 'resource',
                    'orderby' => 'ID',
                    'order' => 'ASC'
                ));
            ?>

            <div class="resource-row clearfix">
                <?php 
                    while ($resources->have_posts()):
                        $resources->the_post();

                        $resource_image = get_field('resource_image');
                        $resource_url = get_field('resource_url');                        
                        $add_button = get_field('resource_add_button');
                        $button_text = get_field('resource_button_text');
                ?>
                    <div class="resource">
                        <img src="<?php echo $resource_image['url']; ?>" alt="<?php echo $resource_image['alt']; ?>">
                        <h3><a href="<?php echo $resource_url; ?> "><?php the_title(); ?></a></h3>
                        <?php the_content(); ?>

                        <?php if($add_button && !empty($button_text)): ?>
                            <a href="<?php echo $resource_url; ?>" class="btn btn-success">
                                <?php echo $button_text; ?>
                            </a>
                        <?php endif; ?>
                    </div><!-- resource -->
                <?php endwhile; ?>
            </div>

        </section><!-- main-content -->

      </div><!-- #content -->

    </div><!-- #primary -->
</div><!-- container -->

<?php
endwhile;

get_footer();
