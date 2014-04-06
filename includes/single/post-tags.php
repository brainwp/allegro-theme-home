<?php
	//post tags
	$posttags = get_the_tags();
?>
<?php if ($posttags) { ?>
	<div class="article-tags tag-cloud">
		<strong><?php _e("TAGS:", THEME_NAME);?></strong>
		<?php	
			  foreach($posttags as $tag) {
				echo '<a href="'.get_tag_link($tag->term_id).'">'.$tag->name . '</a>'; 
			  }
		?>
	</div>

<?php } ?>