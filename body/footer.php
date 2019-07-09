<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.3'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="2099524980342350"
  theme_color="#20cef5"
  logged_in_greeting="Hola! Necesitas ayuda?"
  logged_out_greeting="Hola! Necesitas ayuda?">
</div>
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Hibrido</strong>. All Rights Reserved
          </div>
          <div class="credits">

            Designed by <a href="https://hibridosv.com/">Hibrido</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Inicio</a>
            <a href="#about" class="scrollto">Nosotros</a>
            <a >Privacidad</a>
            <a >Terminos de uso</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- #footer -->