<?php
get_header(); ?>

<div id="content" class="s-content s-content--blog">

    <div class="row entry-wrap">
        <div class="column lg-12">

            <article class="entry format-standard">

                <header class="entry__header">
                    <h1>
                    <?php the_title() ?>
                    </h1>

                    <div class="entry__meta">
                        <div class="entry__meta-author">
                           
                            <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <circle cx="12" cy="8" r="3.25" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></circle>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.8475 19.25H17.1525C18.2944 19.25 19.174 18.2681 18.6408 17.2584C17.8563 15.7731 16.068 14 12 14C7.93201 14 6.14367 15.7731 5.35924 17.2584C4.82597 18.2681 5.70558 19.25 6.8475 19.25Z"></path>
                            </svg>
                          <?php the_author() ?>
                        </div>
                        <div class="entry__meta-date">
                            <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="7.25" stroke="currentColor" stroke-width="1.5"></circle>
                                <path stroke="currentColor" stroke-width="1.5" d="M12 8V12L14 14"></path>
                            </svg>
                            <?= get_the_date('d F'); ?>
                        </div>
                        <div class="entry__meta-cat">
                            <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 17.25V9.75C19.25 8.64543 18.3546 7.75 17.25 7.75H4.75V17.25C4.75 18.3546 5.64543 19.25 6.75 19.25H17.25C18.3546 19.25 19.25 18.3546 19.25 17.25Z"></path>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.5 7.5L12.5685 5.7923C12.2181 5.14977 11.5446 4.75 10.8127 4.75H6.75C5.64543 4.75 4.75 5.64543 4.75 6.75V11"></path>
                            </svg>

                            <span class="cat-links">
                                <?php the_category(',') ?>
                            </span>
                            <?php if(has_post_format()) : ?>
                               <span class="cat-links" style="background-color: #000;color:#fff;padding:10px;margin-left:5px">
                                 <?=  get_post_format();?>
                                 </span> 
                                      <?endif;?>
                        </div>
                    </div>
                </header>
                <div class="entry__media">
                                <figure class="featured-image">
                                    <?php the_post_thumbnail('large');?>
                                </figure>
                            </div>

                <div id="content" class="s-content s-content--blog">

                    <div class="row entry-wrap">
                        <div class="column lg-12">
                            <p class="lead">
                                <?php the_content(); ?>
                            </p>
                            <span class="entry__tag-list">
                                <?php the_tags(','); ?>
                            </span>

                            </p>

                            <div class="entry__author-box">
                                <figure class="entry__author-avatar">
                                    <img alt="" src="images/avatars/user-06.jpg" class="avatar">
                                </figure>
                                <div class="entry__author-info">
                                    <h5 class="entry__author-name">
                                            <?php the_author_link(); ?>
                                   
                                    </h5>
                                    <!-- <p>
                Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, 
                a pharetra augue laboris in sit minim cupidatat ut dolor voluptate enim veniam 
                consequat occaecat.
                </p> -->
                                </div>
                            </div>

                        </div> <!-- end entry-content -->

                        <div class="post-nav">
                            <div class="post-nav__prev">
                             
                                    <span>Prev</span>
                                   <?php previous_post_link();?>
                               
                            </div>
                            <div class="post-nav__next">
                                    <span>Next</span>
                                    <?php next_post_link();?>
                              
                            </div>
                        </div>

                    </div> <!-- end content-primary -->

            </article> <!-- end entry -->
        </div>
    </div>
</div>
    <?php get_footer(); ?>