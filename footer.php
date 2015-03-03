
    <div class="row gray-bg heighten-row">
        <div class="container">
        
            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-4 social">
                    <?php if ($lang=="en") : ?>Follow us on social networks:
                    <?php else: ?>Pratite društvene mreže:
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-4 social">
                    <a href="https://www.facebook.com/dorscluc" class="social_icon"><img src="<?php bloginfo('template_url');?>/social_icons/facebook.png" /></a>
                    <a href="https://www.twitter.com/dorscluc" class="social_icon"><img src="<?php bloginfo('template_url');?>/social_icons/twitter.png" /></a>
                    <a href="https://www.flickr.com/groups/dc2014" class="social_icon"><img src="<?php bloginfo('template_url');?>/social_icons/youtube.png"/></a>
                </div>
            </div>
            
        </div>
    </div>
    
    <div class="row heighten-row web-licence">
        <div class="container">
            <div class="col-md-8">
            <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/deed.en_US"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc/4.0/80x15.png" /></a> &nbsp;This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/deed.en_US">Creative Commons Attribution-NonCommercial 4.0 International License</a></div>
            <div class="col-md-4 pwdb">POWERED BY: Free and open source software!</div>
        </div>
    </div>
    


    <?php include("subfooter-sponsors.php"); ?>
	
	
    <!-- Ahh, and then we let ourselves get tracked -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-38450003-1', 'dorscluc.org');
      ga('send', 'pageview');
    </script>


    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_url'); ?>/dist/js/bootstrap.min.js"></script>

    <?php wp_footer(); ?>


