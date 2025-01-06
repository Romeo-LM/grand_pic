<?php get_header(); ?>
<main>
    <?php the_title();

    if (have_posts()):
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    else:
        echo '<p>Sorry, no posts matched your criteria.</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>