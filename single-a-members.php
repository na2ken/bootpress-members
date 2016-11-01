<?php
/* Template Name: single-topics.php */
get_header(); ?>
<!-- ◆ single-topics. template◆ -->
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

			    <h2 class="h2 NotoSansJP-Thin verticalMargin-t-xs"><?php the_title(); ?></h2>

            <div class="postinfo">
                <span class="postcat">
                    <i class="fa fa-folder-open"></i><?php the_taxonomies( $args ); ?>
                </span>
            </div>

			    <?php the_content(); ?>




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
                    <aside class="" role="complementary">
                    <?php get_sidebar(); ?>
                    </aside>
                    </div>
                    </div><!-- col-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
</article>

<?php
get_footer();
