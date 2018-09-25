<?php
/*
  Template Name: Notícias
 */
?>
<?php get_header(); ?>
<!-- CONTEUDO -->
<div id="Conteudo" class="noticias">
	<h2 id="post-<?php the_ID('1'); ?>" class="titulo"><?php the_title(); ?></h2>
    <div id="Texto">
	<div id="Noticias">
	<h3>Mais Recentes</h3>
			<ul>	<?php
	    query_posts('');
	    while (have_posts()) {
	        the_post(); ?>
	        <li><a href="<?php the_permalink() ?>" rel="bookmark" title="leia mais"><em> <?php the_time('d/m/Y'); ?> às  <?php the_time('G:i'); ?></em> <?php the_title(); ?></a></li>	
	    <?php 
	    } ?></ul>

    </div> 
	<!-- FIM DE NOTICIAS -->
	</div>
	<!-- FIM DE TEXTO -->
	</div>
	<!-- FIM DE CONTEUDO -->
	<!-- div id="Sidebar">
	<ul>
		<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ){} ?>
	</ul>
	</div -->

<hr/>
<?php get_footer(); ?>