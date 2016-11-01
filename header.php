<?php
/**
 * BootPress header.php
 * update 160717
 */

?>
<!DOCTYPE html>
<html lang="ja" id="pageTop">
<head>
    <meta charset="UTF-8">
    <title>レッスンサイト</title>
    <meta name="format-detection" content="telephone=no,address=no,email=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="icon" href="<?php bloginfo('url'); ?>/favicon.ico">
    <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/icon.png">
    <link rel="stylesheet" href="http://cdn.iaowd.com/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://cdn.iaowd.com/css/animate.css">
    <link rel="stylesheet" href="http://cdn.iaowd.com/css/bp.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-79387815-1', 'auto');
      ga('send', 'pageview');

    </script>
</head>
<body class="page">
<header id="header" class="navbar navbar-default navbar-fixed-top l-header" role="banner">
  <div class="container-liquid page-scroll">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="l-vi page-scroll">
            <a href="<?php bloginfo('url'); ?>" class="vi-a">
                <img src="<?php bloginfo('template_url'); ?>/img/vi.svg" class="viUnit" height="auto" alt="<?php bloginfo('name'); ?>">
            </a>
      </div>

      <nav class="navbar-collapse collapse l-globalNav">
            <div class="l-globalNav-main">
                <?php wp_nav_menu( array( 'theme_location' => 'header-navi', 'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>' ) ); ?>
            </div>

            <div class="l-globalNav-sub">

           </div>
    </nav><!-- /.navbar-collapse -->

  </div><!-- /.container -->
</header>
