<?php
	if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
	define("THEME_NAME", 'allegro');
	define("THEME_FULL_NAME", 'Allegro');


	// THEME PATHS
	define("THEME_FUNCTIONS_PATH",TEMPLATEPATH."/functions/");
	define("THEME_INCLUDES_PATH",TEMPLATEPATH."/includes/");
	define("THEME_SCRIPTS_PATH",TEMPLATEPATH."/js/");
	define("THEME_AWEBER_PATH", THEME_FUNCTIONS_PATH."aweber_api/");
	define("THEME_ADMIN_INCLUDES_PATH", THEME_INCLUDES_PATH."admin/");
	define("THEME_WIDGETS_PATH", THEME_INCLUDES_PATH."widgets/");
	define("THEME_SHORTCODES_PATH", THEME_INCLUDES_PATH."shortcodes/");

	//POST TYPES
	define("OT_POST_GALLERY","gallery");
	

	define("THEME_FUNCTIONS", "functions/");
	define("THEME_AWEBER", THEME_FUNCTIONS."aweber_api/");
	define("THEME_INCLUDES", "includes/");
	define("THEME_SLIDERS", THEME_INCLUDES."sliders/");
	define("THEME_LOOP", THEME_INCLUDES."loop/");
	define("THEME_SINGLE", THEME_INCLUDES."single/");
	define("THEME_ADMIN_INCLUDES", THEME_INCLUDES."admin/");
	define("THEME_CACHE", "cache/");
	define("THEME_SCRIPTS", "js/");
	define("THEME_CSS", "css/");

	define("THEME_URL", get_template_directory_uri());

	define("THEME_CSS_URL",THEME_URL."/css/");
	define("THEME_CSS_ADMIN_URL",THEME_URL."/css/admin/");
	define("THEME_JS_URL",THEME_URL."/js/");
	define("THEME_JS_ADMIN_URL",THEME_URL."/js/admin/");
	define("THEME_IMAGE_URL",THEME_URL."/images/");
	define("THEME_IMAGE_CPANEL_URL",THEME_IMAGE_URL."/control-panel-images/");
	define("THEME_IMAGE_MTHEMES_URL",THEME_IMAGE_URL."/more-themes-images/");
	define("THEME_FUNCTIONS_URL",THEME_URL."/functions/");
	define("THEME_SHORTCODES_URL",THEME_URL."/includes/shortcodes/");
	define("THEME_ADMIN_URL",THEME_URL."/includes/admin/");


	require_once(THEME_AWEBER_PATH."aweber_api.php");
	require_once(THEME_FUNCTIONS_PATH."tax-meta-class/tax-meta-class.php");
	require_once(THEME_FUNCTIONS_PATH."init.php");
	require_once(THEME_WIDGETS_PATH."init.php");
	require_once(THEME_SHORTCODES_PATH."/init.php");
	require_once(THEME_INCLUDES_PATH."theme-config.php");
	require_once(THEME_INCLUDES_PATH."admin/notifier/update-notifier.php");



	//remove visual composer notifier
	if(function_exists('vc_set_as_theme')) {
		vc_set_as_theme($notifier = false);
	}

	// Publicidade
	class wpb_widget extends WP_Widget {

		function __construct() {
			parent::__construct(
			'wpb_widget_publicidade', 
			__('Incluir arquivo externo', 'wpb_widget_domain'), 
			array( 'description' => __( 'Inclusão de arquivo externo', 'wpb_widget_domain' ), ));
		}

		public function widget( $args, $instance ) {		
			$title = apply_filters( 'widget_title', $instance['title'] );
			$file = $instance['file'];
			echo $args['before_widget'];
			if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title'];

			// This is where you run the code and display the output
			include($_SERVER["DOCUMENT_ROOT"].'/_ad/'.$file);
			echo $args['after_widget'];
		}

			// Widget Backend 
		public function form( $instance ) {
			if(isset($instance['title'])) {
				$title = $instance[ 'title' ];
				$file = $instance[ 'file' ];
			}
			else {
				$title = __( 'Título', 'wpb_widget_domain' );
			}
			?>
			<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Título:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
			</p>
			<p>
			<label for="<?php echo $this->get_field_id( 'file' ); ?>"><?php _e( 'Arquivo para incluir:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'file' ); ?>" name="<?php echo $this->get_field_name( 'file' ); ?>" type="text" value="<?php echo esc_attr( $file ); ?>" />
			</p>
			<?php 
		}

			// Updating widget replacing old instances with new
		public function update( $new_instance, $old_instance ) {
			$instance = array();
			$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
			$instance['file'] = ( ! empty( $new_instance['file'] ) ) ? strip_tags( $new_instance['file'] ) : '';
			return $instance;
		}
	} // Class wpb_widget ends here

		// Register and load the widget
		function wpb_load_widget() {
			register_widget( 'wpb_widget' );
		}
	
	add_action( 'widgets_init', 'wpb_load_widget' );

?>