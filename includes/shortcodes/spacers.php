<?php
	add_shortcode('spacer', 'spacer_handler');

	function spacer_handler($atts, $content=null, $code="") {
		return '<hr class="style-'.$atts['style'].'" />';

	}
?>