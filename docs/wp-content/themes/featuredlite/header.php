<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
	  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113662223-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-113662223-2');
</script>

  </head>
  <body id="page-top" <?php body_class(); ?> >
    <div class="overlayloader">
      <div class="loader">&nbsp;</div>
    </div>
    <!-- Start Of Header Wrapper -->
    <?php
    $header_fixed_cls = '';
    $cntralign_menu='';
    $split_menu='';
    $hdr_trnsprnt ='';
    $last_btn ='';
    if(get_theme_mod('featuredlite_sticky_header_disable')=='1'){
    $header_fixed_cls = 'header-fixed';
    }else{
    $header_fixed_cls ='';
    }
    if(get_theme_mod('header_layout')=='center'){
    $cntralign_menu = 'menu-center';
    }else{
    $cntralign_menu='';
    }
    if(get_theme_mod('header_layout')=='split'){
    $split_menu ='menu-center split-menu';
    }else{
    $split_menu ='';
    }
    if(get_theme_mod('header_layout')=='default'){
    $split_menu ='';
    $cntralign_menu='';
    }
    if(get_theme_mod('hdr_bg_trnsparent_active')=='1'){
    $hdr_trnsprnt ='hdr-transparent';
    }else{
    $hdr_trnsprnt ='';
    }
    if(get_theme_mod('last_menu_btn')=='1'){
    $last_btn ='last-btn';
    }else{
    $last_btn ='';
    }
    ?>
    <!-- script to split menu -->
 <?php 
if (get_theme_mod('header_layout')=='split') { ?>    
  <script>
    jQuery(document).ready(function() {
    // hides home from navigation
     var position = jQuery("ul.menu > li").length;
     var middle = Math.round(position/2);
     var i = 0;
     jQuery('ul.menu > li').each(function() {
         if(i == middle){
                <?php
        if (get_theme_mod('title_disable')!==''){?>
          jQuery(this).before("<li class='logo-cent'><h1><a href='<?php echo esc_url( home_url( '/' ) ); ?>'><?php bloginfo('name'); ?></a></h1><p><?php bloginfo('description'); ?></p></li>");
            <?php } else { ?>
      jQuery(this).before('<li class="logo-cent"><?php the_custom_logo();?></li>');
            <?php } ?>
        }
         i++;
     });
 });
  </script>
  <?php } ?>  
   <!-- script to split menu --> 
    <header id="header" class="<?php echo $header_fixed_cls; ?> <?php echo $cntralign_menu; ?> <?php echo $split_menu; ?> <?php echo $hdr_trnsprnt; ?> <?php echo $last_btn; ?>">
      <div class="header-img">
      <div class="overlay-demo"></div>
        </div>
        <div class="header-wrapper" >
          <!-- Start Of Top Container -->
          <div class="container">
            <div class="header">
              <!-- Start Of Logo -->
              <div class="logo">
                <div class="logo-img">
                 
                  <?php
                if(get_theme_mod('title_disable','enable')!=''){
                  if ( is_front_page() && is_home() ) : ?>
                  <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                  <?php else : ?>
                  <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                  <?php endif;
                  $description = get_bloginfo( 'description', 'display' );
                  if ( $description || is_customize_preview() ) : ?>
                  <p><?php echo $description; ?></p>
                  <?php endif;  } else { ?>
                   <?php featuredlite_the_custom_logo(); 
                 }
                  ?>
                </div>
              </div>
              <!-- End Of Logo -->
              <div id="main-menu-wrapper">
                <a href="#" id="pull" class="toggle-mobile-menu"></a>
                <nav class="navigation clearfix mobile-menu-wrapper">
                  <?php if ( is_front_page()) :
                  featuredlite_nav_menu();
                  else:
                  featuredlite_secnd_menu();
                  endif;
                  ?>
                </nav>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
    </header>
    <div class="clearfix"></div>