<?php
$featurette_title = get_field('featurette_title', 9);
$featurette_url = get_field('featurette_url', 9);
?>

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