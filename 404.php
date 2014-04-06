<?php 
	if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
	get_header();
	wp_reset_query();

	if (is_pagetemplate_active("template-contact.php")) {
		$contactPages = ot_get_page("contact");
		if($contactPages[0]) {
			$contactUrl = get_page_link($contactPages[0]);
		}
	} else {
		$contactUrl = "#";
	}
?>
			<!-- BEGIN .content -->
			<div class="content">
				
				<!-- BEGIN .wrapper -->
				<div class="wrapper">

					<div class="main-content">

						<div class="full-width">
							<div class="big-error-sign">
								<h2><?php _e("404",THEME_NAME);?></h2>
								<strong><?php _e("We seem to have lost You in the clouds",THEME_NAME);?></strong>
								<span><?php _e("The page You're looking for is not here.",THEME_NAME);?><br />
									<?php printf(__('Maybe You should <a href="%1$s">go home</a> or try a search:',THEME_NAME), home_url());?>
								</span>
							</div>
						</div>

						<div class="error-search">
							<form method="get" action="<?php echo home_url(); ?>" name="searchform">
								<input type="text" placeholder="<?php _e("Search something..",THEME_NAME);?>" value="" class="search-input" name="s" id="s">
								<input type="submit" value="<?php _e("Search",THEME_NAME);?>" class="search-button">
							</form>
						</div>

						<div class="clear-float"></div>

					</div>
					
				<!-- END .wrapper -->
				</div>
				
			<!-- BEGIN .content -->
			</div>
<?php get_footer(); ?>