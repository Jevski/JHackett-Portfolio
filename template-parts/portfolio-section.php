<section class="portfolio">
    <div id="" class="content-area">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
            <h2 class="portfolio-title">Portfolio</h2>
            <div class="entry-content">
                <?php
                // Start the loop.
                while (have_posts()) : the_post();
                    // Include the content template.
                    
                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                    // End of the loop.
                endwhile;
                ?>
                <section class="portfolio-each">
                    <?php
                    // Custom query to fetch portfolio items
                    $portfolio_query = new WP_Query(array(
                        'post_type' => 'project',
                        'posts_per_page' => -1,
                        'order' => 'DESC'
                    ));

                    if ($portfolio_query->have_posts()) :
                        while ($portfolio_query->have_posts()) : $portfolio_query->the_post(); ?>
                            <div class="portfolio-item">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <div class="portfolio-thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium'); ?>
                                    </a>
                                </div>
                                <div class="portfolio-description">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata();
                    else :
                        echo 'No portfolio items found.';
                    endif;
                    ?>
                
            </div><!-- .entry-content -->
        </article><!-- #post-## -->
    </div><!-- .content-area -->
</section>