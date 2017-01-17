<?php 

/**
 * The template is for footer
 *
 * atheme - a WordPress theme for developers
 * by Aldrin Mojica
 *
 */

?>

<footer>
	<div class="footer-box1">
		<div class="container">
			<div class="row">
				<?php if (is_active_sidebar('footer-1')) { ?>
						<div class="col-md-3 col-sm-3 col-xs-12">
						<?php dynamic_sidebar('footer-1'); ?>
						</div><!-- Footer 1 -->
				<?php }

				if (is_active_sidebar('footer-2')) { ?>
					<div class="col-md-3 col-sm-3 col-xs-12">
					<?php dynamic_sidebar('footer-2'); ?>
					</div>
				<?php }

				if (is_active_sidebar('footer-3')) { ?>
					<div class="col-md-3 col-sm-3 col-xs-12">
					<?php dynamic_sidebar('footer-3'); ?>
					</div>
				<?php }

				if (is_active_sidebar('footer-4')) { ?>
					<div class="col-md-3 col-sm-3 col-xs-12">
					<?php dynamic_sidebar('footer-4'); ?>
					</div>
				<?php } ?>

			</div><!-- row class end here -->
		</div><!-- footer-box1 class end here -->
	</div><!-- container class end here -->



<div class="under-footer">
	<div class="container">
		<div class="row">
			<div class="back-to-top">
                <a class="go-top" href="javascript:void(0);"><i class="fa fa-angle-up"></i></a>
             </div><!-- Back to top -->

	             <div class="footer-social-icon">
	             	<ul>
	             		<?php 
	             			$atheme_facebook_url = esc_url(get_theme_mod('atheme_facebook_url'));
	             			$atheme_facebook_icon = esc_attr(get_theme_mod('atheme_facebook_icon'));

	             			if(isset($atheme_facebook_icon) && $atheme_facebook_icon !="" && isset($atheme_facebook_url) && $atheme_facebook_url != "" ) { ?>
	             				<li>
	             					<a href="<?php echo $atheme_facebook_url; ?>" target="_blank">
	             						<i class="fa <?php echo $atheme_facebook_icon; ?>"></i>
	             					</a>
	             				</li>
	             		<?php }

	             			$atheme_twitter_url = esc_url(get_theme_mod('atheme_twitter_url'));
	             			$atheme_twitter_icon = esc_attr(get_theme_mod('atheme_twitter_icon'));

	             			if(isset($atheme_twitter_icon) && $atheme_twitter_icon !="" && isset($atheme_twitter_url) && $atheme_twitter_url != "" ) { ?>
	             				<li>
	             					<a href="<?php echo $atheme_twitter_url; ?>" target="_blank">
	             						<i class="fa <?php echo $atheme_twitter_icon; ?>"></i>
	             					</a>
	             				</li>
	             		<?php }

	             			$atheme_gplus_url = esc_url(get_theme_mod('atheme_gplus_url'));
	             			$atheme_gplus_icon = esc_attr(get_theme_mod('atheme_gplus_icon'));

	             			if(isset($atheme_gplus_icon) && $atheme_gplus_icon !="" && isset($atheme_gplus_url) && $atheme_gplus_url != "" ) { ?>
	             				<li>
	             					<a href="<?php echo $atheme_gplus_url; ?>" target="_blank">
	             						<i class="fa <?php echo $atheme_gplus_icon; ?>"></i>
	             					</a>
	             				</li>
	             		<?php }


	             			$atheme_pinterest_url = esc_url(get_theme_mod('atheme_pinterest_url'));
	             			$atheme_pinterest_icon = esc_attr(get_theme_mod('atheme_pinterest_icon'));

	             			if(isset($atheme_pinterest_icon) && $atheme_pinterest_icon !="" && isset($atheme_pinterest_url) && $atheme_pinterest_url != "" ) { ?>
	             				<li>
	             					<a href="<?php echo $atheme_pinterest_url; ?>" target="_blank">
	             						<i class="fa <?php echo $atheme_pinterest_icon; ?>"></i>
	             					</a>
	             				</li>
	             		<?php }

	             			$atheme_instagram_url = esc_url(get_theme_mod('atheme_instagram_url'));
	             			$atheme_instagram_icon = esc_attr(get_theme_mod('atheme_instagram_icon'));

	             			if(isset($atheme_instagram_icon) && $atheme_instagram_icon !="" && isset($atheme_instagram_url) && $atheme_instagram_url != "" ) { ?>
	             				<li>
	             					<a href="<?php echo $atheme_instagram_url; ?>" target="_blank">
	             						<i class="fa <?php echo $atheme_instagram_icon; ?>"></i>
	             					</a>
	             				</li>
	             		<?php }?>
	             	</ul>
	             </div><!--footer social icon end here -->


	             <div class="copyright-text">
	             	<p>
	             		<?php $author_url ="#"; ?>
	             		<?php _e('Athme blank wordpress was created with <i class="fa fa-heart-o" style="color:#0033cc;"></i> by: ', 'atheme'); ?>
	             		<a target="_blank" href="<?php echo esc_url($author_url); ?>">
	             			<?php _e('Aldrin Mojica', 'atheme'); ?>
	             		</a>
	             	</p>
	             </div><!-- copy right text end here -->

		</div><!--row end here -->
	</div><!-- container end here -->
</div><!-- under-footer end here -->
</footer><!-- footer end here -->
<?php wp_footer(); ?>
</body>
</html>