<?php
/* Template Name: single-service.php */
get_header(); ?>
<!-- ◆ single-service. template◆ -->
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


	<?php
		// ループ開始
		while ( have_posts() ) : the_post(); ?>




			    <?php the_content(); ?>







			<?php
			// ループ終了
			endwhile; ?>






</article>

<?php
get_footer();
