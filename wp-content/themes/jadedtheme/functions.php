<?php

function jadedtheme_add_woocommerce_support()
{
    add_theme_support('woocommerce', array(
        'thumbnail_image_width' => 150,
        'single_image_width'    => 300,

        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
    ));

    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
}
add_action('after_setup_theme', 'jadedtheme_add_woocommerce_support');

// Styles
function jadedtheme_styles()
{
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Spectral+SC&display=swap');
    wp_enqueue_style('jadedtheme-style', get_theme_file_uri('style.css'));
    wp_enqueue_style('jadedtheme-single-page-style', get_theme_file_uri('styles/single-page-style.css'));
    wp_enqueue_style('jadedtheme-navigation-style', get_theme_file_uri('styles/navigation-style.css'));
    wp_enqueue_style('jadedtheme-frontpage-style', get_theme_file_uri('styles/frontpage-style.css'));
    wp_enqueue_style('jadedtheme-footer-style', get_theme_file_uri('styles/footer-style.css'));
    wp_enqueue_style('jadedtheme-contact-style', get_theme_file_uri('styles/contact-style.css'));
    wp_enqueue_style('jadedtheme-archive-style', get_theme_file_uri('styles/archive-style.css'));
    wp_enqueue_style('jadedtheme-about-page-style', get_theme_file_uri('styles/about-page-style.css'));
}
add_action('wp_enqueue_scripts', 'jadedtheme_styles');

// FRONTPAGE
// Removing the image from categories
remove_action('woocommerce_before_subcategory_title', 'woocommerce_subcategory_thumbnail', 10);

// Remove the category count for WooCommerce categories
add_filter('woocommerce_subcategory_count_html', '__return_null');

// Created shortcode to display reviews on frontpage
function get_woo_reviews()
{
    $comments = get_comments(
        array(
            'status'      => 'approve',
            'post_status' => 'publish',
            'post_type'   => 'product',
        )
    );
    $comments = array_slice($comments, 0, 1);
    $html = '<ul>';
    foreach ($comments as $comment) :
        $html .= '<li><h3>"' . $comment->comment_content . '"</h3>';
        $html .= "<p>Comment left by: " . $comment->comment_author . " On " . $comment->comment_date . "</p>";
        $html .= '<p>Review for product: ' . get_the_title($comment->comment_post_ID) . '</hp></li>';
    endforeach;
    $html .= '</ul>';
    ob_start();
    echo $html;
    $html = ob_get_contents();
    ob_end_clean();

    return $html;
}
add_shortcode('woo_reviews', 'get_woo_reviews');


// ARCHIVE PAGE
// On the archive page remove the result count from the top
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);

// On the archive page add the categories on the top
add_action('woocommerce_before_shop_loop', 'woo_display_categories', 20);
function woo_display_categories()
{
    echo "<div class='archive_categories'>" . do_shortcode('[product_categories]') . "</div>";
}


// To be able to accept .webp images to upload correctly
function webp_upload_mimes($existing_mimes)
{
    // add webp to the list of mime types
    $existing_mimes['webp'] = 'image/webp';
    // return the array back to the function with our added mime type
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');

// Remove Product Tabs
function remove_product_tabs( $tabs ) {
    unset( $tabs['description'] );
    unset( $tabs['reviews'] );
    unset( $tabs['additional_information'] );
    return $tabs;
}
add_filter( 'woocommerce_product_tabs', 'remove_product_tabs', 98, 1 );

// Tabs callback function after single content.
add_action( 'woocommerce_after_single_product_summary', 'woocommerce_product_description_tab' );
add_action( 'woocommerce_after_single_product_summary', 'comments_template' );