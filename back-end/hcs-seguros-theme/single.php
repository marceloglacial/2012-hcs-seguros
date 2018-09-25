
<?php get_header(); ?>
<!-- CONTEUDO -->
<div id="Conteudo" class="noticia noticias">
	<h2 class="titulo"><a href="<?php bloginfo('url'); ?>/noticias" rel="bookmark" title="todas">Notícias</a></h2>
	<!-- POSTS -->
    <div id="Texto">
	    <?php the_post(); ?>
	
	        <h3><?php the_title(); ?></h3>
	        <h4>Em <?php the_date('d/m/Y') ?></h4>
	        <?php the_content('<p class="serif">Ler mais &raquo;</p>'); ?>
	        <!-- p class="comentarios"><a href="#">Comentários</a></p -->
	        <!-- ?php comments_template( '', true ); ? -->
	    </div>
		<!-- FIM DE POSTS -->
	</div>
	<!-- FIM DE CONTEUDO -->
	<div id="Sidebar">
	<ul>
		<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ){} ?>
	</ul>
	</div>

<hr/>
<?php get_footer(); ?>