<?php
/* 
Template Name: Nouvelle Biere
*/
$primary = get_field('p_beer_color');
$secondary = get_field('s_beer_color');
$imgSrc = get_field('beer_img');
$nbPicto = 4; //a modifier également dans le JS

get_header();
?>

<style>
    :root {
        --primary: <?= esc_attr($primary); ?>;
        --secondary: <?= esc_attr($secondary); ?>;
        --img: <?= esc_url($imgSrc); ?>;
    }

    body {
        background-color: var(--primary);
    }
</style>

<main class="newBiere">
    <section class="hero">
        <img src="<?php echo esc_url(get_field('hero_img')); ?>" alt="<?= "hero bière" . the_title(); ?>">
        <h1><?php the_title(); ?></h1>
    </section>

    <section class="description">

        <h2>du bon, du bio</h2>

        <div class="beerPicto">
            <div class="image-container" style="--img: url('<?php echo esc_url(get_field('beer_img')); ?>');">
                <img src="<?php echo esc_url(get_field('beer_img')); ?>" alt="<?= "bière" . the_title(); ?>">
            </div>

            <?php
            for ($i = 0; $i < $nbPicto; $i++) {
                $id = $i + 1 ;
            ?>
                <div class="composant <?= "composant" . $id ?>">
                    <div class="line"></div>
                    <div class="picto">
                        <img src="<?php echo esc_url(get_field('picto_' . $id . '_img')); ?>" alt="pictogramme d'un composant de la bière">
                    </div>
                    <div class="text">
                        <h3><?php echo esc_textarea(get_field('picto_' . $id . '_title')) ?></h3>
                        <p><?php echo esc_textarea(get_field('picto_' . $id . '_text')) ?></p>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>

        <?php
        if (get_field('more_ingredient') == true) {
        ?>
            <div class="moreIngredient">
                <div class="title">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/src/medias/add.svg'); ?>" alt="pictogramme plus">
                    <h3>ingrédients supplémentaires</h3>
                </div>
                <p><?php echo esc_textarea(get_field('more_ingredient_text')) ?></p>
            </div>
        <?php
        }
        ?>

    </section>

    <section class="emblem">

        <div class="title">
            <h2><?php echo esc_textarea(get_field('emblem_name')) ?></h2>
            <p><?php echo esc_textarea(get_field('emblem_name')) ?></p>
        </div>

        <div class="content">
            <img src="<?php echo esc_url(get_field('emblem_img')); ?>" alt="image de l'animal emblème">
            <div class="text">
                <div class="who paragraph">
                    <h3>qui est-il ?</h3>
                    <p><?php echo wp_kses_post(get_field('who')) ?></p>
                </div>
                <div class="line"></div>
                <div class="moreAbout paragraph">
                    <h3>mais c'est aussi ...</h3>
                    <p><?php echo wp_kses_post(get_field('more_about')) ?></p>
                </div>
                <div class="line"></div>
                <div class="moreAbout paragraph">
                    <h3>en lauzière</h3>
                    <p><?php echo wp_kses_post(get_field('history')) ?></p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>