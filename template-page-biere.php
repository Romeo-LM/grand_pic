<?php
/* 
Template Name: Présentation Bieres
*/

get_header();

// mettre un if qui regarde pour un get pour filtrer dans les args avec order 0 -> 250 ; 250 -> 500; 500 -> 750 ...
add_filter('posts_where', 'custom_menu_order_filter');

$all = "selected";
$gamme = "";
$temp = "";
$barique = "";
$perso = "";

function custom_menu_order_filter($where) {
    global $wpdb, $all, $gamme, $temp, $barique, $perso;

    if (isset($_GET['f'])) {
        $all = "";
        if ($_GET['f'] == 'gamme') {
            $where .= " AND {$wpdb->posts}.menu_order >= 0 AND {$wpdb->posts}.menu_order <= 250";
            $gamme = "selected";
        } elseif ($_GET['f'] == 'temp') {
            $where .= " AND {$wpdb->posts}.menu_order >= 250 AND {$wpdb->posts}.menu_order <= 500";
            $temp = "selected";
        } elseif ($_GET['f'] == 'barique') {
            $where .= " AND {$wpdb->posts}.menu_order >= 500 AND {$wpdb->posts}.menu_order <= 750";
            $barique = "selected";
        } elseif ($_GET['f'] == 'perso') {
            $where .= " AND {$wpdb->posts}.menu_order >= 750 AND {$wpdb->posts}.menu_order <= 1000";
            $perso = "selected";
        }
    }

    return $where;
}

$args = [
    'post_type'      => 'page',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'post_parent'    => get_the_ID(),
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
];

$child_pages_query = new WP_Query($args);

remove_filter('posts_where', 'custom_menu_order_filter');

?>
<main class="homeBiere">
    <section class="filter">
        <a href="<?php echo esc_url(get_home_url() . '/nos-bieres'); ?>" class="<?= $all ?>"> toutes NOS BIÈRES</a>
        <a href="<?php echo esc_url(get_home_url() . '/nos-bieres?f=gamme'); ?>" class="<?= $gamme ?>"> bières de gamme</a>
        <a href="<?php echo esc_url(get_home_url() . '/nos-bieres?f=temp'); ?>" class="<?= $temp ?>">bières éphémères</a>
        <a href="<?php echo esc_url(get_home_url() . '/nos-bieres?f=barique'); ?>"class="<?= $barique ?>">bière en barique</a>
        <a href="<?php echo esc_url(get_home_url() . '/nos-bieres?f=perso'); ?>" class="<?= $perso ?>">créez vos bières</a>
    </section>

    <section class="beers">
        <?php
        // Vérifiez si des pages enfants existent
        if ($child_pages_query->have_posts()) {

            while ($child_pages_query->have_posts()) {
                $child_pages_query->the_post();

                $primary = get_field('p_beer_color');
                $secondary = get_field('s_beer_color');
        ?>

                <a href="<?php the_permalink(); ?>" class="card" style="--primary: <?= esc_attr($primary); ?>;  --secondary: <?= esc_attr($secondary); ?>">

                    <svg class="gouteG" data-name="Calque 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65.94 58.17">
                        <g id="Calque_1-2" data-name="Calque 1">
                            <path d="M41.56.62S-3,4.4.16,21.17c.45,2.37,2.16,4.26,4.49,4.89,2.9.78,7.44.53,12.74-4.98C26.6,11.51,26.42,8.94,41.56.62Z" />
                            <path d="M47.14,0s-20.45,9.74-28.24,29.84,1.86,28.51,7.7,28.33,16.73-2.83,12.57-26.83S47.14,0,47.14,0Z" />
                            <path d="M50.77.62s-5.45,29.66,1.6,40.94c3.79,6.07,13.22,3.83,13.56-3.32.1-2.03-.37-4.56-1.78-7.69-5.49-12.13-8.41-7.7-13.37-29.93Z" />
                        </g>
                    </svg>

                    <img src="<?php echo esc_url(get_field('beer_img')); ?>" alt="<?php echo  "bière " . the_title(); ?>" class="beer">

                    <svg class="gouteD" data-name="Calque 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65.94 58.17">
                        <g id="Calque_1-2" data-name="Calque 1">
                            <path d="M41.56.62S-3,4.4.16,21.17c.45,2.37,2.16,4.26,4.49,4.89,2.9.78,7.44.53,12.74-4.98C26.6,11.51,26.42,8.94,41.56.62Z" />
                            <path d="M47.14,0s-20.45,9.74-28.24,29.84,1.86,28.51,7.7,28.33,16.73-2.83,12.57-26.83S47.14,0,47.14,0Z" />
                            <path d="M50.77.62s-5.45,29.66,1.6,40.94c3.79,6.07,13.22,3.83,13.56-3.32.1-2.03-.37-4.56-1.78-7.69-5.49-12.13-8.41-7.7-13.37-29.93Z" />
                        </g>
                    </svg>

                    <img src="<?php echo esc_url(get_field('beer_ani_img')); ?>" alt="" class="beast">

                    <div class="name">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/src/medias/shadow.png'); ?>" alt="" class="shadow">
                        <h2><?= the_title(); ?></h2>
                        <h3><?php echo esc_textarea(get_field('emblem_name')); ?></h3>
                    </div>
                </a>
        <?php
            }
        } else {
            if (isset($_GET['f'])) {
                if ($_GET['f'] == 'gamme') {
                    echo '<p>Aucune bière n\'est disponible en ce moment. Revener plus tard ☺</p>';
                } elseif ($_GET['f'] == 'temp') {
                    echo '<p>Aucune bière éphémère n\'est disponible en ce moment. Revener plus tard ☺</p>';
                } elseif ($_GET['f'] == 'barique') {
                    echo '<p>Aucune bière élévée en barique n\'est disponible en ce moment. Revener plus tard ☺</p>';
                } elseif ($_GET['f'] == 'perso') {
                    echo '<p>Nous ne faisons plus de bière personnalisée en ce moment. Revener plus tard ☺</p>';
                }
            }
        }

        // Réinitialisez les données de la requête WordPress
        wp_reset_postdata();
        ?>
    </section>

</main>



<?php
get_footer();
?>