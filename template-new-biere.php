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
        <a href="<?php echo esc_url(get_home_url() . '/nos-bieres'); ?>">← Retour à la sélection</a>
    </section>

    <section class="description">

        <h2>du bon, du bio</h2>

        <div class="beerPicto">
            <div class="image-container" style="--img: url('<?php echo esc_url(get_field('beer_img')); ?>');">
                <img src="<?php echo esc_url(get_field('beer_img')); ?>" alt="<?= "bière" . the_title(); ?>">
            </div>

            <?php
            for ($i = 0; $i < $nbPicto; $i++) {
                $id = $i + 1;
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
                    <svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1" y="1.5" width="25" height="25" rx="12.5" stroke="<?= $secondary?>" stroke-width="2" />
                        <path d="M12.5714 14.9286H7V13.0714H12.5714V7.5H14.4286V13.0714H20V14.9286H14.4286V20.5H12.5714V14.9286Z" fill="<?= $secondary?>" />
                    </svg>
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
            <div class="imgcontainer">
                <img src="<?php echo esc_url(get_field('emblem_img')); ?>" alt="image de l'animal emblème">
            </div>
            <div class="text">
                <div class="who paragraph">
                    <h3><?php echo esc_textarea(get_field('who_title')) ?></h3>
                    <p><?php echo wp_kses_post(get_field('who_text')) ?></p>
                </div>
                <div class="line"></div>
                <div class="moreAbout paragraph">
                    <h3><?php echo esc_textarea(get_field('more_about_title')) ?></h3>
                    <p><?php echo wp_kses_post(get_field('more_about_text')) ?></p>
                </div>
                <div class="line"></div>
                <div class="moreAbout paragraph">
                    <h3><?php echo esc_textarea(get_field('history_title')) ?></h3>
                    <p><?php echo wp_kses_post(get_field('history')) ?></p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>