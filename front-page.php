<?php
/* Template Name: front-page.php */
/* admin 160915 */
get_header(); ?>
<!-- home template -->

<div class="l-cover gryColor">
    <div class="no-gutter wow fadeInUp verticalMargin-t-0" data-wow-duration="1s" data-wow-delay="0s">
      <?php
           global $post;
           $my_posts= get_posts(array(
           'post_type' => array('topics'),
           'numberposts' => 1
           ));
           foreach($my_posts as $post):setup_postdata($post);
           ?>
        <div class="col-sm-6">
    <?php
// アイキャッチ画像を配置する
if ( has_post_thumbnail() ) :
the_post_thumbnail( 'medium img-responsive' );
else : ?>
<figure>
    <img src="<?php bloginfo('template_url'); ?>/img/img-noimage.png" alt="<?php the_title(); ?>" class="img-responsive">
    <!-- アイキャッチ画像がないときに表示させる仮画像  -->
</figure>
    <?php endif; ?>
        </div>
        <div class="col-sm-6">
            <div class="horizontalMargin-l-sm horizontalMargin-r-sm verticalPadding-t-xs verticalPadding-b-xs text-left">
                <p class="textSize-xs"><span class="label label-success">NEW</span></p>
                <h1 class="h2 NotoSansJP-Thin"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <p class=""><?php echo mb_substr(strip_tags($post-> post_content),0,70).'...'; ?><p>
                <p class="small"><i class="fa fa-clock-o horizontalPadding-r-xs horizontalPadding-l-0 text-subColor" aria-hidden="true"></i><time datetime="<?php echo get_the_date( 'Y-m-j' ) ?>"><?php the_time( get_option( 'date_format' ) ); ?>
                </time></p>
            </div><!-- /.horizontalMargin -->
        </div>
<?php endforeach; ?>
    </div><!-- /.row -->
</div><!-- /.l-cover -->




<article>

  <div class="container-fluid gryColorTone2nd">
      <div class="row verticalPadding-t-sm wow fadeInUp" data-wow-duration="2.5s" data-wow-delay="1.5s">

<div class="container">

  <p class="">トピック一覧： </p><ul>
            <?php
                 global $post;
                 $my_posts= get_posts(array(
                 'post_type' => array('topics'),
                 ));
                   $posts = get_posts('numberposts=5&offset='.$a.'&category=52');
                 foreach($my_posts as $post):setup_postdata($post);
                 ?>

  <li class=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
  <?php endforeach; ?></ul>

</div>


  </div>
  </div>


  <div class="container-fluid gryColorTone2nd">
      <div class="row verticalPadding-t-sm">


        <div class="col-sm-4 col-lg-3 verticalMargin-t-0 verticalMargin-b-sm wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
            <div class="wht">
                <div class="verticalPadding-t-xs verticalPadding-b-xs keyColor20dark">
                    <h2 class="textSize-xs NotoSansJP-Thin textColor-wht text-center"><i class="fa fa-check-square-o horizontalMargin-r-xs" aria-hidden="true"></i>開発/運用実務</h2>
                </div>
                <div class="col-xs-12 wht">
          <?php
              $args=array(
                  'tax_query' => array(
                      array(
                          'taxonomy' => 'practice-cat', //タクソノミーを指定
                          'field' => 'slug', //ターム名をスラッグで指定する
                          'terms' => array( 's-prct01','s-prct02','s-prct03','s-prct04','s-prct05' ) //表示したいタームをスラッグで指定
                      ),
                  ),
                  'post_type' => 'practice', //カスタム投稿名
                  'posts_per_page'=> 1 //表示件数（-1で全ての記事を表示）
              );
           ?>
          <?php query_posts( $args ); ?>
          <?php if(have_posts()): ?>
          <?php while(have_posts()):the_post(); ?>
            <div class="l-box horizontalPadding-l-xs horizontalPadding-r-xs">
<ul class="navListUnit">
                  <?php wp_list_categories(
                  array(
                    'title_li' => '', 'taxonomy' => 'practice-cat',
                  )
                ); ?>
