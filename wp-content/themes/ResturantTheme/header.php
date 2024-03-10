<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restuarant</title>

    <?php wp_head(); ?>

</head>

<body>

    <header>
        <?php get_template_part('includes/section', 'topbar'); ?>
        <div class="menu-holder hidden">

            <div class="container">


                <div class="menu">
                    <div class="logo">
                        <?php

                        $custom_logo = get_custom_logo();
                        if ($custom_logo) {
                            echo $custom_logo;
                        } else {
                            echo '<h1>' . get_bloginfo('name') . '</h1>';
                        }
                        ?>
                    </div>

                    <div class="navigation">
                        <?php wp_nav_menu(

                            array(
                                'theme_location' => 'top-menu',
                                'menu_class' => 'top-bar'
                            )
                        );
                        ?>

                    </div>

                </div>
            </div>
        </div>
    </header>