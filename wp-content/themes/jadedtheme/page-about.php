<?php get_header(); ?>
<main>
    <section class="about-section">
        <div class="about-wrapper">
            <h2><?php the_title(); ?></h2>
            <div class="about-img-wrapper">
                <img class="about-img" src="<?php the_post_thumbnail_url(); ?>">
            </div>
        </div>
        <div class="about-wrapper about-flex-content">
            <p class="about-content"><?php the_content(); ?></p>
        </div>
    </section>
    <section class="about-section-maps">
        <div>
            <h3>Here you can see where I pick most of my material</h3>
        </div>
        <div class="about-wrapper-maps">
            <div style="width: 150px; height: 150px; background-color: grey;"></div>
            <div style="width: 150px; height: 150px; background-color: grey;"></div>
            <div style="width: 150px; height: 150px; background-color: grey;"></div>
        </div>
    </section>
</main>

<?php get_footer(); ?>