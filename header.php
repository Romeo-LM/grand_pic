<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <header class="pc">
        <nav>
            <div>
                <a class="underline" href="<?php echo esc_url(get_home_url() . '/nos-bieres'); ?>">NOS BIÈRES</a>
                <a class="underline" href="<?php echo esc_url(get_home_url() . '/fabrication'); ?>">FABRICATION</a>
            </div>
            <a href="<?php echo esc_url(get_home_url()); ?>">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/src/medias/logo.svg'); ?>" alt="Logo brasserie mauriennaise du Grand Pip">
            </a>
            <div>
                <a class="underline" href="<?php echo esc_url(get_home_url() . '/pour-les-pros'); ?>">POUR LES PROS</a>
                <a class="underline" href="<?php echo esc_url(get_home_url() . '/a-propos'); ?>" class="about" onmouseenter="SubMenuOpen()">À PROPOS</a>
            </div>
        </nav>

        <nav class="bottom" onmouseleave="SubMenuClose()">
            <a class="underline" href="<?php echo esc_url(get_home_url() . '/contact'); ?>">Nous contacter</a>
            <a class="underline" href="<?php echo esc_url(get_home_url() . '/a-propos#nos-revendeurs'); ?>">Nos revendeurs</a>
            <a class="underline" href="<?php echo esc_url(get_home_url() . '/a-propos#qui-sommes-nous'); ?>">Qui sommes nous</a>
            <a class="underline" href="<?php echo esc_url(get_home_url() . '/a-propos#engagements'); ?>">Nos engagements</a>
            <a class="underline" href="<?php echo esc_url(get_home_url() . '/a-propos#territoire'); ?>">Notre terriroire</a>
        </nav>

    </header>

    <header class="mobile">
        <div class="top">
            <a href="<?php echo esc_url(get_home_url()); ?>">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/src/medias/logo.svg'); ?>" alt="Logo brasserie mauriennaise du Grand Pip">
            </a>
            <button type="button">
                <svg class="top" width="45" height="5" viewBox="0 0 45 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect y="0.378906" width="45" height="4" rx="1" fill="#000000" />
                </svg>
                <svg class="middle" width="45" height="5" viewBox="0 0 45 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect y="0.378906" width="45" height="4" rx="1" fill="#BE1622" />
                </svg>
                <svg class="last" width="45" height="5" viewBox="0 0 45 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect y="0.378906" width="45" height="4" rx="1" fill="#000000" />
                </svg>

            </button>
        </div>
        <nav class="bottom">
            <a href="<?php echo esc_url(get_home_url() . '/nos-bieres'); ?>">NOS BIÈRES</a>
            <a href="<?php echo esc_url(get_home_url() . '/fabrication'); ?>">FABRICATION</a>
            <a href="<?php echo esc_url(get_home_url() . '/pour-les-pros'); ?>">POUR LES PROS</a>
            <a href="<?php echo esc_url(get_home_url() . '/a-propos'); ?>">À PROPOS</a>
        </nav>
    </header>

    <a class="contact" href="<?php echo esc_url(get_home_url() . '/contact'); ?>">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/src/medias/chat_bubble.svg'); ?>" alt="contacter nous">
    </a>