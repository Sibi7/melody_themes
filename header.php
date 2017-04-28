<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package melody
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body>

<header class="head ">

    <div class="head-icons">

        <div class="head-icons__socials">

            <a class="head-icons__socials--link" href="http://www.skype.com/">
                <i class="fa fa-skype" aria-hidden="true"></i>
            </a>

            <a class="head-icons__socials--link" href="https://www.instagram.com/">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>

            <a class="head-icons__socials--link" href="http://vk.com/">
                <i class="fa fa-vk" aria-hidden="true"></i>
            </a>


        </div>
        <span><?= fw_get_db_customizer_option('phone');?></span>

        <a href="#" id="modal-header-callback" class="head-icons__callback open_modal">Заказать звонок</a>

    </div>

    <div class="band">


    </div>

</header>