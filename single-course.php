<?php
/* Template Name: LP用 */
?>
<!DOCTYPE html>
<html lang="ja" id="pageTop">
<head>
    <meta charset="UTF-8">
    <?php my_description(); ?>
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

  ga('create', 'UA-39499473-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body class="lp-temp01">
<div class="container gryColorTone2nd">
    <div class="row">
                <?php
                // アイキャッチ画像を配置する
                if ( has_post_thumbnail() ) :
                    the_post_thumbnail( 'medium img-responsive' );
                    else : ?>
                    <figure>
                        <img src="http://www.iaowd.com/wp-content/themes/bootpress-media/img/img-noimage.png" alt="<?php the_title(); ?>" class="img-responsive">
                        <!-- アイキャッチ画像がないときに表示させる仮画像  -->
                    </figure>
                <?php endif; ?>

            </div><!-- /.row -->
            </div><!-- /.container -->


    <article class="gryColorTone2nd">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 gryColor">
                <?php if(have_posts()): while(have_posts()): the_post(); ?>

<?php
$content = get_the_content( '続きを読む' );
print $content;
?>
                <?php endwhile; endif; ?>
                </div>
    	</div><!-- /.row -->
        </div><!-- /.container -->
    </article>
    <footer class="l-footer">
           <div class="l-footeBelow">
                 <div class="container">
                       <div class="row">
                           <div class="col-lg-12">
                               <p class="text-center textColor-gryColorTone2nd verticalPadding-t-0 verticalPadding-b-0">
                                   <span class="small"><i class="fa fa-copyright horizontalMargin-r-xs"></i><?php bloginfo('name'); ?> Allrights Reserved.<span>
                               </p>
                           </div>
                       </div>
                 </div>
           </div>
</body>
<html>
