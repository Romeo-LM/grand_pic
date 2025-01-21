<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>

    <div class="popUp">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/src/medias/logo.svg'); ?>" alt="Logo brasserie mauriennaise du Grand Pip">
        <div class="content">
            <p>La vente d’alcool est interdite au mineurs. Vous devez avoir 18 ans ou plus pour accéder À ce contenu</p>
            <div class="checkbox">
                <input type="checkbox" name="18plus" id="18plus">
                <p>Je certifie avoir plus de 18 ans</p>
            </div>
            <div class="buttonsbox">
                <button class="buttonN" href="">
                    <div class="ellipse"></div>
                    <p>entrer</p>
                </button>
                <a class="buttonN" href="https://google.com">
                    <div class="ellipse"></div>
                    <p>sortir</p>
                </a>
            </div>
        </div>
    </div>

    <header>
        <nav>
            <div>
                <a href="<?php echo esc_url(get_home_url() . '/nos-bieres'); ?>">NOS BIÈRES</a>
                <a href="<?php echo esc_url(get_home_url() . '/fabrication'); ?>">FABRICATION</a>
            </div>
            <a href="<?php echo esc_url(get_home_url()); ?>">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/src/medias/logo.svg'); ?>" alt="Logo brasserie mauriennaise du Grand Pip">
            </a>
            <div>
                <a href="<?php echo esc_url(get_home_url() . '/pour-les-pros'); ?>">POUR LES PROS</a>
                <a href="<?php echo esc_url(get_home_url() . '/a-propos'); ?>">À PROPOS</a>
            </div>
        </nav>
    </header>

    <a class="contact" href="<?php echo esc_url(get_home_url() . '/contact'); ?>">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/src/medias/chat_bubble.svg'); ?>" alt="contacter nous">
    </a>