<?php
/**
 * The template for displaying the header
 *
 * @package Vtrois
 * @version 2.5(17.12.29)
 */
			echo '<div class="kratos-start kratos-hero-2"><div class="kratos-overlay"></div><div class="kratos-cover kratos-cover_2 text-center" style="background-image: url(' . kratos_option('background_image') . ');"><div class="desc desc2 animate-box"><a href="'.get_bloginfo('url').'"><h2>' . single_cat_title('', false) . '</h2><br><span>' . category_description() . '</span></a></div></div></div>';
?>
