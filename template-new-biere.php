<?php
/* 
Template Name: Nouvelle Biere
*/
$primary = get_field('p_beer_color');
$secondary = get_field('s_beer_color');
$nbPicto = 4; //a modifier également dans le JS

get_header();
?>

<style>
    :root {
        --primary: <?= esc_attr($primary); ?>;
        --secondary: <?= esc_attr($secondary); ?>;
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
            <img src="<?php echo esc_url(get_field('beer_img')); ?>" alt="<?= "bière" . the_title(); ?>">

            <?php
            for ($i = 0; $i < $nbPicto; $i++) {
            ?>
                <div class="composant <?= "composant" . $i + 1 ?>">
                    <div class="line"></div>
                    <div class="picto">
                        <img src="<?php echo esc_url(get_field('picto_' . $i + 1 . '_img')); ?>" alt="pictogramme d'un composant de la bière">
                    </div>
                    <div class="text">
                        <h3><?php echo esc_textarea(get_field('picto_' . $i + 1 . '_title')) ?></h3>
                        <p><?php echo esc_textarea(get_field('picto_' . $i + 1 . '_text')) ?></p>
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
</main>

<?php
get_footer();
?>