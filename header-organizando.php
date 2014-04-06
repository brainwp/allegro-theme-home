<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Allegro
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<?php
	$favicon = get_option(THEME_NAME."_favicon");

	$bg_texture = get_option(THEME_NAME."_bg_texture");
	$page_layout = get_option(THEME_NAME."_page_layout");
	if($page_layout!="wide") {
		$bodyClass ='style="background-image: url('.THEME_IMAGE_URL.'background-'.$bg_texture.'.jpg); background-position: top center; background-repeat: repeat;"';	
	} else {
		$bodyClass = false;
	}
?>

<!-- BEGIN head -->
	<head>
		<!-- Meta Tags -->
		<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		

		<!-- Title -->
		<title>
			<?php
				if ( is_single() ) { single_post_title(); print ' | '; bloginfo('name'); }      
				elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); }
				elseif ( is_page() ) { single_post_title(''); print ' | '; bloginfo('description'); }
				elseif ( is_search() ) { bloginfo('name'); print ' | Search results ' . esc_html($s); }
				elseif ( is_404() ) { bloginfo('name'); print ' | Page not found'; }
				else { bloginfo('name'); print ' | '; wp_title(''); }
			?>
		</title>

		<!-- Favicon -->
		<?php 
			if($favicon) {
		?>
			<link rel="shortcut icon" href="<?php echo $favicon;?>" type="image/x-icon" />
		<?php } else { ?>
			<link rel="shortcut icon" href="<?php echo THEME_IMAGE_URL; ?>favicon.ico" type="image/x-icon" />
		<?php } ?>
		
		<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', THEME_NAME), esc_html( get_bloginfo('name'), 1 ) ); ?>" />
		<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', THEME_NAME), esc_html( get_bloginfo('name'), 1 ) ); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-2819983-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>

	<?php wp_head(); ?>

   </head>
	<!-- END head -->

	<!-- BEGIN body -->
	<body <?php body_class();?> <?php echo $bodyClass; ?>>

			<?php get_template_part(THEME_INCLUDES."banners");?>
				<?php get_template_part(THEME_INCLUDES."top"); ?>
				<div style="height:1px;clear:both;width:100%">&nbsp;</div>


