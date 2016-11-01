<?php
/**************************************************
 * BootPress admin v0.3
 * update 161009
 * for iaowd.com/p-lesson
 ***************************************************/

/**************************************************
  一般的な機能を機能させる　v1.1
***************************************************/
// ウィジェットエリアを追加する
register_sidebar( array(
    'name' => __( 'Main Sidebar', 'twentytwelve' ),
    'id' => 'sidebar-1',
    'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'twentytwelve' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<div class="verticalPadding-t-xs verticalPadding-b-xs verticalMargin-b-xs keyColor20dark"><h2 class="horizontalMargin-l-xs horizontalMargin-r-xs textSize-xs NotoSansJP-Thin textColor-wht">',
    'after_title' => '</h2></div>',
) );

//RSSフィードを追加する
add_theme_support( 'automatic-feed-links' );

// 本文と概要（抜粋）の文字数を統一する
function my_length($length) {
	return 70;
}
add_filter('excerpt_mblength','my_length');

// 本文と概要（抜粋）の省略記号を設定する
function my_more($more) {
	return '…';
}
add_filter('excerpt_more', 'my_more');

// アイキャッチ画像を表示する
add_theme_support( 'post-thumbnails' );


/**************************************************
  カスタムメニューを機能させる　v1.0
***************************************************/
// ナビゲーションメニューを登録する
register_nav_menu( 'navigation', 'ナビゲーション' );

add_theme_support( 'menus' );

// 「メニュー」の「テーマの場所」を定義する
register_nav_menu( 'header-navi', 'メインナビゲーション' );
register_nav_menu( 'header-sub-navi', 'サブナビゲーション' );
register_nav_menu( 'footer-navi', 'フッターナビゲーション' );
register_nav_menu( 'footer-left-column', 'フッター左カラム' );
register_nav_menu( 'footer-center-column', 'フッターセンターカラム' );
register_nav_menu( 'footer-right-column', 'フッター右カラム' );

/**************************************************
  カスタム投稿タイプを登録する　v2.0
***************************************************/
/* 1つ目 */
add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'topics',  //変更箇所１：スラッグ名
        array(
        'labels' => array(
        'name' => __( 'トピックス' ), //変更箇所２：管理画面に表示されるラベル名
        'singular_name' => __( 'topics' ) //変更箇所３：このカスタム投稿の識別名
        ),
        'public' => true,
        'has_archive' => true,
        'hierarchical' => false, //投稿と同じように
        'supports' => array(
        'title', 'editor', 'thumbnail', 'custom-fields'
        ),
        'menu_position' => 5,
        )
    );

/* 2つ目以降 */
    register_post_type( 'practice',  //変更箇所１：スラッグ名
        array(
        'labels' => array(
        'name' => __( '実務' ), //変更箇所２：管理画面に表示されるラベル名
        'singular_name' => __( 'practice' ) //変更箇所３：このカスタム投稿の識別名
        ),
        'public' => true,
        'has_archive' => true,
        'hierarchical' => false, //投稿と同じように
        'supports' => array(
        'title', 'editor', 'thumbnail', 'custom-fields'
        ),
        'menu_position' => 5,
        )
    );
/* 3つ目以降 */
    register_post_type( 'wordpress-l',  //変更箇所１：スラッグ名
        array(
        'labels' => array(
        'name' => __( 'WrodPress' ), //変更箇所２：管理画面に表示されるラベル名
        'singular_name' => __( 'wordpress-l' ) //変更箇所３：このカスタム投稿の識別名
        ),
        'public' => true,
        'has_archive' => true,
        'hierarchical' => false, //投稿と同じように
        'supports' => array(
        'title', 'editor', 'thumbnail', 'custom-fields', 'thumbnail', 'custom-fields', 'comments',
        ),
        'menu_position' => 5,
        'capability_type' => 'post',
        )
    );
/* 4つ目以降 */
    register_post_type( 'webui',  //変更箇所１：スラッグ名
        array(
        'labels' => array(
        'name' => __( 'webuiフレームワーク' ), //変更箇所２：管理画面に表示されるラベル名
        'singular_name' => __( 'webui' ) //変更箇所３：このカスタム投稿の識別名
        ),
        'public' => true,
        'has_archive' => true,
        'hierarchical' => false, //投稿と同じように
        'supports' => array(
        'title', 'editor', 'thumbnail', 'custom-fields', 'thumbnail', 'custom-fields', 'comments',
        ),
        'menu_position' => 5,
        'capability_type' => 'post',
        )
    );
/* 5つ目以降 */
    register_post_type( 'mindset',  //変更箇所１：スラッグ名
        array(
        'labels' => array(
        'name' => __( '考え方と知識' ), //変更箇所２：管理画面に表示されるラベル名
        'singular_name' => __( 'mindset' ) //変更箇所３：このカスタム投稿の識別名
        ),
        'public' => true,
        'has_archive' => true,
        'hierarchical' => false, //投稿と同じように
        'supports' => array(
        'title', 'editor', 'thumbnail', 'custom-fields'
        ),
        'menu_position' => 5,
        'capability_type' => 'post',
        )
    );
