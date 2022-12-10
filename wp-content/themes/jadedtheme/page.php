<?php get_header(); ?>
<main class="content">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <h1 class="display-5 fw-bold"><?php the_title(); ?></h1>
            <p class="col-md-8 fs-4"><?php the_content(); ?></p>
        <?php endwhile;
    else :
        _e('Sorry, no pages matched your criteria.', 'textdomain');
    endif;
    ?>
</main>
<?php get_footer(); ?>
