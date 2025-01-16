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

            <div class="infos">

                <a href="tel:0689064249">
                    <div>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/src/medias/tel-r.svg'); ?>"
                            alt="tel">
                        <p>06 - 89 - 06 - 42 - 49</p>
                    </div>

                </a>

                <a href="https://maps.app.goo.gl/aWcosNCwwJccEV8NA">
                    <div>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/src/medias/map-r.svg'); ?>"
                            alt="map">
                        <p>80 rue des Moulins, 73220 EPIERRE</p>
                    </div>
                </a>

                <a href="https://www.instagram.com/brasseriegrandpic/">
                    <div>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/src/medias/insta-r.svg'); ?>"
                            alt="insta">
                        <p>@brasseriegrandpic</p>
                    </div>
                </a>
            </div>
        </div>

        <img src="<?php echo esc_url(get_template_directory_uri() . '/src/medias/beer_wheel.png'); ?>" alt="">
    </div>

</main>

<?php

get_footer();
