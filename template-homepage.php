<?php
/*
Template Name: Drag & Drop Page Builder
*/	
?>
<?php get_header(); ?>
<?php

	wp_reset_query();
	global $post;
	

	//blocks
	$homepage_layout_order = get_option(THEME_NAME."_homepage_layout_order_".$post->ID);

?>
<?php get_template_part(THEME_LOOP."loop","start"); ?>
	<?php if(get_the_content()) { ?>
		<div class="block">
			<div class="block-content">
				<?php the_content();?>
			</div>
		</div>
	<?php } ?>
	<?php
		get_template_part(THEME_FUNCTIONS.'homepage', 'blocks');
		if(is_array($homepage_layout_order)) {
			foreach($homepage_layout_order as $blocks) { 
				$blockType = $blocks['type'];
				$blockId = $blocks['id'];
				$blockInputType = $blocks['inputType'];
				
				$blockType($blockType, $blockId,$blockInputType);
				
			}
		}
	?>
	
<?php get_template_part(THEME_LOOP."loop","end"); ?>

<div class="block">
	<div class="block-title" style="background: #8F0000;">
		<h2>Rede de blogs</h2>
	</div>
	<div class="block-content widget widget-2">
		
<div id="rede-blogs" class="widget-articles" style="width: 100%;">
<ul style="float:left;">
<li id="blogdorovai"></li>
<li id="questaodegenero"></li>
<li id="quilombo"></li>
<li id="blogdomouzar"></li>
<li id="brasilvivo"></li>
<li id="blogdascidades"></li>
<li id="marciopochmann"></li>
<li id="urbanidades"></li>
<li id="abeiradapalavra"></li>
<li id="frivoloeprofundo"></li>
<li id="jornalismowando"></li>
<li id="blogdovaldemar"></li>
<li id="tecnologialivre"></li>
<li id="blogdosindigenas"></li>
<li id="aspalavraseascoisas"></li>
<li id="conexoesglobais"></li>
<li id="blogdoleitor"></li>
<li id="blogueirasnegras"></li>
<li id="outrofobia"></li>
<li id="canaldaeducacao"></li>
</ul>
</div>
	<script>
        jQuery.getJSON('http://www.revistaforum.com.br/blogdorovai/latest-post-as-json', function(data) {
            jQuery('#blogdorovai').append('<div class="article-photo"><a href="'+data.guid+'" class="hover-effect"><img class="image-border" src="/_ad/avatars/blogdorovai.jpg" alt="'+data.post_title+'" /></a></div><div class="article-content"><h4><a href="'+data.guid+'">'+data.post_title+'</a></h4><span class="meta">Blog do Rovai</a></span></div>');
        });
		jQuery.getJSON('http://www.revistaforum.com.br/abeiradapalavra/latest-post-as-json', function(data) {
            jQuery('#abeiradapalavra').append('<div class="article-photo"><a href="'+data.guid+'" class="hover-effect"><img class="image-border" src="/_ad/avatars/abeiradapalavra.jpg" alt="'+data.post_title+'" /></a></div><div class="article-content"><h4><a href="'+data.guid+'">'+data.post_title+'</a></h4><span class="meta">A Beira da Palavra</a></span></div>');
        });
		jQuery.getJSON('http://www.revistaforum.com.br/areinvencao/latest-post-as-json', function(data) {
            jQuery('#areinvencao').append('<div class="article-photo"><a href="'+data.guid+'" class="hover-effect"><img class="image-border" src="/_ad/avatars/areinvencao.jpg" alt="'+data.post_title+'" /></a></div><div class="article-content"><h4><a href="'+data.guid+'">'+data.post_title+'</a></h4><span class="meta">A Reinvenção</a></span></div>');
        });
        jQuery.getJSON('http://www.revistaforum.com.br/questaodegenero/latest-post-as-json', function(data) {
            jQuery('#questaodegenero').append('<div class="article-photo"><a href="'+data.guid+'" class="hover-effect"><img class="image-border" src="/_ad/avatars/questaodegenero.jpg" alt="'+data.post_title+'" /></a></div><div class="article-content"><h4><a href="'+data.guid+'">'+data.post_title+'</a></h4><span class="meta">Questão de Genero</a></span></div>');
        });
		jQuery.getJSON('http://www.revistaforum.com.br/aspalavraseascoisas/latest-post-as-json', function(data) {
            jQuery('#aspalavraseascoisas').append('<div class="article-photo"><a href="'+data.guid+'" class="hover-effect"><img class="image-border" src="/_ad/avatars/aspalavraseascoisas.jpg" alt="'+data.post_title+'" /></a></div><div class="article-content"><h4><a href="'+data.guid+'">'+data.post_title+'</a></h4><span class="meta">As Palavras e as Coisas</a></span></div>');
        });
		jQuery.getJSON('http://www.revistaforum.com.br/blogdascidades/latest-post-as-json', function(data) {
            jQuery('#blogdascidades').append('<div class="article-photo"><a href="'+data.guid+'" class="hover-effect"><img class="image-border" src="/_ad/avatars/blogdascidades.jpg" alt="'+data.post_title+'" /></a></div><div class="article-content"><h4><a href="'+data.guid+'">'+data.post_title+'</a></h4><span class="meta">Blog das Cidades</a></span></div>');
        });
		jQuery.getJSON('http://www.revistaforum.com.br/blogdoleitor/latest-post-as-json', function(data) {
            jQuery('#blogdoleitor').append('<div class="article-photo"><a href="'+data.guid+'" class="hover-effect"><img class="image-border" src="/_ad/avatars/blogdoleitor.jpg" alt="'+data.post_title+'" /></a></div><div class="article-content"><h4><a href="'+data.guid+'">'+data.post_title+'</a></h4><span class="meta">Blog do Leitor</a></span></div>');
        });
		jQuery.getJSON('http://www.revistaforum.com.br/blogdomouzar/latest-post-as-json', function(data) {
            jQuery('#blogdomouzar').append('<div class="article-photo"><a href="'+data.guid+'" class="hover-effect"><img class="image-border" src="/_ad/avatars/blogdomouzar.jpg" alt="'+data.post_title+'" /></a></div><div class="article-content"><h4><a href="'+data.guid+'">'+data.post_title+'</a></h4><span class="meta">Blog do Mouzar</a></span></div>');
        });
		jQuery.getJSON('http://www.revistaforum.com.br/blogdosindigenas/latest-post-as-json', function(data) {
            jQuery('#blogdosindigenas').append('<div class="article-photo"><a href="'+data.guid+'" class="hover-effect"><img class="image-border" src="/_ad/avatars/blogdosindigenas.jpg" alt="'+data.post_title+'" /></a></div><div class="article-content"><h4><a href="'+data.guid+'">'+data.post_title+'</a></h4><span class="meta">Blog dos Indigenas</a></span></div>');
        });
		jQuery.getJSON('http://www.revistaforum.com.br/blogdovaldemar/latest-post-as-json', function(data) {
            jQuery('#blogdovaldemar').append('<div class="article-photo"><a href="'+data.guid+'" class="hover-effect"><img class="image-border" src="/_ad/avatars/blogdovaldemar.jpg" alt="'+data.post_title+'" /></a></div><div class="article-content"><h4><a href="'+data.guid+'">'+data.post_title+'</a></h4><span class="meta">Blog do Valdemar</a></span></div>');
        });
		jQuery.getJSON('http://www.revistaforum.com.br/brasilvivo/latest-post-as-json', function(data) {
            jQuery('#brasilvivo').append('<div class="article-photo"><a href="'+data.guid+'" class="hover-effect"><img class="image-border" src="/_ad/avatars/brasilvivo.jpg" alt="'+data.post_title+'" /></a></div><div class="article-content"><h4><a href="'+data.guid+'">'+data.post_title+'</a></h4><span class="meta">Brasil Vivo</a></span></div>');
        });
		jQuery.getJSON('http://www.revistaforum.com.br/conexoesglobais/latest-post-as-json', function(data) {
            jQuery('#conexoesglobais').append('<div class="article-photo"><a href="'+data.guid+'" class="hover-effect"><img class="image-border" src="/_ad/avatars/conexoesglobais.jpg" alt="'+data.post_title+'" /></a></div><div class="article-content"><h4><a href="'+data.guid+'">'+data.post_title+'</a></h4><span class="meta">Conexões Globais</a></span></div>');
        });
		jQuery.getJSON('http://www.revistaforum.com.br/frivoloeprofundo/latest-post-as-json', function(data) {
            jQuery('#frivoloeprofundo').append('<div class="article-photo"><a href="'+data.guid+'" class="hover-effect"><img class="image-border" src="/_ad/avatars/frivoloeprofundo.jpg" alt="'+data.post_title+'" /></a></div><div class="article-content"><h4><a href="'+data.guid+'">'+data.post_title+'</a></h4><span class="meta">Frivolo e Profundo</a></span></div>');
        });
		jQuery.getJSON('http://www.revistaforum.com.br/idelberavelar/latest-post-as-json', function(data) {
            jQuery('#idelberavelar').append('<div class="article-photo"><a href="'+data.guid+'" class="hover-effect"><img class="image-border" src="/_ad/avatars/idelberavelar.jpg" alt="'+data.post_title+'" /></a></div><div class="article-content"><h4><a href="'+data.guid+'">'+data.post_title+'</a></h4><span class="meta">Idelberavelar</a></span></div>');
        });
		jQuery.getJSON('http://www.revistaforum.com.br/jornalismowando/latest-post-as-json', function(data) {
            jQuery('#jornalismowando').append('<div class="article-photo"><a href="'+data.guid+'" class="hover-effect"><img class="image-border" src="/_ad/avatars/jornalismowando.jpg" alt="'+data.post_title+'" /></a></div><div class="article-content"><h4><a href="'+data.guid+'">'+data.post_title+'</a></h4><span class="meta">Jornalismo Wando</a></span></div>');
        });
		jQuery.getJSON('http://www.revistaforum.com.br/marciopochmann/latest-post-as-json', function(data) {
            jQuery('#marciopochmann').append('<div class="article-photo"><a href="'+data.guid+'" class="hover-effect"><img class="image-border" src="/_ad/avatars/marciopochmann.jpg" alt="'+data.post_title+'" /></a></div><div class="article-content"><h4><a href="'+data.guid+'">'+data.post_title+'</a></h4><span class="meta">Marcio Pochmann</a></span></div>');
        });
		jQuery.getJSON('http://www.revistaforum.com.br/quilombo/latest-post-as-json', function(data) {
            jQuery('#quilombo').append('<div class="article-photo"><a href="'+data.guid+'" class="hover-effect"><img class="image-border" src="/_ad/avatars/quilombo.jpg" alt="'+data.post_title+'" /></a></div><div class="article-content"><h4><a href="'+data.guid+'">'+data.post_title+'</a></h4><span class="meta">Quilombo</a></span></div>');
        });
		jQuery.getJSON('http://www.revistaforum.com.br/tecnologialivre/latest-post-as-json', function(data) {
            jQuery('#tecnologialivre').append('<div class="article-photo"><a href="'+data.guid+'" class="hover-effect"><img class="image-border" src="/_ad/avatars/tecnologialivre.jpg" alt="'+data.post_title+'" /></a></div><div class="article-content"><h4><a href="'+data.guid+'">'+data.post_title+'</a></h4><span class="meta">Tecnologia Livre</a></span></div>');
        });
		jQuery.getJSON('http://www.revistaforum.com.br/urbanidades/latest-post-as-json', function(data) {
            jQuery('#urbanidades').append('<div class="article-photo"><a href="'+data.guid+'" class="hover-effect"><img class="image-border" src="/_ad/avatars/urbanidades.jpg" alt="'+data.post_title+'" /></a></div><div class="article-content"><h4><a href="'+data.guid+'">'+data.post_title+'</a></h4><span class="meta">Urbanidades</a></span></div>');
        });
        jQuery.getJSON('http://www.revistaforum.com.br/blogueirasnegras/latest-post-as-json', function(data) {
            jQuery('#blogueirasnegras').append('<div class="article-photo"><a href="'+data.guid+'" class="hover-effect"><img class="image-border" src="/_ad/avatars/blogueirasnegras.jpg" alt="'+data.post_title+'" /></a></div><div class="article-content"><h4><a href="'+data.guid+'">'+data.post_title+'</a></h4><span class="meta">Blogueiras Negras</a></span></div>');
        });
        jQuery.getJSON('http://www.revistaforum.com.br/outrofobia/latest-post-as-json', function(data) {
            jQuery('#outrofobia').append('<div class="article-photo"><a href="'+data.guid+'" class="hover-effect"><img class="image-border" src="/_ad/avatars/outrofobia.jpg" alt="'+data.post_title+'" /></a></div><div class="article-content"><h4><a href="'+data.guid+'">'+data.post_title+'</a></h4><span class="meta">outrofobia</a></span></div>');
        });
        jQuery.getJSON('http://www.revistaforum.com.br/canaldaeducacao/latest-post-as-json', function(data) {
            jQuery('#canaldaeducacao').append('<div class="article-photo"><a href="'+data.guid+'" class="hover-effect"><img class="image-border" src="/_ad/avatars/canaldaeducacao.jpg" alt="'+data.post_title+'" /></a></div><div class="article-content"><h4><a href="'+data.guid+'">'+data.post_title+'</a></h4><span class="meta">canaldaeducacao</a></span></div>');
        });
    </script>
	<style>
	#rede-blogs ul li {
		width: 296px;
		float: left;
		height: 64px;
	}
	</style>
</div>

<?php get_footer();?>