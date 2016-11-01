<?php
/* Template Name: page.php */
get_header(); ?>
<!-- pagete mplate -->
<div class="l-cover">

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="h2 text-center NotoSansJP-Thin verticalPadding-t-sm verticalPadding-b-sm"><?php the_title(); ?></h1>
            </div>


        </div><!-- /.row -->
    </div>

</div><!-- /.l-cover -->

<article class="archiveArticle">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
</article>

<?php
get_footer();
