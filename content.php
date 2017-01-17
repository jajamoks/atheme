
<div class="container">
    <div class="row my_blog">
        <?php if (is_active_sidebar('sidebar-1')) { 
                get_sidebar();
                echo'<div class="col-md-9 col-sm-8 col-xs-12">';
            } else { 
                echo'<div class="col-md-12 col-sm-12 col-xs-12">';
            }
        ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class( 'row blog-container' ); ?>>            	
                <?php if ( has_post_thumbnail() ) { ?>
                <div class="col-md-12 thumb-img col-sm-12 col-xs-12 blog-img">
                    <?php the_post_thumbnail( 'atheme-thumbnail-image', array( 'alt' => esc_attr(get_the_title()), 'class' => 'img-responsive') ); ?>
                </div>
                
                <div class="col-md-12 col-sm-12 col-xs-12 blog-title">
                  <h2>  <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h2>
                    <div class="blog-info">
                        <?php atheme_entry_meta(); ?>
                    </div>
                    <div class="blog-subtitle"><?php the_excerpt(); ?></div>
                    
                    <?php wp_link_pages( array(
                        'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'atheme' ) . '</span>',
                        'after'       => '</div>',
                        'link_before' => '<span>',
                        'link_after'  => '</span>',
                        'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'atheme' ) . ' </span>%',
                        'separator'   => '<span class="screen-reader-text">, </span>',
                    ) ); ?>
                </div>
                <?php } else { ?>
                    <div class="col-md-12 col-sm-12 col-xs-12 blog-title">
                   <h2> <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h2>
                    <div class="blog-info">
                        <?php atheme_entry_meta(); ?>
                    </div>
                    <div class="blog-subtitle"><?php the_excerpt(); ?></div>

                    <?php wp_link_pages( array(
                        'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'atheme' ) . '</span>',
                        'after'       => '</div>',
                        'link_before' => '<span>',
                        'link_after'  => '</span>',
                        'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'atheme' ) . ' </span>%',
                        'separator'   => '<span class="screen-reader-text">, </span>',
                    ) ); ?>
                </div>
                <?php } ?>
            </div>

            <?php endwhile;
            
            // Previous/next page navigation.
            the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'atheme' ),
                'next_text'          => __( '<i class="fa fa-angle-right"></i>', 'atheme' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'atheme' ) . ' </span>',
            ) ); ?> 
        </div>
    </div>
</div>