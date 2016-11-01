<?php
/* Template Name: taxonomy-topics-cat-wordpress.php */
get_header(); ?>
<!-- ◆ wordpressの使い方 template ◆ -->
<div class="l-cover verticalPadding-t-xs verticalPadding-b-sm">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="h2 text-center NotoSansJP-Thin ">ワードプレスの使い方</h1>
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
                       <h2 class="h3 NotoSansJP-Thin verticalMargin-t-0 verticalMargin-b-0 horizontalMargin-l-sm">
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
                                            <li class="textSize-sm">ワードプレスを活用したホームページ構築</li>
                                                <ul class="navListUnit">
                                                    <li class="listStyle-disc horizontalMargin-l-sm">
                                                      <a href="http://www.iaowd.com/jp/topics/%E3%83%AF%E3%83%BC%E3%83%89%E3%83%97%E3%83%AC%E3%82%B9%E3%81%A8%E3%81%AF/">ワードプレスとは？
                                                      </a></li>
                                                    <li class="listStyle-disc horizontalMargin-l-sm">構築時に使うメリット</li>
                                                    <li class="listStyle-disc horizontalMargin-l-sm">使わない時のデメリット</li>
                                                    <li class="listStyle-disc horizontalMargin-l-sm">ワークシェアリングとして</li>
                                                    <li class="listStyle-disc horizontalMargin-l-sm">表現力を向上させるワードプレス</li>
                                                    <li class="listStyle-disc horizontalMargin-l-sm">ワードプレスのシステム拡張性</li>
                                                    <li class="listStyle-disc horizontalMargin-l-sm">保守という問題をクリアする</li>
                                                </ul>
                                        </ul>



                                        <ul class="navListUnit verticalMargin-t-sm">
                                            <li class="textSize-sm">売上を上げるワードプレス活用術</li>
                                                <ul class="navListUnit">
                                                    <li class="listStyle-disc horizontalMargin-l-sm">プランニングの時短力</li>
                                                    <li class="listStyle-disc horizontalMargin-l-sm">プレゼンテーションの即効性</li>
                                                    <li class="listStyle-disc horizontalMargin-l-sm">開発プロセスを省力化</li>
                                                    <li class="listStyle-disc horizontalMargin-l-sm">実行とアイディアを支援する</li>
                                                    <li class="listStyle-disc horizontalMargin-l-sm">SEO対策を強化できる</li>
                                                    <li class="listStyle-disc horizontalMargin-l-sm">コンテンツ力を強化できる</li>
                                                    <li class="listStyle-disc horizontalMargin-l-sm">成長の波に乗る</li>
                                                    <li class="listStyle-disc horizontalMargin-l-sm">経営計画に合わせた</li>
                                                </ul>
                                        </ul>

                                      </div>







        </div><!-- /.row -->
    </div>

  </article>

  <?php
  get_footer();
