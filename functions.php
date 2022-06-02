<?php
add_theme_support('post-thumbnails');

// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'user';
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

// URL取得
function nowUrl(){
    $url = '';
    if(isset($_SERVER['HTTPS'])){
        $url .= 'https://';
    }else{
        $url .= 'http://';
    }
    $url .= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    return $url;
}