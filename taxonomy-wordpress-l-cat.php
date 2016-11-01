<?php
/* Template Name: taxonomy-wordpress-cat.php */
/* Template ID: taxonomy-panel-1col-sidebar template */
/* v1.0 */
get_header(); ?>
<!-- taxonomy-panel-1col-sidebar template (-l) -->
<div class="l-cover gryColorTone verticalPadding-t-xs verticalPadding-b-xs">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 wow fadeInUp text-center" data-wow-duration="2.5s" data-wow-delay="0s">
                <?php
if ($terms = get_the_terms($post->ID, 'wordpress-l-cat')) {
    foreach ( $terms as $term ) {
        echo '<h1 class="h2 text-center NotoSansJP-Thin ">' . esc_html($term->name) . '</h1>';
    }
}
?>
            </div>
        </div><!-- /.row -->
    </div>
</div><!-- /.l-cover -->


<article class="gryColor">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 wow fadeInUp verticalMargin-t-0 verticalMargin-b-sm" data-wow-duration="2.5s" data-wow-delay="0s">





                <?php query_posts($query_string . "&pst_type=wordpress-l-cat&posts_per_page=30&paged='.$paged". '&order=ASC' ); ?>
                <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>


                <div class="wht verticalPadding-b-xs">
                    <div class="horizontalPadding-l-xs horizontalPadding-r-xs">
                    <section>
                        <h2 class="h2 NotoSansJP-Thin "><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                        <?php the_content(); ?>
                    </section>
                    </div>
                </div>




                <?php endwhile; endif; wp_reset_query();?>
             </div><!-- col-8 -->


             <div class="col-sm-4 verticalMargin-t-sm verticalMargin-b-sm">
             <div class="col-xs-12 gryColor verticalPadding-t-0 verticalPadding-b-sm">
               <h3 class="h2 verticalMargin-t-0 headeigDec-Underline">アクセスランキング</h3>
<ul class="navListUnit">
               <?php
                 $args = array(
                   'posts_per_page' => 7,
                   'post_type' => get_post_type(),  //表示中の記事と同じ投稿タイプの記事を取得
                 );
                 $my_query = new WP_Query($args);
               ?>
               <?php if($my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post(); ?>
                 <li class="list-unstyled"><a href="<?php the_permalink(); ?>">
                 <?php the_title(); ?></a></li>
               <?php endwhile; endif; ?>
               <?php wp_reset_postdata(); ?>
</ul>
             </div><!-- col-4 -->

        </div><!-- /.row -->
    </div>
</article>

<?php
get_footer();
