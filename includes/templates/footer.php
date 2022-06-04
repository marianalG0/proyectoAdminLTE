<footer class="site-footer">
    <div class="contenedor clearfix">
        <div class="footer-informacion">
            <h3>Sobre<span>gdlwebcamp</span></h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae harum, repellat atque iste nostrum
                sapiente.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae harum, repellat atque
                iste
                nostrum sapiente.</p>
        </div>
        <div class="ultimos-tweets">
            <h3>Últimos<span>tweets</span></h3>
            <ul>
                <li>Lorem ipsum dolor sit amet. #Pellentesque nec @justo non est elefiend pulvigar</li>
                <li>Lorem ipsum dolor sit amet. #Pellentesque nec @justo non est elefiend pulvigar</li>
                <li>Lorem ipsum dolor sit amet. #Pellentesque nec @justo non est elefiend pulvigar</li>

            </ul>
        </div>
        <div class="menu">
            <h3>Redes<span>Sociales</span></h3>
            <nav class="redes-sociales">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </nav>
        </div>
    </div>

    <p class="copryright">
        Todos los Derechos Reservados GDLWEBCAMP 2016.
    </p>

    <!-- Begin Mailchimp Signup Form -->
    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7_dtp.css" rel="stylesheet" type="text/css">
    <style type="text/css">
    #mc_embed_signup {
        background: #fff;
        clear: left;
        font: 14px Helvetica, Arial, sans-serif;
        width: 600px;
    }

    /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
    </style>

  <div style="display:none;">
        <div id="mc_embed_signup">
            <form
                action="https://gmail.us10.list-manage.com/subscribe/post?u=d3a3350c0fde18ad7b53f8cec&amp;id=b288a553b4"
                method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"
                target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                    <h2>Suscribete al Newsletter y no te pierdas nada de este evento</h2>
                    <div class="indicates-required"><span class="asterisk">*</span>Es obligatorio</div>
                    <div class="mc-field-group">
                        <label for="mce-EMAIL">Correo Electrónico<span class="asterisk">*</span>
                        </label>
                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                    </div>
                    <div id="mce-responses" class="clear foot">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                            name="b_d3a3350c0fde18ad7b53f8cec_b288a553b4" tabindex="-1" value=""></div>
                    <div class="optionalParent">
                        <div class="clear foot">
                            <input type="submit" value="Subscribirse" name="subscribe" id="mc-embedded-subscribe"
                                class="button">
                            <p class="brandingLogo"><a href="http://eepurl.com/h3kHK1"
                                    title="Mailchimp - email marketing made easy and fun"><img
                                        src="https://eep.io/mc-cdn-images/template_images/branding_logo_text_dark_dtp.svg"></a>
                            </p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
        <script type='text/javascript'>
        (function($) {
            window.fnames = new Array();
            window.ftypes = new Array();
            fnames[0] = 'EMAIL';
            ftypes[0] = 'email';
            fnames[1] = 'FNAME';
            ftypes[1] = 'text';
            fnames[2] = 'LNAME';
            ftypes[2] = 'text';
            fnames[3] = 'ADDRESS';
            ftypes[3] = 'address';
            fnames[4] = 'PHONE';
            ftypes[4] = 'phone';
        }(jQuery));
        var $mcj = jQuery.noConflict(true);
        </script>
        <!--End mc_embed_signup-->
    </div>
</footer>

<script src="js/vendor/modernizr-3.8.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
window.jQuery ||
    document.write(
        '<script src="js/vendor/jquery-3.4.1.min.js"><\/script>'
    );
</script>
<script src="js/plugins.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.lettering.js"></script>

<script src="js/jquery.colorbox-min.js"></script> <!-- parte agregada por ASCC video2folder70 -->

<?php
  $archivo = basename($_SERVER['PHP_SELF']);
  $pagina = str_replace(".php", "", $archivo);
  if($pagina == 'invitados' || $pagina == 'index'){ 

    echo '<script src="js/jquery.colorbox-min.js"></script>'; 
    echo '<script src="js/jquery.waypoints.min.js"></script>'; 
   }else if($pagina == 'conferencia') {
    echo '<script src="js/lightbox.js"></script>';
  }
  ?>
<script src="js/mapa.js"></script>
<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
    integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
    crossorigin=""></script>
<script src="js/main.js"></script>



<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
window.ga = function() {
    ga.q.push(arguments);
};
ga.q = [];
ga.l = +new Date();
ga("create", "UA-XXXXX-Y", "auto");
ga("set", "transport", "beacon");
ga("send", "pageview");
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>



</body>

</html>