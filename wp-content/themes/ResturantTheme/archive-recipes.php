<?php get_header(); ?>

<div class="archives_section hidden">
    <div class="container">
        <h3 class="archive_title">All Recipes <i class="bi bi-stars"></i></h3>
        <div class="recipe_archives">
            <?php get_template_part('includes/section', 'archive'); ?>
        </div>

        <?php previous_posts_link(); ?>
        <?php next_posts_link(); ?>

    </div>
</div>

<?php get_footer(); ?>