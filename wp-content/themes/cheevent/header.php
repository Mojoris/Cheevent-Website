<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!--><html <?php language_attributes(); ?>><!--<![endif]-->

<head>
	
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <title>Cheevent - L'organisation réinventée</title>
    
    <!-- Dublin Core -->
		<meta name="DC.title" 			content="Cheevent - L'organisation réinventée"/>
		<meta name="DC.creator" 		content="Cheevent"/>
		<meta name="DC.subject" 		content="Cheevent, organisation événementiel, application, évènements, qui ramène quoi, qui prend quoi, liste, partager, picnic, pique-nique, soirée, barbecue, repas, diner, crémaillère, sortie"/>
		<meta name="DC.description" 	content="Avec Cheevent, prenez le contrôle de vos évènements et associer vos invités pour élaborer «la wish list parfaite » pour la raclette party"/>
		<meta name="DC.publisher" 		content="Cheevent"/>
		<meta name="DC.format" 			content="website"/>
		<meta name="DC.identifier" 		content="www.cheevent.com"/>
		<meta name="DC.language" 		content="fr-FR"/>
		<meta name="DC.coverage" 		content="World"/>
		<meta name="DC.rights" 			content="&copy; Cheevent"/>
	<!-- END Dublin Core -->

	<!-- Referencement -->
		<meta name="description" 		content="Avec Cheevent, prenez le contrôle de vos évènements et associer vos invités pour élaborer «la wish list parfaite»"/>
		<meta name="keywords" 			content="Cheevent, organisation événementiel, application, évènements, qui ramène quoi, qui prend quoi, liste, partager, picnic, pique-nique, soirée, barbecue, repas, diner, crémaillère, sortie"/>
		<meta name="author" 			content="Cheevent"/>
		<meta name="robots" 			content="index"/> 
		<meta name="Indentifier-URL" 	content="www.cheevent.com"/>
	<!-- END Référencement -->
	
	<!-- Open Graph Facebook-->
		<meta property="fb:admins" 		content=""/>
		<meta property="og:title" 		content="Cheevent - L'organisation réinventée"/>
		<meta property="og:type" 		content="website"/>
		<meta property="og:url" 		content="http://www.cheevent.com/"/>
		<meta property="og:image" 		content="http://www.cheevent.com/wp-content/themes/cheevent/img/food_rs.png"/>
		<meta property="og:site_name" 	content="Cheevent"/>
		<meta property="og:description" content="Avec Cheevent, prenez le contrôle de vos évènements et associer vos invités pour élaborer «la wish list parfaite»"/>
	<!-- END Open Graph Facebook-->
	
	
	<!-- Open Graph Twitter-->
		<meta name="twitter:card"       content="summary_large_image"/>
		<meta name="twitter:domain"     content="Cheevent"/>
		<meta name="twitter:creator"    content="@Cheevent"/>
		<meta name="twitter:site"       content="@Cheevent"/>
		<meta name="twitter:image:src"  content="http://www.cheevent.com/wp-content/themes/cheevent/img/food_rs.png"/>
	<!-- END Open Graph Twitter-->

    <!-- Styles -->
    <link href="<?php bloginfo( 'template_directory' ); ?>/library/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,900,100' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.2/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_directory' ); ?>/library/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/img/favicon.png" />

    <!-- Scripts -->
    	<!-- Facebook Pixel Code -->
		<script>
			!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
				n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
				n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
				t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
				document,'script','https://connect.facebook.net/en_US/fbevents.js');

				fbq('init', '608208995996421');
				fbq('track', 'CompleteRegistration');
			</script>
			<script><img height="1" width="1" style="display:none"
				src="https://www.facebook.com/tr?id=608208995996421&ev=PageView&noscript=1"
		/></script>
	<!-- End Facebook Pixel Code -->
	
    <!--<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>-->
    <script type='text/javascript' src="<?php bloginfo( 'template_directory' ); ?>/library/js/jquery-1.11.2.min.js"></script>
    <script type='text/javascript' src="<?php bloginfo( 'template_directory' ); ?>/library/js/bootstrap.min.js"></script>

    <script type='text/javascript' src="<?php bloginfo( 'template_directory' ); ?>/library/js/jquery.parralax.js"></script>
    <script type='text/javascript' src="<?php bloginfo( 'template_directory' ); ?>/library/js/sentences.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="container-fluid">
    <div class="row">
        <header id="header">
            <nav class="navbar" role="navigation">
               <!-- --><?php
/*                wp_nav_menu(array(
                    'menu' => 'Menu Principal',
                    'depth' => 2,
                    'container' => false,
                    'menu_class' => 'nav navbar-nav',
                    'walker' => new wp_bootstrap_navwalker()
                ));
                */?>
               <div class="col-sm-4 col-xs-12"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo_white.png" alt="Logo Cheevent organisation réinventée"></a></div>
                <div class="col-sm-8 hidden-xs">
                    <ul class="menu-container">
                        <li><a href="#header">Accueil</a></li>
                        <li><a href="#presentation">Présentation</a></li>
                        <li><a href="#fonctionnalites">Fonctionnalités</a></li>
                        <li><a href="#follow">Nous Suivre</a></li>
                    </ul>
                </div>
            </nav>
            <div class="header-home">
                <!--<p>Il est toujours compliqué de donner des ordres à ses invités...</p>-->
                <img id="app_logo" class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/applogo.png" alt="Cheevent organisation liste soirée">
                <h1>Un problème pour organiser vos soirées ?</h1>
<!--                <p>La Wish List de tous vos évènements, l'organisation réinventée</p>-->
                <section class="rw-wrapper">
                    <p class="rw-sentence">
                        <span>Cheevent est là pour</span>
                        <div class="rw-words rw-words-1">
                            <span>organiser vos évènements.</span>
                            <span>inviter facilement vos amis.</span>
                            <span>lister les produits à apporter.</span>
                            <span>importer vos events Facebook.</span>
                            <span>déléguer les différents frais.</span>
                        </div>
                    </p>
                </section>
                <div id="header-newsletter" class=" col-xs-12 col-md-5 col-lg-4">
                    <!--<form action="#" method="post">
                        <input type="email" name="email" placeholder="Indiquez votre e-mail">
                        <input type="submit" value="Inscription">
                    </form>-->
                    <!--<p>Envie de passer de meilleures soirées ?</p>-->
                    <button id="callto" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                        S'inscrire Gratuitement <i style="padding-left: 10px;" class="fa fa-thumbs-o-up"></i>
                    </button>
                    <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Inscris toi pour recevoir les dernières news ;)</h4>
                                </div>
                                <div class="modal-body">
                                    <?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                </div>
                <a href="#presentation" class="howwork"><i class="fa fa-chevron-down"></i></a>
            </div>
        </header>

