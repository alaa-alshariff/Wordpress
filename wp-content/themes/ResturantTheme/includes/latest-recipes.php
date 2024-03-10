<?php

$args = [

    'post_type' => 'recipes'
];

$query = new WP_Query($args);
?>

<?php if ($query->have_posts()) : ?>

    <?php while ($query->have_posts()) : $query->the_post(); ?>
        <div class="swiper-slide">
            <div class="row">
                <div class="col-3">
                    <?php if (has_post_thumbnail()) : ?>

                        <div class="recipe_pic">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        </div>

                    <?php endif; ?>

                </div>
                <div class="col-9">
                    <div class="latest_content">

                        <h3>
                            <?php the_title(); ?>
                        </h3>

                        <?php the_excerpt(); ?>

                        <a class="primary_btn" href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>


<?php endif; ?>