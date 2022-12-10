<!DOCTYPE html>
<html>
<head>
<?php get_header(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
<?php wp_head(); ?>
</head>
<body>
    <main class="cms-front-page">
        <section class="hero p-50">
            <div class="hero-bg_img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
            <div class="hero-content">
                <div class="hero-title">
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                </div>
                <div class="hero_btn_flex">
                    <a class="hero-btn" href="/shop" target="_blank">View products</a>
                </div>
            </div>
        </section>

        <section class="frontpage-ethically-section section-container pt-100">
            <div class="frontpage-col-width">
                <h2>Ethically sourced</h2>
                <p class="pr-50">any bones, bugs, and plants used are all ethically sourced either from my garden, local woods, or other trusted sellers.</p>
            </div>
            <div class="frontpage-col-width">
                <div id="frontpage-ethically-img" class="img-auto">
                    <?php echo do_shortcode('[products limit="2" columns="2" orderby="id" order="DESC" visibility="visible"]') ?>
                </div>
            </div>
        </section>

        <section class="frontpage-category-section section-container pt-100 pb-100">
            <div class="frontpage-col-width">
                <div id="frontpage-ethically-img" class="mr-50 img-auto">
                    <?php echo do_shortcode('[products limit="1" columns="1" orderby="id" order="DESC" visibility="visible"]') ?>
                </div>
            </div>
            <div class="frontpage-col-width">
                <h2>Categories</h2>
                <p>Our most popular categories:</p>
                <div class="frontpage-category-list"><?php echo do_shortcode('[product_categories]') ?></div>
            </div>
        </section>

        <section class="frontpage-review">
            <div class="review-bg_img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
            <div class="review-content" id="review-center">
                <div class="review-background">
                    <?php echo do_shortcode("[woo_reviews]"); ?>
                </div>
            </div>
        </section>
    </main>
    <?php get_footer(); ?>

</body>

</html>