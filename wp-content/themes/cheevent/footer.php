<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <p class="col-sm-2 col-xs-3"> ©Cheevent 2015   </p>
                    <a href="mailto:hello@cheevent.com" class="col-sm-2 col-xs-3">hello@cheevent.com</a>
                    <div class="col-sm-8 col-xs-6 socials">
                        <a href="https://www.facebook.com/Cheevent-928050880577168/?fref=ts"><img src="<?php bloginfo('template_directory'); ?>/img/facebook.png" alt="Suivez Cheevent sur Facebook"></a>
                        <a href="https://twitter.com/Cheevent"><img src="<?php bloginfo('template_directory'); ?>/img/twitter.png" alt="Suivez Cheevent sur Twitter"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<?php wp_footer(); ?>
<script type="text/javascript">
    $(document).ready(function(){

        $('#header').parallax({speed : -0.4});

        $('a[href^="#"]').on('click',function (e) {
            e.preventDefault();

            var target = this.hash;
            var $target = $(target);

            $('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 900, 'swing', function () {
                window.location.hash = target;
            });
        });

        var screenHeight = $(window).height();
        $('header').css('height',screenHeight);

        $(window).on('resize',function(){
            var screenHeight = $(window).height();
            $('header').css('height',screenHeight);
        });


    });
</script>
</body>
</html>
