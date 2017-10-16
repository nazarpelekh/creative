<?php
header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + 3600));
header('Content-Type: text/html; charset=utf-8');
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header('X-UA-Compatible: IE=Edge,chrome=1');
/*
// HTML Compress
function ob_html_compress($buf){
return preg_replace(array('/<!--(?>(?!\[).)(.*)(?>(?!\]).)-->/Uis','/[[:blank:]]+/'),array('',' '),str_replace(array("\n","\r","\t"),'',$buf));
}
ob_start('ob_html_compress');
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <title><?php wpa_title(); ?></title>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
<!--    <meta name="theme-color" content="#6aa35b">--><!--add color-->
    <meta name="format-detection" content="telephone=no">
<!--    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="--><?php //echo theme('images/favicon.png'); ?><!--" sizes="16x16 32x32 48x48">-->
<!--    <link rel="shortcut icon" type="image/x-icon" href="--><?php //echo theme('images/favicon.png'); ?><!--" sizes="16x16">-->
<!--    <link rel="icon" type="image/x-icon" href="--><?php //echo theme('images/favicon.png'); ?><!--" sizes="16x16">-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>  data-hash="<?php wpa_fontbase64(true); ?>" data-a="<?php echo admin_url('admin-ajax.php'); ?>">
    <div class="home-page page-wrapper" id="home-page">
        <div class="cr-header" id="js-header">
            <div class="cr-header__motto">SIMPLICITY IS THE ULTIMATE SOPHISTICA­TION.</div>
            <div class="cr-header__mobile hidden-md hidden-lg">
                <a href="" class="cr-header__logo">
                    <img class="cr-logo-mobile" src="<?php echo theme() ?>/src/images/assets/logo-creative.svg" alt="logo">
                </a>
                <div class="cr-burger-btn"></div>
            </div>
            <div class="cr-header__fixed-part">
                <div class="container">
                    <div class="row">
	                    <?php wp_nav_menu(array('container' => false, 'items_wrap' => '<ul class="cr-horizontal-list pull-left">%3$s</ul>', 'theme_location'  => 'left_main_menu')); ?>
<!--                        <ul class="cr-horizontal-list pull-left">-->
<!--                            <li class="cr-horizontal-list__item cr-sublist-container"><a href="" class="cr-header__link mod-active">Навчання</a>-->
<!--                                <ul class="cr-horizontal-list-sub-menu hidden-sm hidden-xs"><li class="cr-sub-menu-item"><a href="./home-page.html" class="cr-header__link">Головна</a></li>-->
<!--                                    <li class="cr-sub-menu-item"><a href="./courses-list.html" class="cr-header__link">Всі курси</a></li>-->
<!--                                    <li class="cr-sub-menu-item"><a href="./event-list.html" class="cr-header__link">всі події</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                            <li class="cr-horizontal-list__item"><a href="" class="cr-header__link">Послуги</a></li>-->
<!--                            <li class="cr-horizontal-list__item"><a href="spaces.html" class="cr-header__link">Простори</a></li>-->
<!--                        </ul>-->
                        <a href="<?php echo home_url() ?>" class="cr-header__logo hidden-sm hidden-xs">
                            <img src="<?php echo theme() ?>/src/images/assets/logo-creative.svg" alt="logo" class="hidden-sm hidden-xs cr-logo">
                            <img src="<?php echo theme() ?>/src/images/assets/logo-creative-w.svg" alt="logo" class="hidden-md hidden-lg cr-logo">
                        </a>
	                    <?php wp_nav_menu(array('container' => false, 'items_wrap' => '<ul class="cr-horizontal-list pull-right">%3$s
                            <li class="cr-horizontal-list__item js-popup-container"><a href="" class="cr-header__link">Контакти</a>
                                <div class="cr-header-popup">
                                    <div class="cr-contacts">
                                        <div class="cr-contacts--location">
                                            Головний офіс:
                                        </div>
                                        <div class="cr-contacts--address">
                                            м.Львів вул. Погулянки 12
                                        </div>
                                        <div class="cr-contacts--working-hour">
                                            пн-пт. 9.00 - 20.30
                                            <br>
                                            сб. 9.00 - 16.00
                                        </div>
                                        <div class="cr-contacts--phone">
                                            063 55 012 41
                                            <div class="cr-contacts--phone-separator"></div>
                                            063 55 012 41
                                        </div>
                                        <a class="cr-link cr-contacts--email" href="mailto:office@creativeschool.com">office@creativeschool.com</a>
                                        <hr>
                                        <ul class="cr-social-list">
                                            <li class="cr-social-list__item"><a href="instagram.com">
                                                    <img src="<?php echo theme() ?>/src/images/icons/fb-black.svg" height="23" width="24" alt="">
                                                </a></li>
                                            <li class="cr-social-list__item"><a href="instagram.com">
                                                    <img src="<?php echo theme() ?>/src/images/icons/insta-black.svg" height="23" width="24" alt="">
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>', 'theme_location'  => 'right_main_menu')); ?>

<!--                        <ul class="cr-horizontal-list pull-right">-->
<!--                            <li class="cr-horizontal-list__item"><a href="/faq-page.html" class="cr-header__link">FAQ</a></li>-->
<!--                            <li class="cr-horizontal-list__item"><a href="./about-us-page.html" class="cr-header__link">Про нас</a></li>-->
<!--                            <li class="cr-horizontal-list__item js-popup-container"><a href="" class="cr-header__link">Контакти</a>-->
<!--                                <div class="cr-header-popup">-->
<!--                                    <div class="cr-contacts">-->
<!--                                        <div class="cr-contacts--location">-->
<!--                                            Головний офіс:-->
<!--                                        </div>-->
<!--                                        <div class="cr-contacts--address">-->
<!--                                            м.Львів вул. Погулянки 12-->
<!--                                        </div>-->
<!--                                        <div class="cr-contacts--working-hour">-->
<!--                                            пн-пт. 9.00 - 20.30-->
<!--                                            <br>-->
<!--                                            сб. 9.00 - 16.00-->
<!--                                        </div>-->
<!--                                        <div class="cr-contacts--phone">-->
<!--                                            063 55 012 41-->
<!--                                            <div class="cr-contacts--phone-separator"></div>-->
<!--                                            063 55 012 41-->
<!--                                        </div>-->
<!--                                        <a class="cr-link cr-contacts--email" href="mailto:office@creativeschool.com">office@creativeschool.com</a>-->
<!--                                        <hr>-->
<!--                                        <ul class="cr-social-list">-->
<!--                                            <li class="cr-social-list__item"><a href="instagram.com">-->
<!--                                                    <img src="--><?php //echo theme() ?><!--/src/images/icons/fb-black.svg" height="23" width="24" alt="">-->
<!--                                                </a></li>-->
<!--                                            <li class="cr-social-list__item"><a href="instagram.com">-->
<!--                                                    <img src="--><?php //echo theme() ?><!--/src/images/icons/insta-black.svg" height="23" width="24" alt="">-->
<!--                                                </a></li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                        </ul>-->
                        <!-- <a class="cr-close-btn"></a> -->
                    </div>
                </div>
            </div>
            <a class="cr-burger-btn hidden-md hidden-lg"></a>
        </div>
