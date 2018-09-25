<?php get_header(); ?>
<!-- CONTEUDO -->
<div id="Conteudo">

	<!-- POST -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2 id="post-<?php the_ID(); ?>" class="titulo"><?php the_title(); ?></h2>
<div id="Texto">
			<?php the_content('<p class="serif">Ler mais &raquo;</p>'); ?>
			</div>
        </div>
	<!-- FIM DE POST -->
	
    <?php endwhile;
endif; ?>
<!-- FIM DE CONTEUDO -->
<hr/>
<?php get_footer(); ?>