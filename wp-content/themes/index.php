<?php get_header(); ?>
    <main>
        <div class="container-fluid">
            <div class="row" id="presentation">
                <div class="container">
                    <h2>C'est compliqué de coordonner ses invités...</h2>
                    <div id="app_home" class="col-sm-4 app_hover">
                        <div class="app_text_hover">
                            <img src="<?php bloginfo('template_directory'); ?>/img/anticipez.png" alt="Anticipez vos sorties avec une vue sur tous vos évènements">
                            <p>Gardez un oeil sur tout vos événements pour anticiper vos prochaines sorties</p>

                        </div>
                        <!--<img src="<?php /*bloginfo('template_directory'); */?>/img/iphone.png" alt="Application Cheevent organisation event on smartphone">-->
                    </div>
                    <div id="app_event" class="col-sm-4 app_hover">
                        <div class="app_text_hover">
                            <img src="<?php bloginfo('template_directory'); ?>/img/adaptez.png" alt="Suivre vos amis et leurs produits">
                            <p>Suivez facilement ce qu’apporte vos amis et adaptez vous en conséquences pour ne manquer de rien</p>
                        </div>
                        <!--<p>Vous n’avez jamais remarqué qu’il est assez difficile de se coordonner sur les éléments à apporter ? Pas de vin pour accompagner le repas, du saumon en double, … les exemples sont nombreux. Cheevent s’adresse aux personnes qui souhaitent éviter ce genre de problème et organiser de la meilleur façon leurs événements. Grâce à notre application nous allons vous permettre de créer un évènement, d’ajouter des invités, de créer des listes d’éléments et de laisser le choix aux invités de choisir ce qu’ils veulent amener.</p>-->

                    </div>
                    <div id="app_create" class="col-sm-4 app_hover">
                        <div class="app_text_hover">
                            <img src="<?php bloginfo('template_directory'); ?>/img/facebook_logo.png" alt="Compte Facebook evenements">
                            <p>Connectez Cheevent à votre compte facebook, pour retrouver tout vos événements facilement ainsi que toutes ses informations</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="fonctionnalites">
                <div class="container">
                    <h2>Pourquoi utiliser Cheevent</h2>
                    <div class="col-sm-4 picto">
                        <img src="<?php bloginfo('template_directory'); ?>/img/euro.png" alt="Cheevent liste ce dont vous avez besoin">
                        <h3>Totalement gratuite</h3>
                        <p>Car c’est simple d’utilisation, compatible avec tous les smartphones récents et en plus c’est  gratuit !</p>
                    </div>
                    <div class="col-sm-4 picto">
                        <img src="<?php bloginfo('template_directory'); ?>/img/liste.png" alt="Cheevent liste ce dont vous avez besoin">
                        <h3>Listes partagées</h3>
                        <p>Car les listes permettent de savoir en avance ce qu’il va manquer lors de vos événements et de prendre les dispositions pour qu'ils se déroulent dans les meilleures conditions</p>
                    </div>
                    <div class="col-sm-4 picto">
                        <img src="<?php bloginfo('template_directory'); ?>/img/fconnect.png" alt="Cheevent liste ce dont vous avez besoin">
                        <h3>Facebook Connect !</h3>
                        <p>Retrouvez tout vos évènements Facebook sur Cheevent et profitez de toutes les informations facilement !</p>
                    </div>
                </div>
            </div>
            <div class="row" id="plateformes">
	            <div class="container">
		            <h2>Bientôt disponible sur</h2>
		            <div class="col-lg-3 col-lg-offset-3 col-md-3 col-md-offset-3 col-sm-3 col-sm-offset-3 col-xs-offset-1 col-xs-5">
			            <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/apple.png" alt="App Store Apple">
		            </div>
		            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5">
			            <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/google.png" alt="App Store Android">
		            </div>
	            </div>
            </div>
            <div class="row" id="follow">
                <div class="container">
                    <div class="row">
                        <h2>Nous suivre</h2>
                        <div class="widget-twit">
                            <a class="twitter-timeline" href="https://twitter.com/CheeventSocial" data-widget-id="672493074317189121">Tweets de @CheeventSocial</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>