<div class="footer_wrapper">
    <img class="footerBackLogo" src="/wp-content/themes/jadedtheme/assets/images/background_logo.png">
    <div class="footerFirstSection">
        <div class="imageAndIcons">
            <div class="footerLogoWrapper">
                <img class="jadedFooterLogo" src="/wp-content/themes/jadedtheme/assets/images/JadeProfile3.png">
            </div>
            <div>
                <h2 class="footerTitle"><?php the_title()?></h2>
                <div class="iconWrapper">
                    <img class="instaIcon" src="/wp-content/themes/jadedtheme/assets/images/insta-icon.png">
                    <img class="footerIcon" src="/wp-content/themes/jadedtheme/assets/images/facebook-icon.png">
                    <img class="etsyIcon" src="/wp-content/themes/jadedtheme/assets/images/etsy-icon.png">
                </div>
            </div>
        </div>


        <div class="footerMenuWrapper">
            <nav class="footerMenu">
                <?php
                    wp_nav_menu(
                        array(
                        'menu' => 'footer',
                        'container' => '',
                        'theme_location' => 'footer'
                        )
                );
                ?>
            </nav>
            <nav class="secondFooterMenu">
                <?php
                    wp_nav_menu(
                        array(
                        'menu' => 'footer_2',
                        'container' => '',
                        'theme_location' => 'footer_2'
                        )
                );
                ?>
            </nav>
        </div>
    </div>

    <div class="footerSecondSection">
        <p>©All rights reserved</p>
        <p>Privacy Policy</p>
    </div>

    <!-- <div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1045.118276522913!2d13.022536073021561!3d55.59204257472721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4653a166edd70eb7%3A0x41e44f943f5b5c15!2sTorekovsgatan%2018B%2C%20214%2039%20Malm%C3%B6!5e0!3m2!1ssv!2sse!4v1669794983600!5m2!1ssv!2sse"
         allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div> -->

</div>
<?php wp_footer();?>