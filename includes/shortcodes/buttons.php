<?php
add_shortcode('button', 'button_handler');

function button_handler($atts, $content=null, $code="") {
	extract(shortcode_atts(array('color' => null,'textcolor' => null,'icon' => null,), $atts) );


	if(isset($icon) && $icon!="none" ) {
		$icon = '<span class="icon-text">'.htmlspecialchars_decode ($icon).'</span>';
	} else {
		$icon = false;
	}


	/* Target */
	$target=$atts["target"];
	if(!isset($atts["target"]) || $atts["target"]=="blank") {
		$target="_blank";
	} else {
		$target="_self";
	}

	/* link */
	if(isset($atts["link"])) {
		$link = $atts["link"];
	} else {
		$link = "#";
	}


	if($icon==false) {
		$return = '<a href="'.$link.'" class="button" target="'.$target.'" style="background:#'.$color.'; color:#'.$textcolor.';">'.$content.'</a>';
	} else {
		$return = '<a href="'.$link.'" class="button" target="'.$target.'" style="background:#'.$color.'; color:#'.$textcolor.';">'.$icon.$content.'</a>';
	}

	
	return $return;
}

?>