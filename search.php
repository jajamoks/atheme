<?php
/**
 * The template for search page
 *
 * atheme - a WordPress theme for developers
 * by Aldrin Mojica
 *
 */
get_header();

if (have_posts()) : ?>
 	<?php get_template_part('content'); ?>
 <?php else : ?>
 	<div class="container">
        <div class="row my_blog">
			<div class="row">
            	<div class="col-md-12 col-sm-12 col-xs-12 admin">
                     <h2> <?php _e('Search results for : ', 'atheme'); echo get_search_query(); ?> </h2>
					<p class="spage">
						<?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords', 'atheme'); ?>.</p> 
					    <?php get_search_form(); ?>
					</p>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php get_footer(); ?>