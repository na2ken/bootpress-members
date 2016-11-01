<?php
/* Template Name: single-topics-homepage.php */
get_header(); ?>
<!-- ◆ single-topics-homepage template◆ -->
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



<figure>
<?php echo get_avatar( 1, 32, '', '', array('class'=>'img-circle', 'extra_attr'=>'style="margin: 0 5px 0 0;"') ); ?>
</figure>
                       <p><span class="small"><?php the_author_posts_link(); ?>(<?php the_author_posts(); ?> )</span></p>



        <div class="row verticalMargin-t-sm verticalMargin-b-sm">
            <div class="horizontalPadding-l-xs horizontalPadding-r-xs">
                <h4 class="h4 NotoSansJP-Thin text-center keyColor40pale verticalPadding-t-xs verticalPadding-b-xs">この記事を読んだ人が注目している他の記事</h4>
                  <p class="">
                      <?php if (function_exists('wpp_get_mostpopular')) wpp_get_mostpopular("range=monthly&limit=12&post_type=post&order_by=views&stats_comments=0&thumbnail_height=120&thumbnail_width=120&thumbnail_selection =usergenerated"); ?>
                  </p>
            </div>
        </div>
        <?php get_template_part('offer'); ?>
          <?php
          // ループ終了
          endwhile; ?>



                        </section>
                    </div><!-- col-8 -->
                    <div class="col-sm-4 verticalMargin-t-sm verticalMargin-b-sm">
                    <div class="col-xs-12 gryColor verticalPadding-t-sm verticalPadding-b-sm">

                      <h3 class="h2 verticalMargin-t-0 headeigDec-Underline">カテゴリー</h3>
<?php
$terms = get_terms( 'topics-cat' );

echo '<ul class="navListUnit">';

foreach ( $terms as $term ) {

// この $term はオブジェクトなので、$taxonomy を指定しなくてよい。
$term_link = get_term_link( $term );

// エラーなら次のタームへ進む。
if ( is_wp_error( $term_link ) ) {
continue;
}

// リンクを取得できたのでプリントアウトする。
echo '<li class=""><a href="' . esc_url( $term_link ) . '">' . $term->name . '</a></li>';
}

echo '</ul>';
?>





                    </div>
                    </div><!-- col-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
</article>

<?php
get_footer();
