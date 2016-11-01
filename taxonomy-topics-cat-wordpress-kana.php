<?php
/* Template Name: taxonomy-topics-cat-wordpress-kana.php */
get_header(); ?>
<!-- ◆ taxonomy-topics-cat-wordpress-kana template ◆ -->
<div class="l-cover verticalPadding-t-xs verticalPadding-b-sm">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="h2 text-center NotoSansJP-Thin ">ワードプレス</h1>
            </div>
        </div><!-- /.row -->
    </div>
</div><!-- /.l-cover -->

<article class="gryColorTone">
    <div class="container">
        <div class="row verticalPadding-t-sm">

            <div class="col-sm-9">

                <?php if(have_posts()): while(have_posts()):
                the_post(); ?>
                <div class="col-xs-12 col-sm-6 verticalPadding-b-xs wow fadeInUp" data-wow-duration="2.5s" data-wow-delay="0s">
                    <div class="row no-gutter">
                    <!--section-->
                        <div class="col-xs-3 col-sm-2">
                    <?php
                    // アイキャッチ画像を配置する
                            if ( has_post_thumbnail() ) :
                            the_post_thumbnail( 'thumbnail', array( 'class' => 'img-responsive' ) );
                            else : ?>
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/img-noimage-thumbnail.png" alt="<?php the_title(); ?>" class="img-responsive">
                                    <!-- アイキャッチ画像がないときに表示させる仮画像  -->
                                </figure>
                    <?php endif; ?>
                        </div>
                        <div class="col-xs-9 col-sm-10">
                    <!--div class="l-box horizontalPadding-l-xs horizontalPadding-r-xs"-->
                    <?php if( is_single() ): ?>

                    <?php else: ?>
                       <h2 class="h3 NotoSansJP-Thin verticalMargin-t-0 verticalMargin-b-0 horizontalMargin-l-xs">
                         <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                    <?php endif; ?>
                  </div><!-- 9-->
                    <!--/section-->
                  </div><!-- row -->
                  </div><!-- col-12 -->


                    <?php endwhile; endif; ?>






                                      </div><!--- /.9 -->
                                      <div class="col-sm-3">
                                        <h3 class="h2 verticalMargin-t-0 headeigDec-Underline">カテゴリー</h3>
                                        <ul class="navListUnit">
                                            <li class="">
                                              <a href="http://www.iaowd.com/jp/topics-cat/wordpress-kana/">ワードプレス</a>
                                            </li>
                                            <li class="">
                                              <a href="http://www.iaowd.com/jp/topics-cat/wordpress-en/">WordPress</a>
                                            </li>
                                        </ul>
                                      </div>







        </div><!-- /.row -->
    </div>

  </article>

  <?php
  get_footer();
