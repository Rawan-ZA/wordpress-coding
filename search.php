

<?php get_header(); ?>
<!-- # site-content
        ================================================== -->
<section id="content" class="s-content">

   <!-- pageheader -->
   <div class="s-pageheader">
                <div class="row">
                    <div class="column large-12">
                        <h1 class="page-title" style="margin-top: 80px;">
                           search Result
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
                ?>
                        <article class="brick entry" data-animate-el>

                            <div class="entry__thumb">
                                <a href="<?php the_permalink(); ?>" class="thumb-link">
                                    <?php the_post_thumbnail();  ?>
                                </a>
                            </div> <!-- end entry__thumb -->

                            <div class="entry__text">
                                <div class="entry__header">
                                    <div class="entry__meta">
                                        <span class="cat-links">
                                        <?php if (get_post_type()== 'post'): ?>
                                            <a href="#"><?php the_category(' ,'); ?></a>
                                        </span>
                                        <span class="byline">
                                            By:
                                            <?php the_author_link(); ?>
                                            ,
                                        </span>
                                        <span class="byline">
                                            <?= get_the_date('d F'); ?>
                                        </span>
                                    </div>
                                    <h1 class="entry__title"><a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a></h1>
                                </div>
                               
                                    <div class="entry__excerpt">
                                        <p>
                                            
                                            <?php the_excerpt();
                                          
                                            ?> </p>
                                             <?php  else : ?>
                                    <p> <?php the_content();  ?> </p>

                                        <a class="entry__more-link" href="<?php the_permalink(); ?>">Read More</a>

                                    <?php endif; ?>
                                    </div>

                            </div> <!-- end entry__text -->

                        </article> <!-- end article -->
                     <?php
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