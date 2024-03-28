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
            $links = get_post_meta(get_the_ID(), 'github', true);

            $custom_post_type_id = get_the_ID(); // Assuming you have the ID of the custom post type

            $tools = wp_get_object_terms($custom_post_type_id, 'tools');
            
            ;?>
                <div class="main-post-div">
                
                <h1 class="single-page-post-heading"><?php the_title(); ?></h1>
                
                <div class="content-here">
                <div class="banner-image"><?php the_post_thumbnail('full'); ?></div>
                <div class="content-box">
                    <?php  the_content();  ?>
                    <div class="tools">
                        <h4 class="tools-title"> Tools & libraries</h4>
                        <?php 
                          if ($tools && !is_wp_error($tools)) {
                            echo '<div class="tools">';
                            foreach ($tools as $tool) {
                                echo '<span class="tool-text">' . $tool->name . '</span>';
                                echo " ";
                            }
                            echo '</div>';
                           
                        }
                        ?>
                    </div>
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
            
















