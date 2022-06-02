<!DOCTYPE html>
<html lang="jp">

<head>
    <?php 
    if(is_home() or is_front_page()){
        $pagetitle = 'THE PLACE NAMBA | トップページ';
        $ogptitle = 'トップページ';
    }
    elseif(is_archive()){
        $pagetitle = '利用者紹介 - THE PLACE NAMBA';
        $ogptitle = '利用者紹介';
    }
    elseif(is_404()){
        $pagetitle = 'Not Found - THE PLACE NAMBA';
        $ogptitle = '404';
    }
    else{
        $current_page = get_the_title()." - THE PLACE NAMBA";
        $pagetitle = $current_page;
        $ogptitle = get_the_title();
    }

    $ogptype = is_home() || is_front_page() ? 'website' : 'article';
    $ogpurl = nowUrl();
    ?>
    <!-- 文字コード -->
    <meta charset="UTF-8">
    <!-- IEバグ回避用 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- タイトル -->
    <title><?= $pagetitle ?></title>
    <!-- 説明文 -->
    <meta name="description" content="ミニマムな働き方、もっと広がる可能性。なんば駅から徒歩2分のシェアオフィス。">
    <!-- ビューポート -->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- OGP -->
    <meta property="og:title" content=<?= $ogptitle ?>>
    <meta property="og:type" content=<?= $ogptype ?>>
    <meta property="og:description" content="ミニマムな働き方、もっと広がる可能性。なんば駅から徒歩2分のシェアオフィス。">
    <meta property="og:url" content=<?= $ogpurl ?>>
    <meta property="og:site_name" content="The Place Namba">
    <meta property="og:image" content="<?= get_template_directory_uri(); ?>/image/ogp_sample.png">
    <!-- Twitter OGP -->
    <meta name="twitter:card" content="summary_large_image">
    <!-- ファビコン -->
    <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/image/favicon.ico">
    <!-- Webフォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- アイコンフォント -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@2.0.2/destyle.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="https://use.typekit.net/qgw0lcp.css">
</head>

<body>
<?php wp_head(); ?>

<!-- ヘッダー -->
<header
    <?php if(is_page() or is_archive() or is_404()):?>
        echo class="header page-header"
    <?php else: ?>
        echo class="header"
    <?php endif;?>>

    <div class="header_inner">
        <a href="/" class="header_logo"></a>

        <nav class="header_nav">
            <ul class="header_list">
                <li><a href="/corporate">企業様向けプラン</a></li>
                <li><a href="/individual">個人様向けプラン</a></li>
                <li><a href="/user">利用者紹介</a></li>
                <li><a href="/access">アクセス</a></li>
            </ul>

            <a href="/contact" class="button">内覧予約</a>
        </nav>
    </div>
</header>
