<?php
get_header();
?>

<!-- Feature Image -->
<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
    <h1 class="page-title">Blog</h1>
</section>

<!-- Blog Content -->
<div class="container">
    <div class="row" id="primary">

        <main id="content" class="col-sm-8" role="main">
            <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        get_template_part('template-parts/content', get_post_format());
                    }

                    the_posts_pagination();
                } else {
                    get_template_part('template-parts/content', 'none');
                }
            ?>
        </main>

        <!-- SIDEBAR -->
        <aside class="col-sm-4">
            <?php get_sidebar(); ?>
        </aside><!-- SIDEBAR -->

    </div>
</div>

<?php
get_footer();