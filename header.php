<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav>
            <div>
                <a href="">NOS BIÈRES</a>
                <a href="">FABRICATION</a>
            </div>
            <img src="<?php echo esc_url(get_template_directory_uri() . '/src/medias/logo.svg'); ?>" alt="Logo brasserie mauriennaise du Grand Pip">
            <div>
                <a href="">PROFESSIONEL</a>
                <a href="">À PROPOS</a>
            </div>
        </nav>
    </header>