/* 6つ目以降 */
register_post_type( 'toolset',  //変更箇所１：スラッグ名
    array(
    'labels' => array(
    'name' => __( 'ツールセット' ), //変更箇所２：管理画面に表示されるラベル名
    'singular_name' => __( 'toolset' ) //変更箇所３：このカスタム投稿タイプ名
    ),
    'public' => true,
    'has_archive' => true,
    'hierarchical' => true,
    'supports' => array(
    'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'revisions', 'page-attributes'
    ),
    'menu_position' => 5,
    )
);
/* 一番最後の閉じ括弧 */
}
/**************************************************
  カスタムタクソノミーを登録する v2.0
***************************************************/
/* 1つ目 */
add_action( 'init', 'custom_register_taxonomy' );
function custom_register_taxonomy() {
    register_taxonomy(
        'topics-cat',  //変更箇所１：スラッグ名
        'topics',  //変更箇所１：カスタム投稿タイプ名
        array(
            'labels' => array(
            'name' => __( 'カテゴリー' ), //変更箇所３：管理画面に表示されるラベル名
            'singular_name' => __( 'topics-cat' ) //変更箇所４：このカスタムタクソノミーの識別名
            ),
            'public' => true,
            'rewrite' => true,
        )
    );

/* 2つ目 */
    register_taxonomy(
        'practice-cat',  //変更箇所１：スラッグ名
        'practice',  //変更箇所２：カスタム投稿タイプ名
        array(
            'labels' => array(
            'name' => __( 'カテゴリー' ), //変更箇所３：管理画面に表示されるラベル名
            'singular_name' => __( 'practice-cat' ) //変更箇所４：このカスタムタクソノミーの識別名
            ),
            'public' => true,
            'rewrite' => true,
        )
    );
/* 3つ目 */
    register_taxonomy(
        'wordpress-l-cat',  //変更箇所１：スラッグ名
        'wordpress-l',  //変更箇所２：カスタム投稿タイプ名
        array(
            'labels' => array(
            'name' => __( 'カテゴリー' ), //変更箇所３：管理画面に表示されるラベル名
            'singular_name' => __( 'wordpress-l-cat' ) //変更箇所４：このカスタムタクソノミーの識別名
            ),
            'public' => true,
            'rewrite' => true,
        )
    );
/* 4つ目 */
    register_taxonomy(
        'webui-cat',  //変更箇所１：スラッグ名
        'webui',  //変更箇所２：カスタム投稿タイプ名
        array(
            'labels' => array(
            'name' => __( 'カテゴリー' ), //変更箇所３：管理画面に表示されるラベル名
            'singular_name' => __( 'webui-cat' ) //変更箇所４：このカスタムタクソノミーの識別名
            ),
            'public' => true,
            'rewrite' => true,
        )
    );
/* 5つ目 */
    register_taxonomy(
        'mindset-cat',  //変更箇所１：スラッグ名
        'mindset',  //変更箇所２：カスタム投稿タイプ名
        array(
            'labels' => array(
            'name' => __( 'カテゴリー' ), //変更箇所３：管理画面に表示されるラベル名
            'singular_name' => __( 'mindset-cat' ) //変更箇所４：このカスタムタクソノミーの識別名
            ),
            'public' => true,
            'rewrite' => true,
        )
    );
    /* 6つ目 */
        register_taxonomy(
            'growthhackers-cat',  //変更箇所１：スラッグ名
            'growthhackers',  //変更箇所２：カスタム投稿タイプ名
            array(
                'labels' => array(
                'name' => __( 'カテゴリー' ), //変更箇所３：管理画面に表示されるラベル名
                'singular_name' => __( 'growthhackers-cat' ) //変更箇所４：このカスタムタクソノミーの識別名
                ),
                'public' => true,
                'rewrite' => true,
            )
        );
/* ７つ目 */
register_taxonomy(
    'toolset-cat',  //変更箇所１：カスタムタクソノミー名
    'toolset',  //変更箇所１：カスタム投稿タイプのスラッグ名
    array(
        'labels' => array(
        'name' => __( 'カテゴリー' ), //変更箇所３：管理画面に表示されるカスタムタクソノミー名
        'singular_name' => __( 'toolset-cat' ) //変更箇所４：このカスタムタクソノミー名
        ),
        'public' => true,
        'rewrite' => true,
    )
);
/* 一番最後の閉じ括弧 */
}

/**************************************************
  BootPressのデフォルト機能を追加する　v1.2
***************************************************/
// トップページにカスタム投稿タイプの記事を表示する
function chample_latest_posts( $wp_query ) {
    if ( is_home() && ! isset( $wp_query->query_vars['suppress_filters'] ) ) {
        $wp_query->query_vars['post_type'] = array( 'topics','wordpress-l','practice','webui','mindset');
    }
}
add_action( 'parse_query', 'chample_latest_posts' );

// 検索結果を投稿タイプとカスタム投稿タイプだけにする
function search_filter($query) {
  if (!$query -> is_admin && $query -> is_search) {
    $query -> set('post_type', array('post', 'course','wordpress','wordpress-custom','growthhackers','bootstrap'));
  }
  return $query;
}
add_filter('pre_get_posts', 'search_filter');

/**************************************************
  表示件数を変更する
***************************************************/
