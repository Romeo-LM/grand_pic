<?php

$nbHero = 3; //a modifier également dans le JS
$button = [["les classiques", "gamme"], ["les éphémères", "temp"], ["les personnalisées", "perso"]];
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

            $id = $i + 1;

            $primary = get_field('hero' . $id . '_p_color');
            $secondary = get_field('hero' . $id . '_s_color');

            $field_name = 'hero' . $id . '_mockup';
        ?>
            <img class="bierehero <?= esc_textarea('nb' . $i); ?>" data-fieldname="<?php echo $field_name; ?>" src="<?php echo (get_field($field_name)); ?>" alt="hero bière" style="--nb :<?= esc_textarea($i); ?>;">

            <div class="hero <?= esc_textarea('nb' . $id); ?>" style="--primary: <?= esc_attr($primary); ?>;  --secondary: <?= esc_attr($secondary); ?>;">
                <img class="anihero" src="<?php echo esc_url(get_field('hero' . $id . '_ani')); ?>" alt="hero bière animal">

                <div class="text">
                    <p class="beer right"><?= esc_textarea(get_field('hero' .  $id . '_beer_name')); ?></p>
                    <p class="ani left">
                        <?php
                        for ($j = 0; $j < 8; $j++) {
                            echo esc_textarea(get_field('hero' .  $id . '_ani_name') . " ");
                        }
                        ?>
                    </p>
                    <div class="beerStroke right">
                        <p class="beer"><?= esc_textarea(get_field('hero' .  $id . '_beer_name')); ?></p>
                        <p class="beer"><?= esc_textarea(get_field('hero' .  $id . '_beer_name')); ?></p>
                    </div>
                    <p class="ani left">
                        <?php
                        for ($j = 0; $j < 8; $j++) {
                            echo esc_textarea(get_field('hero' .  $id . '_ani_name') . " ");
                        }
                        ?>
                    </p>
                    <p class="beer right"><?= esc_textarea(get_field('hero' .  $id . '_beer_name')); ?></p>
                </div>

                <div class="tablist <?= "tablist" . $id ?>">
                    <button type="button"></button>
                    <button type="button"></button>
                    <button type="button"></button>
                </div>

                <a class="buttonB" href="<?php echo esc_url(get_field('hero' . $id . '_page')); ?>">
                    <div class="ellipse"></div>
                    <p>Découvrir la bière</p>
                </a>

                <div class="more">
                    <a href="<?php echo esc_url(get_home_url() . '/nos-bieres'); ?>">
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
            <a href="<?php echo esc_url(get_home_url() . '/nos-bieres?f=' . $title[1]); ?>">
                <h3><?= $title[0] ?></h3>
                <div class="beerAnim">
                    <?php
                    for ($i = 0; $i < 5; $i++) {
                        $id = $i + 1;
                    ?>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/src/medias/beer_' . $beer[$j] . $id . '.png'); ?>" alt="" class="<?= "beerAnim" . $id ?>">
                    <?php
                    }
                    ?>
                </div>
            </a>
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

        <a href="<?php echo esc_url(get_home_url() . '/a-propos'); ?>" class="buttonN">
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

            <a href="<?php echo esc_url(get_home_url() . '/fabrication'); ?>" class="buttonB">
                <div class="ellipse"></div>
                <p>En savoir plus</p>
            </a>

        </div>
    </section>

    <section class="pro">

        <div class="title">
            <h2>POUR VOUS LES PROFESSIONNELS</h2>
            <p>La brasserie vous propose de vous accompagner avec des services
                pensés spécialement pour vous.</p>
        </div>

        <div class="carousel" data-flickity='{ "wrapAround": true, "autoPlay": 2000, "draggable": true, "pageDots": false, "prevNextButtons": false, "selectedAttraction": 0.2, "friction": 0.8 }'>
            <?php
            for ($i = 0; $i < 5; $i++) {

                $id = $i + 1;
            ?>
                <img src="<?php echo esc_url(get_field('pro_img' . $id)); ?>" alt="Photo Pro" class="carousel-cell">
            <?php
            }
            ?>
        </div>

        <a href="<?php echo esc_url(get_home_url() . '/pour-les-pros'); ?>" class="buttonN">
            <div class="ellipse"></div>
            <p>En savoir plus</p>
        </a>
    </section>

</main>

<?php get_footer(); ?>