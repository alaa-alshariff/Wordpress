<?php get_header(); ?>

<section class="Homepage hidden">

    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="home_left_side">

                    <div class="home_info">
                        <?php get_template_part('includes/section', 'content'); ?>
                    </div>
                    <div class="thumbnails">
                        <div thumbsSlider="" class="swiper mySwiper">
                            <div class="swiper-wrapper">

                                <?php get_template_part('includes/recipes', 'swiper'); ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-6">
                <div class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        <?php get_template_part('includes/recipes', 'swiper'); ?>
                    </div>
                </div>

            </div>
        </div>
</section>



<?php get_footer(); ?>