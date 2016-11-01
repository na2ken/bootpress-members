<?php
/* Template Name: archive-achievement.php */
get_header(); ?>
<!-- ◆ archive-achievement template ◆ -->
<div class="l-cover verticalPadding-t-xs verticalPadding-b-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="h2 text-center NotoSansJP-Thin "><?php echo esc_html(get_post_type_object(get_post_type())->label ); ?></h1>
            </div>
        </div><!-- /.row -->
    </div>
</div><!-- /.l-cover -->




<article class="gryColorTone">
    <div class="container-fluid keyColor20pale">
        <div class="row verticalPadding-t-sm">
            <div class="col-sm-6 col-sm-offset-3 keyColor40pale verticalMargin-b-sm verticalMargin-t-sm">

              <p class="verticalMargin-t-sm text-center">ご訪問ありがとうございます。<br>
              こちらは会員限定有料サイト<span class="textSize-md">「売れるWebデザイン実践会」</span>です。</p>

                <?php echo do_shortcode( '[swpm_login_form]' ); ?>
                <a href="http://www.iaowd.com/jp/membership-join/">有料限定情報について</a>
            </div>
        </div>
    </div>

            <div class="container">
                <div class="row verticalPadding-t-sm">

                  <p class="text-center">ご興味のある方は、こちらの会員コンテンツを参照ください。</p>
                  <?php
                      $args=array(
                          'tax_query' => array(
                              array(
                                  'taxonomy' => 'a-members-cat', //タクソノミーを指定
                                  'field' => 'slug', //ターム名をスラッグで指定する
                                  'terms' => array( 'members-service' ) //表示したいタームをスラッグで指定
                              ),
                          ),
                          'post_type' => '', //カスタム投稿名
                          'posts_per_page'=> 4 //表示件数（-1で全ての記事を表示）
                      );
                   ?>
                  <?php query_posts( $args ); ?>
                  <?php if(have_posts()): ?>
                  <?php while(have_posts()):the_post(); ?>

                    <div class="col-sm-6 verticalPadding-b-sm wow fadeInUp" data-wow-duration="2.5s" data-wow-delay="0s">
                    <section>
                    <?php
                    // アイキャッチ画像を配置する
                            if ( has_post_thumbnail() ) :
                            the_post_thumbnail( 'medium img-responsive' );
                            else : ?>
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/img-noimage.png" alt="<?php the_title(); ?>" class="img-responsive">
                                    <!-- アイキャッチ画像がないときに表示させる仮画像  -->
                                </figure>
                    <?php endif; ?>
                    <h2 class="h2 NotoSansJP-Thin verticalMargin-t-xs verticalMargin-b-0 horizontalMargin-l-xs horizontalMargin-r-xs"><!--a href="<?php the_permalink(); ?>"--><?php the_title(); ?><!--/a--></h2>
                    <div class="horizontalMargin-l-xs horizontalMargin-r-xs">
                      <?php if( is_single() ): ?>
                      <?php echo mb_substr(strip_tags($post-> post_content),0,30).'...'; ?>
                      <?php else: ?>
                      <?php the_excerpt(); ?>
                      <?php endif; ?>
                   </div>
                  </section>
                </div>


                  <?php endwhile; else: ?>

                  申し訳ありませんが、ご指定のコンテンツが存在しません。

                  <?php endif; ?>
                  <?php wp_reset_query(); ?>

      </div><!-- /.row -->
  </div>

</section>
<section>
<div class="container">
<div class="row">
<div class="col-sm-12 verticalMargin-t-sm">
<div class="well">
<p>
<span class="textSize-md">「売れるWebデザイン実践会」</span>は、「売れるWebデザイン」を実践する方の会員組織です。いつでも、どこでも強力なWebデザイン・Web運用ノウハウを学び、ご自分のビジネスに活かしていくことができる環境をご用意しています。	</p>

<h3>価格：5,400円／月</h3>
<h3>2016年7月下旬会員募集予定です。</h3>

<div class="verticalMargin-t-sm verticalMargin-b-sm">

</div>

</div>
<p><!-- /.well -->
</div>
</div>
</div>
<p><!-- /.container --><br />
</section>
<div class="container-fluid">
<div class="row">
<div class="col-sm-6 col-sm-offset-3 text-center verticalPadding-t-md verticalPadding-b-md">
                <a class="btn btn-success btn-xl btn-block" href="">まだ登録できません
                </a>
            </div>
</p></div>
</div>
</article>

<?php
get_footer();
