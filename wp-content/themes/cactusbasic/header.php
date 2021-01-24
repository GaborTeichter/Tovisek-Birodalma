<!doctype html>
<html lang="hu-HU">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Üdvözlünk a Tövisek Birodalmában! Cégünk tövisek nevelésével és eladásával foglalkozik. Category: Business">
        <meta name="keywords" content="Business, Small Business, Startup, Business Template, Template, Responsive, Mobile Friendly, Cactus, Kaktusz">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow" />
        <meta name="googlebot" content="index, follow" />

        <!-- Google Analytics -->
        <!--<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
          
          ga('create', 'UA-XXXXX-Y', 'auto');
          ga('send', 'pageview');

          if (document.location.pathname.indexOf('user/' + userID) > -1) {
            var page = document.location.pathname.replace('user/' + userID, 'user');

            // Sets the page value on the tracker.
            ga('set', 'page', page);

            // Sending the pageview no longer requires passing the page
            // value since it's now stored on the tracker object.
            ga('send', 'pageview');
          }
        </script>-->
        <!-- End Google Analytics -->

        <!-- Facebook Pixel Code -->
        <!--<script>
          !function(f,b,e,v,n,t,s)
          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
          n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
          fbq('init', '{your-pixel-id-goes-here}');
          fbq('track', 'PageView');
        </script>
        <noscript>
          <img height="1" width="1" style="display:none" 
              src="https://www.facebook.com/tr?id={your-pixel-id-goes-here}&ev=PageView&noscript=1"/>
        </noscript>-->
        <!-- End Facebook Pixel Code -->

        <!-- Hotjar Tracking Code -->
        <!--<script>
          (function(h,o,t,j,a,r){
              h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
              h._hjSettings={hjid:1,hjsv:5};
              a=o.getElementsByTagName('head')[0];
              r=o.createElement('script');r.async=1;
              r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
              a.appendChild(r);
          })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
        </script>-->
        <!-- End Hotjar Tracking Code -->

        <?php
        wp_head();
        ?>

    </head>
    <body>
        <!-- Header section -->
        <header>
            <!--Navigation bar -->
            <div class="topnav" id="topNavbar">
                <a class="navbar-brand" href="index.php">
                    Tövisek Birodalma
                </a>

                <?php 
                    /* wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'theme_location' => 'Desktop Primary',
                            'container' => 'div',
                            'container_class' => '',
                            'container_id' => '',
                            'items' => '<a id="" class="nav-link">%3$s</a>'
                        )
                    ); */ 
                ?> 
                <a href="index.php">Főoldal</a>
                <a href="#rolunk">Rólunk</a>
                <a href="#kapcsolatok">Kapcsolatok</a>
                <a href="#termekek">Termékek</a>
                <a href="gyik.php">GYIK</a>
                <a href="blog.php">Blog</a>
                <a href="javascript:void(0);" class="icon" onclick="hamburger()">
                    <div class="animated-icon"><span></span><span></span><span></span><span></span></div>
                </a>
            </div>
            <!-- Navigation bar end -->

            <!--<div class="welcome-header">-->
                <div class="jumbotron welcome-header">
                    <h1 class="display-4 masthead-heading text-uppercase">Tövisek Birodalma</h1>
                    <p class="lead masthead-subheading">Üdvözöllek az oldalamon. Nézd meg a termékeinket vagy kövess minket facebookon!</p>
                    <a class="btn btn-success btn-xl text-uppercase js-scroll-trigger" href="#termekek">Vásárlás</a>
				    <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="https://www.facebook.com/T%C3%B6visek-Birodalma-108672437567451" target="_blank">Facebook</a>
                </div>
            <!--</div>-->
        </header>
        <!-- Header section end -->