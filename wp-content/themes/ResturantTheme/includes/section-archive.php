<?php if (have_posts()) : while (have_posts()) : the_post(); ?>





                <div class="recipe_card">

                        <?php if (has_post_thumbnail()) : ?>

                                <div class="recipe_image">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                </div>

                        <?php endif; ?>

                        <div class="content">

                                <h3>
                                        <?php the_title(); ?>
                                </h3>

                                <?php the_excerpt(); ?>

                                <a class="primary_btn" href="<?php the_permalink(); ?>">Check Full Recipe</a>
                        </div>

                </div>
<?php endwhile;
else : endif; ?>