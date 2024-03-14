<!-- /**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
 -->


<section class="projects-page">
<?php get_header(); ?> <!-- Include header -->

 <?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="main-post-div">
                
                <h1 class="single-page-post-heading"><?php the_title(); ?></h1>
                
                <div class="content-here">
                <div class="banner-image"><?php the_post_thumbnail('full'); ?></div>
                <?php  the_content();  ?>
                </div>
                

            <?php endwhile; ?>
















