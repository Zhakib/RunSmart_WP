<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RunSmart</title>

    <?php wp_head(); ?>
</head>
<body>
    <section id="up" class="promo">
        <div class="container">
            <header class="header">
                    <?php the_custom_logo(); ?>
                <div class="header__official">   
                    Официальный представитель
                    <span>Garmin, Polar, Suunto</span>
                </div>
                <div class="header__contacts">
                    <a href="tel:+74999228974" class="header__phone"><?php the_field('phone') ?></a>
                    <button data-modal="consultation" class="button button_header">заказать звонок</button>
                </div>
            </header>