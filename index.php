<?php get_header(); ?>

<!-- intro section
================================================== -->
<section id="intro" style="background: #14181E 
url('<?= get_theme_file_uri('assets/images/intro-bg.jpg'); ?>') no-repeat center;">

    <div class="shadow-overlay"></div>

    <div class="intro-content">
        <div class="row">

            <div class="col-twelve">

                <div class='video-link'>
                    <a href="#video-popup"><img src="<?= get_theme_mod('change-image-home') ?>" alt=""></a>
                </div>

                <h5> <?= get_theme_mod('sub-heading') ?></h5>
                <h1> <?= get_theme_mod('main-heading') ?></h1>


                <a class="button stroke smoothscroll" href="#process" title="" style="color:<?= get_theme_mod('button-color') ?>; border-color:<?= get_theme_mod('button-color'); ?>">
                    <?= get_theme_mod('button-text'); ?>
                </a>

            </div>

        </div>
    </div>

    <!-- Modal Popup
   ========================================================= -->

    <div id="video-popup" class="popup-modal mfp-hide">

        <div class="fluid-video-wrapper">
            <iframe src="<?= get_theme_mod('upload-url'); ?>" width="500" height="281" frameborder="0"></iframe>
        </div>
        <a class="close-popup">Close</a>

    </div> <!-- /video-popup -->

</section> <!-- /intro -->


<!-- Process Section
================================================== -->
<section id="process">

    <div class="row section-intro">
        <div class="col-twelve with-bottom-line">

            <h5 style="color: <?= get_theme_mod('process-sub-heading-color') ?>;"> <?= get_theme_mod('process-sub-heading') ?></h5>
            <h1 style="color: <?= get_theme_mod('process-main-heading-color') ?>;"> <?= get_theme_mod('process-main-heading') ?></h1>

            <p class="lead" style="color: <?= get_theme_mod('process-text-color') ?>;"> <?= get_theme_mod('process_text'); ?></p>

        </div>
    </div>

    <div class="row process-content">

        <div class="left-side">

            <div class="item" data-item="<?= get_theme_mod('left-icon-1'); ?>">

                <h5 style="color: <?= get_theme_mod('process-heading-color'); ?>"> <?= get_theme_mod('left-heading-1') ?></h5>

                <p style="color: <?= get_theme_mod('process-text-color'); ?>"> <?= get_theme_mod('left-text-1') ?></p>

            </div>

            <div class="item" data-item="<?= get_theme_mod('left-icon-2'); ?>">

                <h5 style="color:<?= get_theme_mod('process-heading-color'); ?>"><?= get_theme_mod('left-heading-2') ?></h5>

                <p style="color: <?= get_theme_mod('process-text-color'); ?>"> <?= get_theme_mod('left-text-2') ?></p>

            </div>

        </div> <!-- /left-side -->

        <div class="right-side">

            <div class="item" data-item="<?= get_theme_mod('right-icon-3'); ?>">

                <h5 style="color: <?= get_theme_mod('process-heading-color'); ?>""><?= get_theme_mod('left-heading-3') ?></h5>

               <p style=" color:<?= get_theme_mod('process-text-color'); ?>"> <?= get_theme_mod('right-text-3') ?></p>

            </div>

            <div class="item" data-item="<?= get_theme_mod('right-icon-4'); ?>">

                <h5 style="color: <?= get_theme_mod('process-heading-color'); ?>"><?= get_theme_mod('left-heading-4') ?></h5>

                <p style="color: <?= get_theme_mod('process-text-color'); ?>"><?= get_theme_mod('right-text-4') ?></p>

            </div>

        </div> <!-- /right-side -->

        <div class="image-part" style="background-image: url('<?= get_theme_mod('change-process-image') ?>')"></div>

    </div> <!-- /process-content -->

</section> <!-- /process-->


<!-- features Section
================================================== -->
<section id="features" style="background: #090909 url('<?= get_theme_mod('change-featured-image') ?>') no-repeat center; ">

    <div class="row section-intro">
        <div class="col-twelve with-bottom-line">

            <h5><?= get_theme_mod('featured-sub-heading'); ?></h5>
            <h1><?= get_theme_mod('featured-main-heading'); ?></h1>

            <p class="lead"><?= get_theme_mod('featured-desc') ?></p>
        </div>
    </div>

    <div class="row features-content">

        <div class="features-list block-1-3 block-s-1-2 block-tab-full group">
            <?php
            if (is_active_sidebar('featured-section-widget')) :
                dynamic_sidebar('featured-section-widget');
            endif;
            ?>


        </div>
    </div> <!-- features-content -->

</section> <!-- /features -->




<!-- pricing
================================================== -->

