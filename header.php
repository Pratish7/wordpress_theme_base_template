<!DOCTYPE html>
<html>

<head>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="sticky-top">
        <!--display the navigation menu-->
        <div class='container'>
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'top-menu',
                    'menu-class' => 'navigation'
                )
            ); ?>
        </div>
    </header>