<?php
/**
 * The template for displaying the header
 *
 * @package Vtrois
 * @version 2.5(17.12.29)
 */
?><!DOCTYPE HTML>
<!--
////////////       ////////     ////////////      //////////       //
//               //                     //        //       //      //
//              //                     //         //        //     //
//             //                     //          //       //      //
//////////     //                    //           //////////       //
//             //                   //            //       //      //
//              //                 //             //        //     //
//               //               //              //       //      //
//                 ////////     ////////////      ///////////      ////////////

                                      ..
                                    .' @`._
                     ~       ...._.'  ,__.-;
                  _..------/`           .-'    ~
                 :     __./'       ,  .'-'--.._
              ~   `---(.-'''---.    \`._       `.   ~
                _.--'(  .______.'.-' `-.`        `.
               :      `-..____`-.                  ;
               `.             ````  稻花香里说丰年，  ;   ~
                 `-.__           听取人生经验。  __.-'
                      ````-----.......-----'''    ~
                   ~                   ~   
                        还请大佬多多指教啦~
-->
<html class="no-js">
  <head>		
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta http-equiv="Cache-Control" content="no-transform"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#555">
	<meta name="msapplication-navbutton-color" content="#555">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="<?php wp_title( '-', true, 'right' ); ?>">
    <meta name="msapplication-starturl" content="<?php echo get_site_url(); ?>">
    <meta name="msapplication-navbutton-color" content="#555">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php wp_title( '-', true, 'right' ); ?>">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php echo get_site_url(); ?>/feed">

    <title><?php wp_title( '-', true, 'right' ); ?></title>
    <meta name="description" content="<?php kratos_description(); ?>" />
    <meta name="keywords" content="<?php kratos_keywords();?>" />
    <link rel="pingback" href="<?php echo get_site_url(); ?>/xmlrpc.php" />
	<?php wp_head(); ?>
	<?php wp_print_scripts('jquery'); ?>
	<?php if ( kratos_option('site_bw')==1 ) : ?>
	<style type="text/css">html{filter: grayscale(100%);-webkit-filter: grayscale(100%);-moz-filter: grayscale(100%);-ms-filter: grayscale(100%);-o-filter: grayscale(100%);filter: progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);filter: gray;-webkit-filter: grayscale(1); }</style>
	<?php endif; ?>
  </head>
	<?php flush(); ?>
	<body data-spy="scroll" data-target=".scrollspy">
		<div id="kratos-wrapper">
			<div id="kratos-page">
				<div id="kratos-header">
					<header id="kratos-header-section">
						<div class="container">
							<div class="nav-header">
								<?php $defaults = array('theme_location' => 'header_menu', 'container' => 'nav', 'container_id' => 'kratos-menu-wrap', 'menu_class' => 'sf-menu', 'menu_id' => 'kratos-primary-menu', ); ?>
							 <?php wp_nav_menu($defaults); ?>
							</div>
						</div>
					</header>
				</div>
