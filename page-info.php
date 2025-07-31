<?php
/**
 * Template Name: Info Sayfası (Long Beach Yeni)
 */
get_header();
?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

<style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background: #f1f1f1;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 1080px;
        margin: 40px auto;
        padding: 20px;
        background: white;
        border-radius: 12px;
    }

    .header-block {
        text-align: center;
        padding: 30px;
        border-bottom: 1px solid #eee;
    }

    .header-block img {
        max-width: 120px;
        border-radius: 10px;
        margin-bottom: 15px;
    }

    .header-block h1 {
        margin: 10px 0 5px;
        font-size: 28px;
    }

    .header-block p {
        color: #666;
        font-size: 16px;
    }

    .buttons {
        margin-top: 20px;
    }

    .buttons a {
        margin: 5px;
        padding: 10px 20px;
        background: #0073aa;
        color: #fff;
        border-radius: 6px;
        text-decoration: none;
        display: inline-block;
        font-weight: bold;
    }

    .social {
        margin-top: 20px;
    }

    .social a {
        margin: 0 8px;
        font-size: 18px;
        color: #444;
    }

    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        padding: 30px 0;
    }

    .info-card {
        background: #fafafa;
        border-radius: 10px;
        padding: 15px;
        text-align: center;
        transition: all 0.3s ease;
        border: 1px solid #ddd;
    }

    .info-card:hover {
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        transform: translateY(-3px);
    }

    .info-card img {
        max-width: 100%;
        border-radius: 8px;
        margin-bottom: 10px;
    }

    .info-card h3 {
        margin: 10px 0 5px;
        font-size: 18px;
    }

    .info-card p {
        font-size: 14px;
        color: #555;
    }
</style>

<div class="container">

    <div class="header-block">
        <?php if(get_field('hotel_logo')): ?>
            <img src="<?php echo get_field('hotel_logo'); ?>" alt="Hotel Logo">
        <?php endif; ?>

        <h1><?php the_field('hotel_name'); ?></h1>
        <p><?php the_field('location'); ?></p>
        <p><?php the_field('about'); ?></p>

        <div class="buttons">
            <?php if(get_field('fact_sheet_2025')): ?>
                <a href="<?php echo get_field('fact_sheet_2025'); ?>" target="_blank">Fact Sheet 2025</a>
            <?php endif; ?>
            <?php if(get_field('whatsapp_link')): ?>
                <a href="<?php echo get_field('whatsapp_link'); ?>" target="_blank">WhatsApp</a>
            <?php endif; ?>
        </div>

        <div class="social">
            <?php if(get_field('social_url_1')): ?>
                <a href="<?php echo get_field('social_url_1'); ?>"><i class="<?php echo get_field('social_icon_1'); ?>"></i></a>
            <?php endif; ?>
            <?php if(get_field('social_url_2')): ?>
                <a href="<?php echo get_field('social_url_2'); ?>"><i class="<?php echo get_field('social_icon_2'); ?>"></i></a>
            <?php endif; ?>
            <?php if(get_field('social_url_3')): ?>
                <a href="<?php echo get_field('social_url_3'); ?>"><i class="<?php echo get_field('social_icon_3'); ?>"></i></a>
            <?php endif; ?>
        </div>
    </div>
