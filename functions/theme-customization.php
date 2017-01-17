<?php
/*********/
/* atheme Customization options
/*********/
function atheme_theme_customizer( $wp_customize ) {

//outputs custom css on frontend
$wp_customize->add_section( 'wp_theme_settings', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Theme Settings', 'atheme' ),
        'description' => '',
        ) );



    $wp_customize->add_setting( 'wp_custom_css', array(
        'default' => '',
        'type' => 'theme_mod',
        'transport' => 'postMessage',
        'sanitize_callback'    => 'wp_kses',
        ) );

    $wp_customize->add_control(
        'wp_custom_css', array(
            'label'      => __( 'Add your custom CSS', 'atheme' ),
            'section'    => 'wp_theme_settings',
            'settings'   => 'wp_custom_css',
            'type'       => 'textarea',
            )

        );








$wp_customize->add_panel(
        'general',
        array(
                'title' => __( 'General Settings', 'atheme' ),
                'description' => __('styling options','atheme'),
                'priority' => 20, 
        )
);
    $wp_customize->add_section( 'atheme_general_section' , array(
		'title'       => __( 'Blog Page', 'atheme' ),
		'priority'    => 30,
		'capability'     => 'edit_theme_options',
        'panel' => 'general'

    ) );

  
    $wp_customize->get_section('background_image')->panel = 'general';
    $wp_customize->get_control('header_textcolor')->label = __( 'Primary Color', 'atheme' );
    $wp_customize->get_control('background_color')->label = __( 'Background Color', 'atheme' );
    $wp_customize->get_section('header_image')->panel = 'general';
    $wp_customize->get_section('static_front_page')->panel = 'general'; 
    $wp_customize->get_section('title_tagline')->panel = 'general';



                $wp_customize->add_setting(
                      'secondary_color',
                      array(
                              'default' => '2c3e50',
                              'capability'     => 'edit_theme_options',
                              'sanitize_callback' => 'atheme_sanitize_text',
                      )
                );

                $wp_customize->add_control(
                      new WP_Customize_Color_Control(
                              $wp_customize,
                              'secondary_color',
                              array(
                                      'label'      => __('Secondary Color ','atheme'),
                                      'section' => 'colors',
                                      'settings' => 'secondary_color',
                              )
                      )
                );

                $wp_customize->add_setting(
                    'preloader',
                    array(
                            'default' => '1',
                            'capability'     => 'edit_theme_options',
                            'sanitize_callback' => 'atheme_sanitize_radio',
                            'priority' => 2, 
                    )
                );

                $wp_customize->add_control(
                        'preloader',
                        array(
                                'section' => 'wp_theme_settings',                
                                'label'   => __('Preloader','atheme'),
                                'type'    => 'radio',
                                'choices'        => array(
                                        "1"   => __( "On ", 'atheme' ),
                                        "2"   => __( "Off", 'atheme' ),
                            ),
                        )
                );





            	$wp_customize->add_setting( 'atheme_blogpage_title', array(
                    'default'        => __('Recent Article','atheme'),
                    'sanitize_callback' => 'sanitize_text_field',
            		'capability'     => 'edit_theme_options',
                ) );
                $wp_customize->add_control( 'atheme_blogpage_title', array(
            		'label'   => __('Blog Page Title','atheme'),
                    'section' => 'wp_theme_settings',
                    'type'    => 'text',
                ) );

                $wp_customize->add_setting(
                    'page_title_area',
                    array(
                            'default' => '1',
                            'capability'     => 'edit_theme_options',
                            'sanitize_callback' => 'atheme_sanitize_radio',
                            'priority' => 2, 
                    )
                );

                $wp_customize->add_control(
                        'page_title_area',
                        array(
                                'section' => 'wp_theme_settings',                
                                'label'   => __('Page Title','atheme'),
                                'type'    => 'radio',
                                'choices' => array(
                                    "1"   => __( "Show", 'atheme' ),
                                    "2"   => __( "Hide", 'atheme' ),
                            ),
                        )
                );

                $wp_customize->add_setting( 'atheme_facebook_icon', array(
                    'default'        => '',
                    'sanitize_callback' => 'sanitize_text_field',
                    'capability'     => 'edit_theme_options',
                ) );

                $wp_customize->add_control( 'atheme_facebook_icon', array(
                    'label'   => __('Social Link-1 :','atheme'),
                    'section' => 'wp_theme_settings',
                    'type'    => 'text',
                    'input_attrs' => array(
                                            'placeholder' => __('fa-facebook','atheme')
                                            ),
                ) );

                $wp_customize->add_setting( 'atheme_facebook_url', array(
                    'default'        => '',
                    'sanitize_callback' => 'esc_url_raw',
                    'capability'     => 'edit_theme_options',
                ) );

                $wp_customize->add_control( 'atheme_facebook_url', array(
                    'section' => 'atheme_social_section',
                    'type'    => 'text',
                    'input_attrs' => array(
                                            'placeholder' => __('http://facebook.com', 'atheme')
                                            ),
                ) );

                $wp_customize->add_setting( 'atheme_twitter_icon', array(
                    'default'        => '',
                    'sanitize_callback' => 'sanitize_text_field',
                    'capability'     => 'edit_theme_options',
                ) );

                
                $wp_customize->add_control( 'atheme_twitter_icon', array(
                    'label'   => __('Social Link-2 :','atheme'),
                    'section' => 'wp_theme_settings',
                    'type'    => 'text',
                    'input_attrs' => array(
                                            'placeholder' => __('fa-twitter','atheme')
                                            ),
                ) );

                $wp_customize->add_setting( 'atheme_twitter_url', array(
                    'default'        => '',
                    'sanitize_callback' => 'esc_url_raw',
                    'capability'     => 'edit_theme_options',
                ) );

                $wp_customize->add_control( 'atheme_twitter_url', array(
                    'section' => 'wp_theme_settings',
                    'type'    => 'text',
                    'input_attrs' => array(
                                            'placeholder' => __('http://twitter.com','atheme')
                                            ),
                ) );

                $wp_customize->add_setting( 'atheme_gplus_icon', array(
                    'default'        => '',
                    'sanitize_callback' => 'sanitize_text_field',
                    'capability'     => 'edit_theme_options',
                ) );

                $wp_customize->add_control( 'atheme_gplus_icon', array(
                    'label'   => __('Social Link-3 :','atheme'),
                    'section' => 'wp_theme_settings',
                    'type'    => 'text',
                    'input_attrs' => array(
                                            'placeholder' => __('fa-google-plus','atheme')
                                            ),
                ) );

                $wp_customize->add_setting( 'atheme_gplus_url', array(
                    'default'        => '',
                    'sanitize_callback' => 'esc_url_raw',
                    'capability'     => 'edit_theme_options',
                ) );

                $wp_customize->add_control( 'atheme_gplus_url', array(
                    'section' => 'wp_theme_settings',
                    'type'    => 'text',
                    'input_attrs' => array(
                                            'placeholder' => __('http://plus.google.com','atheme')
                                        ),
                ) );

                $wp_customize->add_setting( 'atheme_insta_icon', array(
                    'default'        => '',
                    'sanitize_callback' => 'sanitize_text_field',
                    'capability'     => 'edit_theme_options',
                ) );

                $wp_customize->add_control( 'atheme_insta_icon', array(
                    'label'   => __('Social Link-4 :','atheme'),
                    'section' => 'wp_theme_settings',
                    'type'    => 'text',
                    'input_attrs' => array(
                                            'placeholder' => __('fa-instagram','atheme')
                                            ),
                ) );

                $wp_customize->add_setting( 'atheme_insta_url', array(
                    'default'        => '',
                    'sanitize_callback' => 'esc_url_raw',
                    'capability'     => 'edit_theme_options',
                ) );

                $wp_customize->add_control( 'atheme_insta_url', array(
                    'section' => 'wp_theme_settings',
                    'type'    => 'text',
                    'input_attrs' => array(
                                            'placeholder' => __('http://instagram.com','atheme')
                                        ),
                ) );

                $wp_customize->add_setting( 'atheme_pinter_icon', array(
                    'default'        => '',
                    'sanitize_callback' => 'sanitize_text_field',
                    'capability'     => 'edit_theme_options',
                ) );

                $wp_customize->add_control( 'atheme_pinter_icon', array(
                    'label'   => __('Social Link-5 :','atheme'),
                    'section' => 'wp_theme_settings',
                    'type'    => 'text',
                    'input_attrs' => array(
                                            'placeholder' => __('fa-linkedin','atheme')
                                            ),
                ) );

                $wp_customize->add_setting( 'atheme_pinter_url', array(
                    'default'        => '',
                    'sanitize_callback' => 'esc_url_raw',
                    'capability'     => 'edit_theme_options',
                ) );

                $wp_customize->add_control( 'atheme_pinter_url', array(
                    'section' => 'wp_theme_settings',
                    'type'    => 'text',
                    'input_attrs' => array(
                    'placeholder' => __('http://linkedin.com','atheme')
                    ),
                ) );

}
add_action( 'customize_register', 'atheme_theme_customizer' );


