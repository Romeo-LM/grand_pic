<?php

$nbHero = 3; //a modifier également dans le JS
$button = ["les classiques", "les éphémères", "les personnalisées"];
$beer = ["247", "temp", "perso"];

get_header();
?>

<script>
    const lottiePath = "<?php echo esc_url(get_template_directory_uri() . '/src/medias/lotties_animation.json'); ?>";
</script>

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
                    <p class="beer right"><?= esc_textarea(get_field('hero' .  $i + 1 . '_beer_name')); ?></p>
                    <p class="ani left">
                        <?php
                        for ($j = 0; $j < 8; $j++) {
                            echo esc_textarea(get_field('hero' .  $i + 1 . '_ani_name') . " ");
                        }
                        ?>
                    </p>
                    <div class="beerStroke right">
                        <p class="beer"><?= esc_textarea(get_field('hero' .  $i + 1 . '_beer_name')); ?></p>
                        <p class="beer"><?= esc_textarea(get_field('hero' .  $i + 1 . '_beer_name')); ?></p>
                    </div>
                    <p class="ani left">
                        <?php
                        for ($j = 0; $j < 8; $j++) {
                            echo esc_textarea(get_field('hero' .  $i + 1 . '_ani_name') . " ");
                        }
                        ?>
                    </p>
                    <p class="beer right"><?= esc_textarea(get_field('hero' .  $i + 1 . '_beer_name')); ?></p>
                </div>

                <div class="tablist <?= "tablist" . $i + 1 ?>">
                    <button type="button"></button>
                    <button type="button"></button>
                    <button type="button"></button>
                </div>

                <a class="buttonB" href="<?php echo esc_url(get_field('hero' . $i + 1 . '_page')); ?>">
                    <div class="ellipse"></div>
                    <p>Découvrir la bière</p>
                </a>

                <div class="more">
                    <a href="/nos-biere">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/src/medias/plus.svg'); ?>" alt="more">
                        <span>Découvrir toute la gamme</span>
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

    <section class="engagement">
        <div class="titre">
            <h2>nos engagements</h2>
            <p>Nous mettons tout en œuvre pour brasser des bières authentiques, responsables et en harmonie avec notre environnement.</p>
        </div>

        <div class="content">
            <div class="card">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/src/medias/recyclage.svg'); ?>" alt="picto recycler">
                <p>Production durable et respect de la nature</p>
            </div>

            <div class="line"></div>

            <div class="card">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/src/medias/ecolo.svg'); ?>" alt="picto la main verte">
                <p>Savoir-faire artisanal et tradition</p>
            </div>

            <div class="line"></div>

            <div class="card">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/src/medias/terre.svg'); ?>" alt="picto terre">
                <p>Soutien aux écosystèmes locaux</p>
            </div>

            <div class="line"></div>

            <div class="card">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/src/medias/houblon_home.svg'); ?>" alt="picto terre">
                <p>Ingrédients 100 % bio et régionaux</p>
            </div>
        </div>

        <a href="" class="buttonN">
            <div class="ellipse"></div>
            <p>En savoir plus</p>
        </a>
    </section>

    <section class="fabrication">

        <div class="animation"></div>

        <div class="content">
            <div class="title">
                <h2>La fabrication </h2>
                <p>Pour la réalisation de ses bières uniques, la brasserie met en œuvre un savoir-faire précis et un processus de fabrication authentique à découvrir !</p>
            </div>

            <a href="" class="buttonB">
                <div class="ellipse"></div>
                <p>En savoir plus</p>
            </a>

        </div>
    </section>

</main>

<?php get_footer(); ?>