</ul>
            </div>
            <?php endwhile; else: ?>

            カテゴリーが存在しません。

            <?php endif; ?>
            <?php wp_reset_query(); ?>
            </div><!-- /.col-xs-12 -->
            </div><!-- ブランクdiv -->
        </div><!-- col-12 & col-sm-6 -->



        <div class="col-sm-4 col-lg-3 verticalMargin-t-0 verticalMargin-b-sm wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="wht">
                <div class="verticalPadding-t-xs verticalPadding-b-xs verticalMargin-b-0 keyColor">
                    <h2 class="textSize-xs NotoSansJP-Thin textColor-wht text-center"><i class="fa fa-wordpress horizontalMargin-r-xs" aria-hidden="true"></i>WordPress</h2>
                </div>
                <div class="col-xs-12 wht">
          <?php
              $args=array(
                  'tax_query' => array(
                      array(
                          'taxonomy' => 'wordpress-l-cat', //タクソノミーを指定
                          'field' => 'slug', //ターム名をスラッグで指定する
                          'terms' => array( 's-wp01','s-wp02','s-wp03' ) //表示したいタームをスラッグで指定
                      ),
                  ),
                  'post_type' => 'wordpress-l', //カスタム投稿名
                  'posts_per_page'=> 1 //表示件数（-1で全ての記事を表示）
              );
           ?>
          <?php query_posts( $args ); ?>
          <?php if(have_posts()): ?>
          <?php while(have_posts()):the_post(); ?>
            <div class="l-box horizontalPadding-l-xs horizontalPadding-r-xs">
<ul class="navListUnit">
                <?php wp_list_categories(array('title_li' => '', 'taxonomy' => 'wordpress-l-cat')); ?>
</ul>
            </div>
            <?php endwhile; else: ?>

            カテゴリーが存在しません。

            <?php endif; ?>
            <?php wp_reset_query(); ?>
            </div><!-- /.col-xs-12 -->
            </div><!-- ブランクdiv -->
        </div><!-- col-12 & col-sm-6 -->




        <div class="col-sm-4 col-lg-3 verticalMargin-t-0 verticalMargin-b-sm wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
            <div class="wht">
                <div class="verticalPadding-t-xs verticalPadding-b-xs verticalMargin-b-0 keyColor20dark">
                    <h2 class="textSize-xs NotoSansJP-Thin textColor-wht text-center"><i class="fa fa-tasks horizontalMargin-r-xs" aria-hidden="true"></i>WebUIフレームワーク</h2>
                </div>
                <div class="col-xs-12 wht">
          <?php
              $args=array(
                  'tax_query' => array(
                      array(
                          'taxonomy' => 'webui-cat', //タクソノミーを指定
                          'field' => 'slug', //ターム名をスラッグで指定する
                          'terms' => array( 's-webui01','s-webui02','s-webui03','s-webui04','s-webui05' ) //表示したいタームをスラッグで指定
                      ),
                  ),
                  'post_type' => 'webui', //カスタム投稿名
                  'posts_per_page'=> 1 //表示件数（-1で全ての記事を表示）
              );
           ?>
          <?php query_posts( $args ); ?>
          <?php if(have_posts()): ?>
          <?php while(have_posts()):the_post(); ?>
            <div class="l-box horizontalPadding-l-xs horizontalPadding-r-xs">
<ul class="navListUnit">
                <?php wp_list_categories(array('title_li' => '', 'taxonomy' => 'webui-cat')); ?>
