<?php get_header(); ?>
    <main>
        <div class="container-fluid">
            <div class="row" id="presentation">
                <div class="container">
                    <h2>Cheevent, comment ça marche ? </h2>
                    <div id="app_home" class="col-sm-4 app_hover">
                        <div class="app_text_hover">
                            <img src="<?php bloginfo('template_directory'); ?>/img/anticipez.png" alt="Anticipez vos sorties avec une vue sur tous vos évènements">
                            <p>Cheevent centralise tous vos évènements à venir, les affiche sur la map et liste les produits qu'il reste à apporter</p>

                        </div>
                        <!--<img src="<?php /*bloginfo('template_directory'); */?>/img/iphone.png" alt="Application Cheevent organisation event on smartphone">-->
                    </div>
                    <div id="app_create" class="col-sm-4 app_hover">
                        <div class="app_text_hover">
                            <img src="<?php bloginfo('template_directory'); ?>/img/facebook_logo.png" alt="Compte Facebook evenements">
                            <p>Créez facilement des évènements depuis l'application ou importez les directement depuis Facebook</p>
                        </div>
                    </div>
                    <div id="app_event" class="col-sm-4 app_hover">
                        <div class="app_text_hover">
                            <img src="<?php bloginfo('template_directory'); ?>/img/adaptez.png" alt="Suivre vos amis et leurs produits">
                            <p>Créez et gérez les listes des produits à apporter pour vos évenements et laissez vos amis choisir ce qu'ils veulent amener</p>
                        </div>
                        <!--<p>Vous n’avez jamais remarqué qu’il est assez difficile de se coordonner sur les éléments à apporter ? Pas de vin pour accompagner le repas, du saumon en double, … les exemples sont nombreux. Cheevent s’adresse aux personnes qui souhaitent éviter ce genre de problème et organiser de la meilleur façon leurs événements. Grâce à notre application nous allons vous permettre de créer un évènement, d’ajouter des invités, de créer des listes d’éléments et de laisser le choix aux invités de choisir ce qu’ils veulent amener.</p>-->

                    </div>
                </div>
            </div>
            <div class="row" id="fonctionnalites">
                <div class="container">
                    <h2>Pourquoi utiliser Cheevent</h2>
                    <div class="row picto_container">
                        <div class="col-sm-4 picto">
                            <img src="<?php bloginfo('template_directory'); ?>/img/euro.png" alt="Cheevent liste ce dont vous avez besoin">
                            <h3>Partagez vos listes</h3>
                            <p>Listez les produits à apporter, partagez les dépenses entre vos convives, le tout gratuitement</p>
                        </div>
                        <div class="col-sm-4 picto">
                            <img src="<?php bloginfo('template_directory'); ?>/img/liste.png" alt="Cheevent liste ce dont vous avez besoin">
                            <h3>Organisez facilement vos soirées</h3>
                            <p>Tous vos évènements réunis dans Cheevent, avec une map, des produits, et de nouvelles fonctions super cools bientôt !</p>
                        </div>
                        <div class="col-sm-4 picto">
                            <img src="<?php bloginfo('template_directory'); ?>/img/fconnect.png" alt="Cheevent liste ce dont vous avez besoin">
                            <h3>Facebook Connect !</h3>
                            <p>Retrouvez tout vos évènements Facebook sur Cheevent et profitez de toutes les informations facilement !</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="plateformes">
	            <div class="container">
                    <h2>Bientôt disponible sur</h2>
                    <div class="row plateformes_img">

                        <div class="col-lg-3 col-lg-offset-3 col-md-3 col-md-offset-3 col-sm-3 col-sm-offset-3 col-xs-offset-1 col-xs-5">
                            <img class="" src="<?php bloginfo('template_directory'); ?>/img/apple.png" alt="App Store Apple">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5">
                            <img class="" src="<?php bloginfo('template_directory'); ?>/img/google.png" alt="App Store Android">
                        </div>
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