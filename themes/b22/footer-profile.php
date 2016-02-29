<footer>

  <div class="container">
    <div class="row">
      <div class="col-xs-8">
        <div id="footer_links">
          <nav>
            <ul>
              <li><a href="http://www.b22.it">B22</a></li>
              <li><a href="http://www.facebook.com/www.b22.it">Facebook</a></li>
              <li><a href="http://www.linkedin.com/company/b22">LinkedIn</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="col-xs-4">
        <div class="language">
          <div id="lang_sel_list" class="lang_sel_list_horizontal">
            <?php do_action('wpml_add_language_selector'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>

</footer>

</div> <!-- chiudo #wrapper -->

<?php wp_footer(); ?>

<!-- here comes the javascript -->

<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src='<?php bloginfo('template_directory') ?>/_/js/jquery-1.5.1.min.js'>\x3C/script>")</script>
<script src="<?php bloginfo('template_directory') ?>/_/js/bootstrap.min.js"></script>


<script src="<?php bloginfo('template_directory') ?>/_/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/_/js/isotope.pkgd.min.js"></script>

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory') ?>/_/js/functions.js"></script>

<!-- Asynchronous google analytics; this is the official snippet.
	 Replace UA-XXXXXX-XX with your site's ID and uncomment to enable.

<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
-->

</body>
</html>