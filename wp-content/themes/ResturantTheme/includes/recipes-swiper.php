<?php

$args = [

    'post_type' => 'recipes'
];

$query = new WP_Query($args);
?>

<?php if ($query->have_posts()) : ?>

    <?php while ($query->have_posts()) : $query->the_post(); ?>
        <!-- <div class="card">
            <h3>
                <?php the_title(); ?>
            </h3>

        </div> -->
        <?php if (has_post_thumbnail()) : ?>

            <div class="swiper-slide">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            </div>

        <?php endif; ?>


    <?php endwhile; ?>


<?php endif; ?>