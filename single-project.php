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
            <?php while ( have_posts() ) : the_post(); 
            $features = get_post_meta(get_the_ID(), 'key-features', true);
            $links = get_post_meta(get_thE_ID(), 'github', true);
            
            ;?>
                <div class="main-post-div">
                
                <h1 class="single-page-post-heading"><?php the_title(); ?></h1>
                
                <div class="content-here">
                <div class="banner-image"><?php the_post_thumbnail('full'); ?></div>
                <div class="content-box">
                    <?php  the_content();  ?>
                </div>
                <div class="key-features">
                    <h3> Key Features</h3>
                <?php
                if ($features) {
                    
                    echo ($features);
                }
                
            ?>

            <div class="github-container">
                <a  href ="<?php
                 if ($links) { 
                    echo ($links);
                }?>" target="_blank" rel="noreferrer noopener">

                <img class="github-img" src="<?php echo get_template_directory_uri(); ?>\Assets\github-mark.png"  alt='GitHub Icon' />
            </a>
            </div>
                </div>
                </div>
                <?php get_footer(); ?>   

            <?php endwhile; ?>
            
















