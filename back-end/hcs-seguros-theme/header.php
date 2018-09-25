<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php bloginfo('name'); ?> <?php wp_title(); ?> - <?php bloginfo( 'description' ); ?></title>
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link href="<?php bloginfo('template_url'); ?>/css/estilos.css" rel="stylesheet" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Ubuntu-Regular" />
                <!--[if IE]>
                    <link href="css/estilos-ie.css" rel="stylesheet" type="text/css" media="screen" />
                <![endif]-->
                <!-- sliderman.js -->
                <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/sliderman.1.3.6.js"></script>
                <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/sliderman.css" />
                <!-- /sliderman.js -->
                <?php    wp_head(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40333981-1', 'hcsseguros.com.br');
  ga('send', 'pageview');

</script>

                </head>
                <body id="HCS" class="<?php echo $post->post_name; ?> <?php
                $slug = $post->post_name;
                $post_data = get_post($post->post_parent);
                $slug = $post_data->post_name;

                echo $slug;
                ?>"> 
                    <!-- SITE -->
                    <div id="Site">
                        <!-- CABECALHO -->
                        <div id="Cabecalho">
                            <h1><a href="<?php bloginfo('url'); ?>/" title="Ir para a página inicial"><?php bloginfo('name'); ?></a></h1>
                            <p><?php bloginfo( 'description' ); ?></p>
                        </div>
                        <!-- FIM DE CABECALHO -->
                        <hr/>
                        <!-- MENU -->
                        <div id="Menu">
                            <h2>Menu</h2>
                            <?php wp_page_menu('sort_column=menu_order&exclude=47'); ?>                           
                        </div>
                        <!-- FIM DE MENU -->
                        <hr/>