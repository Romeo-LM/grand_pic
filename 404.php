<?php

get_header();
?>

<main class="p404">
    <div class="content">
        <div class="title">
            <h1>oups erreur 404</h1>
            <h2>vous avez trop bu</h2>
        </div>

        <a href="/" class="buttonN">
            <div class="ellipse"></div>
            <p>Revenir au site</p>
        </a>
    </div>

    <img src="<?php echo esc_url(get_template_directory_uri() . '/src/medias/beer_wheel.png'); ?>" alt="roue de bières">

</main>

<?php
get_footer();
?>