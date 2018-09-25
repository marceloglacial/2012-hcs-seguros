<?php get_header(); ?>

<!-- CONTEUDO -->
            <div id="Conteudo" class="home">
                <!-- DESTAQUES -->
                <div id="Destaques">
                    <h2>Destaques</h2>
					<!-- SLIDER -->
					<div id="slider_container_2">
                        <div id="SliderName_2" class="SliderName_2">
                            <map name="img1map">
                                <area href="#img1map-area1" shape="rect" coords="100,100,200,200" />
                                <area href="#img1map-area2" shape="rect" coords="300,100,400,200" />
                            </map>
						<?php
	    					query_posts('posts_per_page=5');
	    						while (have_posts()) {
	        				the_post(); ?>
							<?php the_post_thumbnail() ?>
                            <div class="SliderName_2Description"><h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3></div>
				    	<?php } ?>
                        </div>
                        <div id="SliderNameNavigation_2"></div>
                        <script type="text/javascript">
                            effectsDemo2 = 'rain';
                            var demoSlider_2 = Sliderman.slider({container: 'SliderName_2', width: 960, height: 430, effects: effectsDemo2,
                                display: {
                                    autoplay: 3000,
                                    loading: {background: '#000000', opacity: 0.5, image: '<?php bloginfo('template_url'); ?>/img/loading.gif'},
                                    buttons: {hide: false, opacity: 1, prev: {className: 'SliderNamePrev_2', label: ''}, next: {className: 'SliderNameNext_2', label: ''}},
                                    description: {hide: false, background: 'none', opacity: 0, height: 430, position: 'top'},
                                    navigation: {container: 'SliderNameNavigation_2', label: '<img src="<?php bloginfo('template_url'); ?>/img/clear.gif" />'}
                                }
                            });
                        </script>
                    </div>

					<!-- /SLIDER -->

                </div>
                <!-- /DESTAQUES -->
                <hr/>
                <!-- SERVICOS -->
                <div id="Servicos">
                    <h2>Serviços</h2>
                    <?php
					  $home_page_post_id = 32; 
					  $home_page_post = get_post( $home_page_post_id, ARRAY_A );
					  $content_home = $home_page_post['post_content'];
					  echo $content_home;
					?>
                </div>
                <!-- FIM DE SERVICOS -->
                <hr/>
                <!-- PARCEIROS -->
                <div id="Parceiros">
                    <h2><a href="#">Parcerias</a></h2>
                    <?php
					  $home_page_post_id = 47; 
					  $home_page_post = get_post( $home_page_post_id, ARRAY_A );
					  $content_home = $home_page_post['post_content'];
					  echo $content_home;
					?>
                </div>
                <!-- /PARCEIROS -->
            </div>
            <!-- FIM DE CONTEUDO -->
<hr/>
<?php get_footer(); ?>