<?php get_template_part('templates/head'); ?>
<body class="body-bottom">

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar') && is_category(podcast) ) {
      get_template_part('templates/header-podcast');
    } else if (current_theme_supports('bootstrap-top-navbar') && !is_page(podcast) ) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>

  <div class="supreme-container">

  <div class="wrap container" role="document">
    <div class="content row">
      <main class="main <?php echo roots_main_class(); ?>" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

    </div> <!-- SUPREME -->

<!-- pop-up modal -->
<script type="text/javascript"
        src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.3.1/jquery.cookie.min.js"></script>
  <script type="text/javascript">
    function showPopup() {
      $('#myModal').modal('show');
    }

    function timeOut() {
      if ($.cookie('foreverjobless') !== '1') {
        setTimeout(function() {
          showPopup();
          jQuery.cookie('foreverjobless', '1', { expires: 7 });
        }, 36);
      }
    }

    $(document).ready(function () {
      timeOut();
      stickyElement();
    });

  </script>

   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
        	<center><h3>We haven't launched yet!<br>Be the first to know when we launch.</h3></center>
          	<div class="modal-body">
          	<center><a href="//fast.wistia.net/embed/iframe/6y2igsba97?popover=true" class="wistia-popover[height=360,playerColor=ebe9e8,width=640]"><img src="https://embed-ssl.wistia.com/deliveries/f1bd9016d491b25c2af006aefcd2023bcf92e9ce.jpg?image_play_button=true&image_play_button_color=ebe9e8e0&image_crop_resized=300x168" alt="" /></a>
<script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/popover-v1.js"></script>
<script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/popover-v1.js"></script></center>
    			
	      
					      <!-- Mailchimp -->
							<center><form class="form-inline" id="before_header" action="//smartk.us8.list-manage.com/subscribe/post?u=99a776394eb3b3549e7c5e53c&amp;id=6a60137cbc" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
								<input type="email" value="" name="EMAIL" class="form-control email" id="mce-EMAIL" placeholder="Email address.." required>
							<button id="header-optin-click" name="submit" onClick="ga('send', 'event', 'optin', 'subscribe', 'header optin');" class="submit btn btn-primary btn-lg" type="submit" value="Submit" tabindex="501">Subscribe</button>
							
							</form></center> <!-- /Mailchimp -->
	      </div><!-- /optin -->
		  <br><br>
          </div>
        </div>
      </div>
    </div>
<!-- /pop-up modal -->

</body>
</html>