</ul>
            </div>
            <?php endwhile; else: ?>

            カテゴリーが存在しません。

            <?php endif; ?>
            <?php wp_reset_query(); ?>
            </div><!-- /.col-xs-12 -->
            </div><!-- ブランクdiv -->
        </div><!-- col-12 & col-sm-6 -->



        <div class="col-sm-4 col-lg-3 verticalMargin-t-0 verticalMargin-b-sm wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
            <div class="wht">
                <div class="verticalPadding-t-xs verticalPadding-b-xs verticalMargin-b-0 keyColor">
                    <h2 class="textSize-xs NotoSansJP-Thin textColor-wht text-center"><i class="fa fa-heartbeat horizontalMargin-r-xs" aria-hidden="true"></i>考え方と知識</h2>
                </div>
                <div class="col-xs-12 wht">
          <?php
              $args=array(
                  'tax_query' => array(
                      array(
                          'taxonomy' => 'mindset-cat', //タクソノミーを指定
                          'field' => 'slug', //ターム名をスラッグで指定する
                          'terms' => array( 's-mnd01','s-mnd02','s-mnd03','s-mnd04','s-mnd05','s-mnd06','s-mnd07','s-mnd08','s-mnd09','s-mnd10' ) //表示したいタームをスラッグで指定
                      ),
                  ),
                  'post_type' => 'mindset', //カスタム投稿名
                  'posts_per_page'=> 1 //表示件数（-1で全ての記事を表示）
              );
           ?>
          <?php query_posts( $args ); ?>
          <?php if(have_posts()): ?>
          <?php while(have_posts()):the_post(); ?>
            <div class="l-box horizontalPadding-l-xs horizontalPadding-r-xs">
<ul class="navListUnit">
                <?php wp_list_categories(array('title_li' => '', 'taxonomy' => 'mindset-cat')); ?>
</ul>
            </div>
            <?php endwhile; else: ?>

            カテゴリーが存在しません。

            <?php endif; ?>
            <?php wp_reset_query(); ?>
            </div><!-- /.col-xs-12 -->
            </div><!-- ブランクdiv -->
        </div><!-- col-12 & col-sm-6 -->



        <div class="col-xs-12 verticalMargin-t-0 verticalMargin-b-0 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
            <div class="wht">
                <div class="verticalPadding-t-xs verticalPadding-b-0 verticalMargin-b-0 keyColor20dark">
                    <h2 class="textSize-xs NotoSansJP-Thin textColor-wht text-center"><i class="fa fa-thumb-tack horizontalMargin-r-xs" aria-hidden="true"></i>ツール</h2>
                </div>


            <div class="l-box horizontalPadding-l-xs horizontalPadding-r-xs">

<div class="col-sm06 col-md-4 verticalMargin-t-0">
  <h3 class="textSize-xs NotoSansJP-Thin">コーディングに使うツール</h3>
<ul class="navListUnit">
  <?php
  global $post;
     $my_posts= get_posts(array(
       'post_type' => array('toolset'),
       'toolset-cat' => 'toolset01',
       'numberposts' => 100
       ));
  foreach($my_posts as $post):setup_postdata($post);
?>
<li class=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>
</ul>
</div>


<div class="col-sm06 col-md-4 verticalMargin-t-0">
  <h3 class="textSize-xs NotoSansJP-Thin">画面デザインに使うツール</h3>
<ul class="navListUnit">
  <?php
  global $post;
     $my_posts= get_posts(array(
       'post_type' => array('toolset'),
       'toolset-cat' => 'toolset02',
       'numberposts' => 100
       ));
  foreach($my_posts as $post):setup_postdata($post);
?>
<li class=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>
</ul>
</div>

<div class="col-sm06 col-md-4 verticalMargin-t-0">
  <h3 class="textSize-xs NotoSansJP-Thin">SEOに使うツール</h3>
<ul class="navListUnit">
  <?php
  global $post;
     $my_posts= get_posts(array(
       'post_type' => array('toolset'),
       'toolset-cat' => 'toolset03',
       'numberposts' => 100
       ));
  foreach($my_posts as $post):setup_postdata($post);
?>
<li class=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>
</ul>
</div>


            </div>


            </div><!-- ブランクdiv -->
        </div><!-- col-12 & col-sm-6 -->




      </div><!-- /.row -->
  </div><!-- /.container-liquid -->


</article>

<?php
get_footer('front-page');
