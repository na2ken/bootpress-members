<?php
/* Template Name: archive-course.php */
get_header(); ?>
<!-- ◆ archive-course2 template ◆ -->
<div class="l-cover verticalPadding-t-xs verticalPadding-b-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="h2 text-center NotoSansJP-Thin"><?php echo esc_html(get_post_type_object(get_post_type())->label ); ?></h1>
            </div>
        </div><!-- /.row -->
    </div>
</div><!-- /.l-cover -->

<article class="gryColorTone">
<style>
.bg-course {
  background: url(http://www.iaowd.com/wp-content/themes/bootpress-media/img/sites/2/bk201.jpg);
  background-size: cover;
  background-position: 0% 0%; }
}
</style>
            <div class="container-fluid bg-course">
                <div class="row verticalPadding-t-sm">

                  <div class="container">
                      <div class="row">
                        <?php
                            $args=array(
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'course-cat', //タクソノミーを指定
                                        'field' => 'slug', //ターム名をスラッグで指定する
                                        'terms' => array( 'study' ) //表示したいタームをスラッグで指定
                                    ),
                                ),
                                'post_type' => 'うまくいっているWebの運用100のヒント', //カスタム投稿名
                                'posts_per_page'=> -1 //表示件数（-1で全ての記事を表示）
                            );
                         ?>
                        <?php query_posts( $args ); ?>
                        <?php if(have_posts()): ?>
                        <?php while(have_posts()):the_post(); ?>

                          <div class="col-sm-6 verticalPadding-b-sm wow fadeInUp" data-wow-duration="2.5s" data-wow-delay="0s">
                          <section>
                          <h2 class="h2 NotoSansJP-Thin verticalMargin-t-xs verticalMargin-b-0 horizontalMargin-l-xs horizontalMargin-r-xs">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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

                        <p class="text-center text-wth verticalMargin-t-lg  verticalMargin-b-lg">勉強会、セミナーはただいま企画中です。</p>

                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                  </div><!-- /.row -->
              </div><!-- /.container -->



        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

<div class="container">
  <dv class="row">
    <h2 class="h2 NotoSansJP-Thin text-center verticalMargin-t-md">過去のセミナー</h2>

      <h3 class="h3 verticalMargin-t-sm">「WordPressとBootstrapの正しいWebサイト作成法」</h3>
    <p>2016年4月24日　新宿戸塚地域センター</p>

      <h3 class="h3 verticalMargin-t-sm">「HTML5+CSS3 3ヶ月マスター講座」</h3>
    <p>2015年8月4日から10月27日まで　都内貸会議室</p>

      <h3 class="h3 verticalMargin-t-sm">「Bootstrap X WordPress実装セミナー」</h3>
    <p>2015年7月11日、18日　新宿戸塚地域センター</p>

      <h3 class="h3 verticalMargin-t-sm">「Bootstrapの基本をマジでマスターする勉強会」</h3>
    <p>2015年3月月31日　新宿戸塚地域センター</p>

      <h3 class="h3 verticalMargin-t-sm">「CSSフレームワークについて考える勉強会」</h3>
    <p>2015年2月27日　新宿戸塚地域センター</p>

      <h3 class="h3 verticalMargin-t-sm">「Designing in the browserの基本」</h3>
    <p>2105年1月15日　新宿戸塚地域センター</p>

      <h3 class="h3 verticalMargin-t-sm">「あなたの『フリーランス化計画』を成功させる9つのステップ」</h3>
    <p>2014年12月7日　新宿戸塚地域センター</p>

      <h3 class="h3 verticalMargin-t-sm">「爆速！HTML5+CSS3速習講座＜Webクリエイター向け＞」</h3>
    <p>2014年10月18日　世田谷区民センター</p>

      <h3 class="h3 verticalMargin-t-sm">「Webサイト構築/Webマーケティング最前線 スマホ・タブレット対応 Webサイト制作の勘所」</h3>
    <p>2013年8月22日　飯田橋TKO会議室</p>

      <h3 class="h3 verticalMargin-t-sm">「Webサイト制作の現場から見た 必要な人材・いらない人材」</h3>
    <p>2013年3月28日　大井町きゅりあん</p>

    <p class="verticalMargin-t-md"><span class="small">＊上記は一般向けセミナーです。社員のみ参加の企業内セミナー・研修も多数行っています。</span></p>
    </div>
</div>
</article>

<?php
get_footer();
