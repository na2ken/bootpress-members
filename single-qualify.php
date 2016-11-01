<?php
/* Template Name: single-qualify.php */
get_header(); ?>
<!-- ◆ single-squalify. template◆ -->
<div class="l-cover verticalPadding-t-xs verticalPadding-b-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 wow fadeInUp" data-wow-duration="2.5s" data-wow-delay="1.0s">
                <h1 class="h2 text-center NotoSansJP-Thin "><?php echo esc_html(get_post_type_object(get_post_type())->label ); ?></h1>
            </div>
        </div><!-- /.row -->
    </div>
</div><!-- /.l-cover -->

<article class="gryColorTone">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 wht verticalMargin-t-sm verticalMargin-b-sm">
                         <section class="">
	<?php
		// ループ開始
		while ( have_posts() ) : the_post(); ?>

<div class="eyeCatch">
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
</div>

			<div class="verticalMargin-t-xs">
			    <?php the_content(); ?>
			</div>




<div class="row">
			<div class="col-xs-6">
			<?php
			/**
			 * 投稿ナビゲーション
			 */ ?>
				<span id="next"><?php next_post_link( '%link','&laquo; %title' ); ?></span>
			</div>
			<div class="col-xs-6 text-right">
				<span id="prev"><?php previous_post_link( '%link','%title &raquo;' ); ?></span>
			<?php
			// ループ終了
			endwhile; ?>
			</div>
</div>


                        </section>
                    </div><!-- col-8 -->
                    <div class="col-sm-4 verticalMargin-t-sm verticalMargin-b-sm">
                    <div class="col-xs-12 gryColor verticalPadding-t-sm verticalPadding-b-sm">

                      <h3 class="h3 verticalMargin-t-0 headeigDec-Underline text-center">関連情報</h3>
                      <ul class="listStyle-disc textSize-xs">
                          <a href="http://www.iaowd.com/jp/about/"><li class="horizontalMargin-l-sm">国際Webデザイナーズ協会とは</li></a>
                          <a href="http://www.iaowd.com/jp/%E5%A3%B2%E3%82%8C%E3%82%8Bweb%E3%83%87%E3%82%B6%E3%82%A4%E3%83%B3%E3%81%A8%E3%81%AF/">
                            <li class="horizontalMargin-l-sm">売れるWebデザインとは</li></a>
                          <a href="http://www.iaowd.com/jp/achievement/"><li class="horizontalMargin-l-sm">事例と成果</li></a>
                          <a href="http://www.iaowd.com/jp/service/web%E9%A1%A7%E5%95%8Fweb%E3%83%87%E3%82%B6%E3%82%A4%E3%83%B3/">
                            <li class="horizontalMargin-l-sm">サービス</li></a>
                      </ul>

                    </div>
                    </div><!-- col-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
</article>

<?php
get_footer();
