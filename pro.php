<?php
/* 
Template Name: Pour les pros
*/

get_header();
?>

<main class="pro">
    <div class="title">
        <h1>accompagnement professionel</h1>
        <h2>des services exclusifs et sur-mesures</h2>
    </div>

    <div class="row">

        <?php
        //var_dump(get_field('nb'));
        $listeProd = get_field('nb');
        foreach ($listeProd as $prod) {
        ?>
            <div class="produit">
                <div class="imgcontainer">
                    <img src="<?php echo $prod['prod_img']; ?>" alt="photo d'un service mise en avant">
                </div>
                <div class="text">
                    <div class="title">
                        <h2><?php echo $prod['prod_name']; ?></h2>
                    </div>

                    <div class="exp">
                        <p><?php echo $prod['prod_text']; ?></p>
                    </div>
                </div>
                <a href="<?php echo esc_url(get_home_url() . '/contact'); ?>" class="buttonN">
                    <div class="ellipse"></div>
                    <p>Nous contacter</p>
                </a>
            </div>
        <?php
        }
        ?>

    </div>

</main>

<?php
get_footer();
?>