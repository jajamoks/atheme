<?php
/*
 * atheme theme default setup
 */
function atheme_widgets_init() {
    register_sidebar(array(
        'name' => __('Main Sidebar', 'atheme'),
        'id' => 'sidebar-1',
        'description' => __('Main sidebar that appears on the right.', 'atheme'),
        'before_widget' => '<aside id="%1$s" class="widget widget_recent_entries %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ));
    register_sidebar(array(
        'name' => __('Footer Area One', 'atheme'),
        'id' => 'footer-1',
        'description' => __('Footer Area One that appears on footer.', 'atheme'),
        'before_widget' => '<aside id="%1$s" class="footer-widget widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('Footer Area Two', 'atheme'),
        'id' => 'footer-2',
        'description' => __('Footer Area Two that appears on footer.', 'atheme'),
        'before_widget' => '<aside id="%1$s" class="footer-widget widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('Footer Area Three', 'atheme'),
        'id' => 'footer-3',
        'description' => __('Footer Area Three that appears on footer.', 'atheme'),
        'before_widget' => '<aside id="%1$s" class="footer-widget widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('Footer Area Four', 'atheme'),
        'id' => 'footer-4',
        'description' => __('Footer Area Four that appears on footer.', 'atheme'),
        'before_widget' => '<aside id="%1$s" class="footer-widget widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',

  ));
      register_sidebar(
        array(
            'name'          => __('Banner', 'atheme'),
            'id'            => 'banner',
            'description'   => __('This is Banner in Homepage', 'atheme'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>'
           
        )
    );

}
add_action('widgets_init', 'atheme_widgets_init');


/**
 * Set up post entry meta.    
 * Meta information for current post: categories, tags, permalink, author, and date.    
 * */
function atheme_entry_meta() {
	$atheme_categories_list = get_the_category_list(', ','');
	$atheme_tag_list = get_the_tag_list('', ', ' );
	$atheme_author= ucfirst(get_the_author());
	$atheme_author_url= esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );
	$atheme_comments = wp_count_comments(get_the_ID()); 	
	$atheme_date = sprintf('<time datetime="%1$s">%2$s</time>', esc_attr(get_the_date(get_option('date_format'))), esc_html(get_the_date(get_option('date_format')))); ?>	
    <ul class="metaData">
       <li><?php printf( '%s', $atheme_date ); ?></li>
       <li><?php _e('By : ', 'atheme'); ?><a href="<?php echo esc_url($atheme_author_url); ?>" rel="tag"><?php echo $atheme_author; ?></a></li>
        <?php if (!is_page_template('page-template/front-page.php')) { ?>
       <li><?php if(!empty($atheme_categories_list)) { ?><?php _e('Category : ', 'atheme'); ?><?php echo $atheme_categories_list; ?></li><?php } ?>    <?php if(!empty($atheme_tag_list)) { ?>
    	<li><?php _e('Tags : ', 'atheme'); ?><?php echo $atheme_tag_list; ?></li><?php } ?>
        <?php } ?>
       <li><?php $atheme_comment = comments_number(__('Comment : 0', 'atheme'), __('Comment : 1', 'atheme'), __('Comments : %', 'atheme')); ?></li>
    </ul>
<?php }

/*
 * Comments placeholder function
 * 
 */
add_filter( 'comment_form_default_fields', 'atheme_comment_placeholders' );
function atheme_comment_placeholders( $fields ) {
	$fields['author'] = str_replace(
		'<input',
		'<input placeholder="' . _x( 'Name *', 'comment form placeholder', 'atheme' ) . '" required', $fields['author']
	);
	$fields['email'] = str_replace(
		'<input',
		'<input id="email" name="email" type="text" placeholder="' . _x( 'Email Id *', 'comment form placeholder', 'atheme') . '" required', $fields['email']
	);
	$fields['url'] = str_replace(
		'<input',
		'<input id="url" name="url" type="text" placeholder="' . _x( 'Website URL', 'comment form placeholder', 'atheme' ) . '" required', $fields['url']
	);
	return $fields;
}

add_filter( 'comment_form_defaults', 'atheme_textarea_insert' );
function atheme_textarea_insert( $fields ) {
	$fields['comment_field'] = str_replace(
		'<textarea',
		'<textarea id="comment" aria-required="true" rows="8" cols="45" name="comment" placeholder="'
		. _x(
		'Comment',
		'comment form placeholder',
		'atheme'
		)
	. '" ',
	$fields['comment_field']
	);
    return $fields;
} 





?>