function atheme_custom_css()
{ 

?>
    <style type="text/css">
    <?php $secondary_color = esc_attr((get_theme_mod('secondary_color')));
          $atheme_text_color   = esc_attr(get_header_textcolor()); ?>
          .site-title,
        .site-description,
        .owl-theme .owl-controls .owl-buttons div,
        .blog-head h5:hover,
        .button-read {
            color: #<?php echo esc_attr( $atheme_text_color); ?>;
        }
        .owl-theme .owl-controls .owl-buttons div,
        .owl-theme .owl-controls .owl-buttons div{
            border-color: #<?php echo esc_attr( $atheme_text_color); ?>;
        }
        .heading,
        .so-widget-sow-button-atom-9a01ce061a8a .ow-button-base a span:hover,
        .footer-box1 .tagcloud > a:hover,
        .page-numbers a:hover,
        .nav-links a span:hover,
        #submit:hover,
        .reply a:hover,
        .comment-reply-title small a:hover,
        .owl-theme .owl-controls .owl-buttons div:hover {
            background: #<?php echo esc_attr( $atheme_text_color); ?>;
        }
        
        .update p,.update p a,
        #cssmenu > ul > li:hover > a,
        #cssmenu > ul > li.active > a,
        .back-to-top a,
        .feature-box .icon,
        .copyright-text a:hover,
        #cssmenu ul ul li:hover > a,
        #cssmenu ul ul li a:hover,
        .blog-title a:hover,
        .main-sidebar ul li a:hover,
        .footer-box1 .footer-widget ul li a:hover,
        .footer-box1 .textwidget a:hover,
        a:hover,
        .leather ul li a:hover,
        span a:hover,.blog-head:hover,.footer-box1 tfoot a:hover,.footer-box1 .widget-title a:hover,.comment-metadata a:hover {
            color: #<?php echo esc_attr( $atheme_text_color); ?>;
        }
        .slide-blog,
        .blog-thumb{
            <?php $hex = "#".$atheme_text_color; list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x"); ?>
            background: <?php echo 'rgba('.$r.','.$g.','.$b.',0.7)'; ?>;
        }

        .button-div a:hover,
        .button a:hover,
        .wpcf7-form .wpcf7-submit:hover,
        .page-numbers a:hover,
        .nav-links a:hover,.main-sidebar .tagcloud > a:hover {
            background-color: #<?php echo esc_attr( $atheme_text_color); ?>;
        }
        
        #cssmenu > ul > li.has-sub:hover > a::after,
        .page-numbers.current {
            border-color: #<?php echo esc_attr( $atheme_text_color); ?>;
        }
        
        
        pre {
            <?php $hex = "#".$atheme_text_color; list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x"); ?>
            background: <?php echo 'rgba('.$r.','.$g.','.$b.',0.30)'; ?>;
        }
        pre, .sticky, .tag-sticky-2{border: 1px solid #<?php echo esc_attr( $atheme_text_color); ?>;}
        a.readMore:hover{background: #<?php echo esc_attr( $atheme_text_color); ?>;}
        .seperator:before, .seperator:after {
            background-color: <?php echo ($secondary_color == '') ? '#2c3e50': $secondary_color; ?>;
        }
        .title .fa{
            color: <?php echo ($secondary_color =='') ? '#2c3e50': $secondary_color; ?>;;
        }
        .footer-box1 {
            background-color: <?php echo ($secondary_color =='') ? '#2c3e50': $secondary_color; ?>;
        }
        .main-sidebar h5 ,.page-title-area {
            border-bottom: 3px solid #<?php echo esc_attr( $atheme_text_color); ?>;
        }
        <?php if (get_header_image()) { ?>
            .heading{
                background: url(<?php header_image(); ?>);
                background-size: cover;
            }
        <?php } ?>
    </style>
<?php }
add_action('wp_head','atheme_custom_css',900); 





// DISPLAY CUSTOM CSS EDITOR
    function wp_custom_css_add_custom_css(){

        echo '<style id="wp-custom-css">' . esc_textarea(get_theme_mod( 'wp_custom_css', '' )) . '</style>';

    }
add_action( 'wp_head', 'wp_custom_css_add_custom_css', 1000 );


