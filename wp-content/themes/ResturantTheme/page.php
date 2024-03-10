<?php get_header(); ?>

<div class="container">

    <div class="row">
        <div class="col-4">

            <?php if (is_active_sidebar('page-sidebar')) : ?>
                <?php dynamic_sidebar('page-sidebar'); ?>

            <?php endif; ?>

        </div>

        <div class="col-8">

            <h1><?php the_title(); ?></h1>

            <?php get_template_part('includes/section', 'content'); ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>