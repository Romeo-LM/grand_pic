<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav>
            <div>
                <a href="<?php echo esc_url(get_home_url() . '/nos-bieres'); ?>">NOS BIÈRES</a>
                <a href="">FABRICATION</a>
            </div>
            <a href="<?php echo esc_url(get_home_url()); ?>">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/src/medias/logo.svg'); ?>" alt="Logo brasserie mauriennaise du Grand Pip">
            </a>
            <div>
                <a href="">POUR LES PROS</a>
                <a href="">À PROPOS</a>
            </div>
        </nav>
    </header>

    <a class="contact" href="<?php echo esc_url(get_home_url() . '/contact'); ?>">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/src/medias/chat_bubble.svg'); ?>" alt="contacter nous">
    </a>