<section id="pricing">

    <div class="row section-intro">
        <div class="col-twelve with-bottom-line">

            <h5> <?= get_theme_mod('priceing-sub-heading'); ?></h5>
            <h1> <?= get_theme_mod('priceing-main-heading'); ?></h1>

            <p class="lead"> <?= get_theme_mod('priceing-desc'); ?></p>

        </div>
    </div>

    <div class="row pricing-content">

        <div class="pricing-tables block-1-4 group">
            <?php
            if (is_active_sidebar('priceing-section-widget')) :
                dynamic_sidebar('priceing-section-widget');
            endif;
            ?>
        </div>
    </div>
    </div> <!-- /price-block -->

    </div> <!-- /pricing-tables -->

    <!-- /pricing-content -->

</section> <!-- /pricing -->

<?php

$slider_loop = new WP_Query([
    'post_type' => 'slider',
    'post-status' => 'publish',

]);

?>

<!-- Testimonials Section
================================================== -->
<section id="testimonials">

    <div class="row">
        <div class="col-twelve">
            <h2 class="h01">Hear What Are Clients Say.</h2>
        </div>
    </div>

    <div class="row flex-container">

        <div id="testimonial-slider" class="flexslider">
            <?php if ($slider_loop->have_posts()) :
            ?>
                <ul class="slides">
                    <li>
                        <?php while ($slider_loop->have_posts()) :
                            $slider_loop->the_post();
                        ?>
                            <div class="testimonial-author">
                                <img src="<?= the_post_thumbnail_url() ?>" alt="Author image">
                                <div class="author-info">
                                    <?php the_title(); ?>
                                    <span class="position"></span>
                                </div>
                            </div>
                            <p> <?php the_content(); ?></p>
                    <?php endwhile;
                    endif;
                    wp_reset_postdata(); ?>
                    </li> <!-- /slide -->

                    <!-- <li> -->

                    <!-- <div class="testimonial-author">
                        <img src="" alt="Author image">
                        <div class="author-info">
                            John Doe
                            <span>CEO, ABC Corp.</span>
                        </div>
                    </div>

                    <p>
                        This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                        nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                    </p> -->

                    <!-- </li> /slide -->

                </ul> <!-- /slides -->

        </div> <!-- /testimonial-slider -->

    </div> <!-- /flex-container -->

</section> <!-- /testimonials -->


<!-- faq
================================================== -->
<section id="faq">

    <div class="row section-intro">
        <div class="col-twelve with-bottom-line">

            <h5 style="color: <?= get_theme_mod('quastion-sub-heading-color'); ?>"> <?= get_theme_mod('quation-sub-heading'); ?>Faq</h5>
            <h1 style="color:<?= get_theme_mod('quastion-main-heading-color'); ?>"> <?= get_theme_mod('quation-main-heading'); ?></h1>

            <p class="lead" style="color:<?= get_theme_mod('quastion-desc-color'); ?> "><?= get_theme_mod('quastion-desc') ?></p>

        </div>
    </div>
    <?php

    $quastion_loop = new WP_Query([
        'post_type' => 'quastion',
        'post-status' => 'publish',

    ]);

    ?>

    <div class="row faq-content">

        <div class="q-and-a block-1-2 block-tab-full group">
            <?php if ($quastion_loop->have_posts()) : ?>
                <?php while ($quastion_loop->have_posts()) : ?>
                    <div class="bgrid">
                        <?php $quastion_loop->the_post();  ?>
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_content(); ?></p>
                    </div>
                <?php
                endwhile; ?>

            <?php endif;
            wp_reset_postdata(); ?>
        </div> <!-- /q-and-a -->

    </div> <!-- /faq-content -->

    <div class="row section-ads">

        <div class="col-twelve">

            <div class="ad-content">

                <h2 class="h01"><a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">
                        <?= get_theme_mod('recommendction-heading') ?></a></h2>

                <p class="lead">
                    <?= get_theme_mod('recommendction-text') ?>
                    <!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. -->
                </p>

                <div class="action">
                    <a class="button large round" href="<?= get_theme_mod('sign-up-link') ?>">Sign Up Now</a>
                </div>

            </div>

        </div>

    </div> <!-- /section-ads -->


</section> <!-- /faq -->

<!-- cta
================================================== -->
<section id="cta" style="background-color: <?= get_theme_mod('background-color'); ?>;">

    <div class="row cta-content">

        <div class="col-twelve">

            <h1 class="h01"> <?= get_theme_mod('free-heading'); ?></h1>

            <p class="lead"><?= get_theme_mod('free-text'); ?></p>

            <ul class="stores">
                <li class="app-store">
                    <a href="<?= get_theme_mod('app-stor-link'); ?>" class="button round large" title="">
                        <i class="icon ion-social-apple"></i>App Store
                    </a>
                </li>
                <li class="play-store">
                    <a href="<?= get_theme_mod('google-stor-link'); ?>" class="button round large" title="">
                        <i class="icon ion-social-android"></i>Play Store</a>
                </li>
                <li class="windows-store">
                    <a href="<?= get_theme_mod('win-stor-link'); ?>" class="button round large" title="">
                        <i class="icon ion-social-windows"></i>Win Store</a>
                </li>
            </ul>

        </div>

    </div> <!-- /cta-content -->

</section> <!-- /cta -->


<?php get_footer(); ?>