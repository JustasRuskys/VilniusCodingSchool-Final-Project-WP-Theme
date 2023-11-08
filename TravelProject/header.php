<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="wp-content/themes/TravelProject/assets/images/airplane.png">

    <?php
    wp_head();
    ?>

</head>

<body>
    <!--==========HEADER==========-->
    <header class="header" id="header">
        <nav class="nav container">
            
            <?php
            if (function_exists('the_custom_logo')) {
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                if (has_custom_logo()) {
                    echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="nav__logo">';
                } else {
                    echo '<p class="nav__logo">' . get_bloginfo('name') . '</p>';
                }
            }
            ?>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">About</a>
                    </li>
                    <li class="nav__item">
                        <a href="#popular" class="nav__link">Popular</a>
                    </li>
                    <li class="nav__item">
                        <a href="#explore" class="nav__link">Explore</a>
                    </li>
                </ul>

                <!--CLOSE BUTTON-->
                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>

            <!--MENU BUTTON-->
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-fill"></i>
            </div>
        </nav>
    </header>