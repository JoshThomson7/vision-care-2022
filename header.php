<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta charset="UTF-8">
    <title><?php wp_title( '-', true, 'right' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

    <?php wp_head(); ?>

    <script src="https://pxportal.xeyex.co.uk/ob/x3edabac23446401cfg"></script>
    <script src="https://pxportal.xeyex.co.uk/ob/x3edabac23446401"></script>
    <script src="https://kit.fontawesome.com/f6f8cbf1c2.js" crossorigin="anonymous"></script>

</head>

<body <?php body_class(); ?>>

    <?php 
        $general_background_image = '';
        if(get_field('general_background_image')){
            $general_background_image = 'class="background-sphere"';
        }
    ?>

    <?php require_once('modules/off-canvas-nav/templates/oc-menu.php'); ?>

	<div id="page" <?php echo $general_background_image;?> >

		<header class="header">

            <div class="pre__header">
                <div class="max__width">
                    <ul class="contact">
                        <li>
                            <?php wp_nav_menu(array('menu' => 'Phone List', 'container' => false)); ?>
                        </li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:info@vision-care.co.uk">info@vision-care.co.uk</a></li>
                        <li class="first social"><a href="https://twitter.com/visioncareuk" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li class="social"><a href="https://www.facebook.com/VisioncareMedicalEyeCentre/" target="_blank"><i class="fab fa-facebook"></i></a></li> 
                    </ul>

                    <div class="book_button">
                        <a href="/book-appointment/" class="book">Book Appointment</a>
                        <a href="/order-contact-lenses/" class="book">Order Contact Lenses</a>
                    </div>
                </div>
            </div>

            <div class="header__main">

                <div class="max__width">

                    <div class="header_logo_menu">
                        <div class="logo">
                            <a href="<?php echo esc_url(home_url()); ?>" title="<?php bloginfo('name'); ?>">
                                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/vision-care-logo.png" alt="<?php bloginfo('name'); ?>">
                            </a>
                        </div><!-- logo -->
                    </div>

                    <div class="header__cta">

                        <div class="header__menu">
                            <?php wp_nav_menu(array('menu' => 'Main Menu', 'container' => false)); ?>
                        </div><!-- header__right -->

                        <div class="oc__nav__trigger">
                            <a class="button outline primary small"><i class="fal fa-align-left"></i>Menu</a>
                        </div>
 
                    </div>

                </div><!-- max__width -->
            </div><!-- header__main -->
		</header><!-- header -->