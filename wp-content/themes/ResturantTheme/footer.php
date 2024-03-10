<?php
?>
<footer class="site-footer hidden">
    <div class="container">
        <div class="row">

            <div class="col-4">
                <?php dynamic_sidebar('footer-widget-col-one'); ?>
            </div>

            <div class="col-4">

                <?php dynamic_sidebar('footer-widget-col-two'); ?>
            </div>
            <div class="col-4">

                <?php dynamic_sidebar('footer-widget-col-three'); ?>
            </div>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>
</body>

</html>