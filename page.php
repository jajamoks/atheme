<?php
/**
 * The template for page
 *
 * atheme - a WordPress theme for developers
 * by Aldrin Mojica
 *
 */
get_header();
?>

<div class="page-content">
    <div class="container">
        <div class="row my_blog">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'atheme-blog-thumbnail-image', array( 'alt' => esc_attr(get_the_title()), 'class' => 'img-responsive') ); ?>
                                <?php endif; ?>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text sm_pages">
                                                <?php the_content(); ?>
                                            </div>
                                        </div>
                                    </div>
                    </div>

                                                <?php // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            } 
            wp_link_pages( array(
                'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'atheme' ) . '</span>',
                'after'       => '</div>',
                'link_before' => '<span>',
                'link_after'  => '</span>',
                'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'atheme' ) . ' </span>%',
                'separator'   => '<span class="screen-reader-text">, </span>',
            ) );
            endwhile; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php get_footer(); ?>