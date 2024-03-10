<?php get_header(); ?>

<div class="recipe_details">
    <div class="container">



        <?php if (has_post_thumbnail()) : ?>

            <div class="recipe_img">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            </div>

        <?php endif; ?>
        <div class="row">
            <div class="col-4">
                <div class="ingredients">

                    <h2> Ingredients:</h2>
                    <ul>
                        <?php echo get_post_meta($post->ID, 'Ingredients', true); ?> </ul>
                </div>

            </div>
            <div class="col-8">
                <div class="preparation">


                    <?php get_template_part('includes/section', 'blogcontent'); ?>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="latest-recipes hidden" >
    <div class="container">
        <h3 class="latest_title">Latest Recipes</h3>
        <div class="swiper mySwiper3">
            <div class="swiper-wrapper">
                <?php get_template_part('includes/latest', 'recipes'); ?>
            </div>
        </div>
    </div>
</section>






<?php get_footer(); ?>