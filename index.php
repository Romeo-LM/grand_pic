<?php

$nbHero = 3; //a modifier également dans le JS

get_header();
?>

<div class="title">
    <h1><span class="red">brasserie</span> mauriennaise, massif de la lauzière </h1>
    <img src="<?php echo esc_url(get_template_directory_uri() . '/src/medias/grand-pic.svg'); ?>" alt="Grand Pic">
</div>

<main class="home">

    <section class="hero">

        <img src="<?php echo esc_url(get_template_directory_uri() . '/src/medias/header-hills.png'); ?>" alt="montagne d'arrière plan">

    </section>

    <section class="heroBiere">
        <?php
        for ($i = 0; $i < $nbHero; $i++) {

            $primary = get_field('hero' . $i + 1 . '_p_color');
            $secondary = get_field('hero' . $i + 1 . '_s_color');
        ?>
            <img class="bierehero <?= esc_textarea('nb' . $i + 1); ?>" src="<?php echo esc_url(get_field('hero' . $i + 1 . '_mockup')); ?>" alt="hero bière" style="--nb :<?= esc_textarea($i); ?>;">

            <div class="hero <?= esc_textarea('nb' . $i + 1); ?>" style="--primary: <?= esc_attr($primary); ?>;  --secondary: <?= esc_attr($secondary); ?>;">
                <img class="anihero" src="<?php echo esc_url(get_field('hero' . $i + 1 . '_ani')); ?>" alt="hero bière animal">

                <div class="text">
                    <p class="beer"><?= esc_textarea(get_field('hero' .  $i + 1 . '_beer_name')); ?></p>
                    <p class="ani">
                        <?php
                        for ($j = 0; $j < 5; $j++) {
                            echo esc_textarea(get_field('hero' .  $i + 1 . '_ani_name') . " ");
                        }
                        ?>
                    </p>
                    <div class="beerStroke">
                        <p class="beer"><?= esc_textarea(get_field('hero' .  $i + 1 . '_beer_name')); ?></p>
                        <p class="beer"><?= esc_textarea(get_field('hero' .  $i + 1 . '_beer_name')); ?></p>
                    </div>
                    <p class="ani">
                        <?php
                        for ($j = 0; $j < 5; $j++) {
                            echo esc_textarea(get_field('hero' .  $i + 1 . '_ani_name') . " ");
                        }
                        ?>
                    </p>
                    <p class="beer"><?= esc_textarea(get_field('hero' .  $i + 1 . '_beer_name')); ?></p>
                </div>
            </div>
        <?php
        }
        ?>
    </section>

</main>

<?php get_footer(); ?>