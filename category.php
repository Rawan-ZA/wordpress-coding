<?php
get_header(); ?>


<?php get_header(); ?>
<!-- # site-content
        ================================================== -->
<section class="s-content" style="color: #fff;">

    <!-- pageheader -->
    <div class="s-pageheader" style="margin-top:70px;">
        <div class="row">
            <div class="column large-12">
                <h1 class="page-title">
                    <span class="page-title__small-type">Category:</span>
                    <?php single_cat_title(); ?>
                </h1>
            </div>
        </div>
    </div> <!-- end s-pageheader-->
  

   <div class="row flex-container">

            <div class="bricks-wrapper" data-animate-block>

                <div class="grid-sizer"></div>
                <?php if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                        get_template_part('template-parts/content',get_post_format()); //using this when I have same design to show posts when I need ehanted change in 
                    endwhile;
                endif;
                ?>
            </div> <!-- end bricks-wrapper -->

        </div> <!-- end masonry-->


        <!-- pagination -->
        <div class="row pagination">
            <div class="column lg-12">
                <nav class="pgn">
                    <ul>

                        <?php the_posts_pagination(array(
                            'mid_size'  => 2,
                            'prev_text' => __('<svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.25 6.75L4.75 12L10.25 17.25"> </path>
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 12H5"></svg>', 'textdomain'),
                            'next_text' => __('<svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                                               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 12H4.75"></path>', 'textdomain'),
                        )); ?>

                    </ul>
                </nav> <!-- end pgn -->
            </div> <!-- end column -->
        </div> <!-- end pagination -->


</section> <!-- end s-content -->

<?php get_footer(); ?>




<?php get_footer(); ?>