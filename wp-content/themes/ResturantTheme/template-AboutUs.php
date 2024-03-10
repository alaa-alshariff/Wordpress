<?php

/*
Template Name: About Us

*/
?>
<?php get_header(); ?>

<section class="aboutus hidden">
    <div class="container">
        <div class="content">
            <h3>
                <?php the_title(); ?>
            </h3>
            <?php the_content(); ?>
        </div>
        <div class="aboutus_block">


            <div class="counter_Card">
                <i class="bi bi-person-arms-up"></i>
                <span>

                    <span class="counter">125</span> +
                </span>
                <p>Happy customers</p>
            </div>


            <div class="counter_Card">
                <i class="bi bi-person-arms-up"></i>
                <span>

                    <span class="counter">100</span> +
                </span>
                <p>Recipes</p>
            </div>


            <div class="counter_Card">
                <i class="bi bi-person-arms-up"></i>
                <span>

                    <span class="counter">100</span> %
                </span>
                <p>Satisfaction Guarantee</p>


            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>