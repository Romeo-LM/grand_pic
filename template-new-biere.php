<?php
/* 
Template Name: Nouvelle Biere
*/
$primary = get_field('p_beer_color');
$secondary = get_field('s_beer_color');

get_header();
?>

<style>
    :root {
        --primary: <?= esc_attr($primary); ?>;
        --secondary: <?= esc_attr($secondary); ?>;
    }

    body{
        background-color: var(--primary);
    }
</style>

<main class="newBiere">
    <section class="hero">
        <img src="<?php echo esc_url(get_field('hero_img')); ?>" alt="<?= "hero bière" . the_title(); ?>" >
        <h1><?php the_title(); ?></h1>
    </section>

    <section class="description">

        <h2>du bon, du bio</h2>

    </section>
</main>

<?php
get_footer();
?>