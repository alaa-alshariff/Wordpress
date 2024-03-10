<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



        <div class="content">
            <h2> <?php the_title(); ?> </h2>


            <?php the_content(); ?>

        </div>

        <div class="credentials">

            <?php
            $fname = get_the_author_meta('first_name');
            $lname = get_the_author_meta('last_name');
            ?>

            <p> Posted By <span class="author"><?php echo $fname; ?> <?php echo $lname; ?> </span> on <span class="date"><?php echo get_the_date('d/m/y'); ?></span></p>
        </div>



        <?php
        $categories = get_the_category();
        foreach ($categories as $cat) : ?>
            <a href=" <?php echo get_category_link($cat->term_id); ?>">
                <?php echo $cat->name; ?>
            </a>
        <?php endforeach; ?>


<?php endwhile;
else : endif; ?>