<?php
/* 
Template Name: contact
*/

get_header();

?>

<main class="contact">
    <div class="title">
        <h1>Vous souhaitez nous contacter ?</h1>
        <h2>Remplissez le formulaire ci-dessous</h2>
    </div>

    <div class="content">
        <div class="row">

            <?php
            echo do_shortcode('[contact-form-7 id="152" title="Contact form 1"]');
            ?>

            <div class="info">

            </div>
        </div>

        <img src="<?php echo esc_url(get_template_directory_uri() . '/src/medias/beer_wheel.png'); ?>" alt="">
    </div>

</main>

<?php

get_footer();
