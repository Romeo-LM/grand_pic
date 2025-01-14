<?php

$nbHero = 3; //a modifier également dans le JS
$button = ["les classiques", "les éphémères", "les personnalisées"];
$beer = ["247", "temp", "perso"];

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

                <div class="tablist <?= "tablist" . $i+1?>">
                    <button type="button"></button>
                    <button type="button"></button>
                    <button type="button"></button>
                </div>

                <a class="button" href="<?php echo esc_url(get_field('hero' . $i + 1 . '_page')); ?>">
                    <div class="ellipse"></div>
                    <p>découvrir la bière</p>
                </a>

                <div class="more">
                    <a href="/nos-biere">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/src/medias/plus.svg'); ?>" alt="more">
                        <span>découvrir toute la gamme</span>
                    </a>
                </div>


            </div>
        <?php
        }
        ?>
    </section>

    <section class="gammes">
        <?php
        $j = 0;
        foreach ($button as $title) {
        ?>
            <button type="button">
                <h3><?= $title ?></h3>
                <div class="beerAnim">
                    <?php
                    for ($i = 0; $i < 5; $i++) {
                    ?>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/src/medias/beer_' . $beer[$j] . $i + 1 . '.png'); ?>" alt="" class="<?= "beerAnim" . $i + 1 ?>">
                    <?php
                    }
                    ?>
                </div>
            </button>
        <?php
            $j++;
        }
        ?>
    </section>

</main>

<?php get_footer(); ?>