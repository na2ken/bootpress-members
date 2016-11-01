<?php
/* Template Name: taxonomy-topics-cat.php */
get_header(); ?>

<!-- ★ taxonomy-topics-cat template -->
<div class="l-cover verticalPadding-t-xs verticalPadding-b-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 wow fadeInUp text-center" data-wow-duration="2.5s" data-wow-delay="0s">
                <h1 class="h2 text-center NotoSansJP-Thin "><?php echo esc_html(get_post_type_object(get_post_type())->label ); ?></h1>
            </div>
        </div><!-- /.row -->
    </div>
</div><!-- /.l-cover -->


<article class="gryColorTone cat">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 wht wow fadeInUp verticalMargin-t-sm verticalMargin-b-sm" data-wow-duration="2.5s" data-wow-delay="1.0s">
                    <?php if(have_posts()): while(have_posts()):
                    the_post(); ?>

                    <section class="wht">
                    <!-- article <?php post_class(); ?> -->



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
                       <div class="wht verticalPadding-t-xs">
                    <?php if( is_single() ): ?>

                    <?php else: ?>

                       <h2 class="h2 verticalMargin-t-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php endif; ?>

                    <div class="postinfo　wht">
                       <time datetime="<?php echo get_the_date( 'Y-m-d' ) ?>">
                       <i class="fa fa-clock-o"></i>
                       <?php echo get_the_date(); ?>
                       </time>

                       <span class="postcom">
                       <i class="fa fa-comment"></i>
                       <a href="<?php comments_link(); ?>">
                       <?php comments_number(
                           'コメント',
                           'コメント（1件）',
                           'コメント（%件）'
                       ); ?>
                       </a>
                       </span>
                    </div>

                    <?php if( is_single() ): ?>

                    <?php echo mb_substr(strip_tags($post-> post_content),0,200).'...'; ?>

                    <?php else: ?>




                       <div class="excerpt">





                       <?php the_excerpt(); ?>
                       <p class="more"><a href="<?php the_permalink(); ?>">続きを読む <i class="fa fa-chevron-right"></i></a></p><div class="clearfix"></div>
                       </div>

                    <?php endif; ?>


                    <?php if( is_single() ): ?>
                    <div class="pagenav">
                       <span class="old">
                       <?php previous_post_link(
                       '%link',
                       '<i class="fa fa-chevron-circle-left"></i> %title'
                       ); ?>
                       </span>

                       <span class="new">
                       <?php next_post_link(
                       '%link',
                       '%title <i class="fa fa-chevron-circle-right"></i>'
                       ); ?>
                       </span>
                    </div>
                    <?php endif; ?>


                    <?php comments_template(); ?>
                    <!-- /article -->
                        </div>
                    </section>

                    <?php endwhile; endif; ?>


                    <?php if( $wp_query->max_num_pages > 1 ): ?>
                    <div class="pagenav">
                       <span class="old">
                       <?php next_posts_link( '<i class="fa fa-chevron-circle-left"></i> 古い記事' ); ?>
                       </span>

                       <span class="new">
                       <?php previous_posts_link( '新しい記事 <i class="fa fa-chevron-circle-right"></i>' ); ?>
                       </span>
                    </div>
                    <?php endif; ?>

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
    </div>
</article>

<?php
get_footer();
