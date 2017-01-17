<?php
/**
 * The template for header
 *
 * atheme - a WordPress theme for developers
 * by Aldrin Mojica
 *
 */
?>
<!doctype html>

<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<script type="text/javascript">

//Responsive Menu
    var ResponsiveMenu =  {
        menuType: 'desktop',
        initial: function(winWidth) {
            ResponsiveMenu.menuWidthDetect(winWidth);
            ResponsiveMenu.menuBtnClick();
            ResponsiveMenu.parentMenuClick();
        },
        menuWidthDetect: function(winWidth) {
            var currMenuType = 'desktop';
            if (matchMedia('only screen and (max-width: 991px)').matches) {
                currMenuType = 'mobile';
                $('sticky-wrapper').css('height', '68px !important');
            }
          
            if ( currMenuType !== ResponsiveMenu.menuType ) {
                ResponsiveMenu.menuType = currMenuType;
                if ( currMenuType === 'mobile' ) {
                    var $mobileMenu = $('#mainnav').attr('id', 'mainnav-mobi').hide();
                    $('#header').find('.header-wrap').after($mobileMenu);
                    var hasChildMenu = $('#mainnav-mobi').find('li:has(ul)');
                    hasChildMenu.children('ul').hide();
                    hasChildMenu.children('a').after('<span class="btn-submenu"></span>');
                    $('.btn-menu').removeClass('active');

                } else {
                    var $desktopMenu = $('#mainnav-mobi').attr('id', 'mainnav').removeAttr('style');
                    $desktopMenu.find('.sub-menu').removeAttr('style');
                    $('#header').find('.btn-menu').after($desktopMenu);
                    $('.btn-submenu').remove();
                
                     $('sticky-wrapper').css('height', '68px');
                }
            } // clone and insert menu
        },
        menuBtnClick: function() {
            $('.btn-menu').on('click', function() {
                $('#mainnav-mobi').slideToggle(300);
                $(this).toggleClass('active');
            });
        }, // click on moblie button
        parentMenuClick: function() {
            $(document).on('click', '#mainnav-mobi li .btn-submenu', function(e) {
                if ( $(this).has('ul') ) {
                    e.stopImmediatePropagation()
                    $(this).next('ul').slideToggle(300);
                    $(this).toggleClass('active');
                }
            });
        } // click on sub-menu button
    };




</script>
</head>
<body <?php body_class();?>>

    <?php 
        $preloader = get_theme_mod('preloader');

    if($preloader == '1')
    { ?>
        <div class="preloader"><span class="preloader-gif"></span></div>
    <?php }?>


    <header id="header" class="header header-sticky">
            <div class="header-wrap">
                <div class="header-nav">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 col-lg-3 col-sm-6 col-xs-6">
                                <div class="header-brand">
                                      <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                                        <?php $logo_image = '';
                                            if (function_exists('get_custom_logo')) {
                                                $logo_image = has_custom_logo(); 
                                                $output_logo = get_custom_logo();
                                            } 
                                            if(empty($logo_image)){
                                                echo '<h3 class="site-title logo-box">'.get_bloginfo('name').'</h3><span class="site-description">'.get_bloginfo('description').'</span>';
                                            }else{ 
                                                echo $output_logo;
                                            } ?>
                                        </a>
                                </div>
                            </div>
                            <div class="col-md-10 col-lg-9 col-sm-6 col-xs-6">
                                <div class="btn-menu"><i class="fa fa-align-justify"></i></div>
                                <nav id="mainnav" class="mainnav pull-right">
                                  
                                         <?php
                                            wp_nav_menu( array(
                                                'theme_location' => 'primary',
                                                'container' => false,
                                                'menu_class'=> 'mainnav pull-right',
                                                'items_wrap' => '<ul class="menu">%3$s</ul>',
                                            ));
                                        ?>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End header -->


