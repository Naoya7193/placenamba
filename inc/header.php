<!DOCTYPE html>
<html lang="jp">

<head>
    <!-- 文字コード -->
    <meta charset="UTF-8">
    <!-- IEバグ回避用 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- 説明文 -->
    <meta name="description" content="">
    <!-- ビューポート -->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- OGP -->
    <meta property="og:title" content="">
    <meta property="og:type" content="website">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:image" content="">
    <!-- Twitter OGP -->
    <meta name="twitter:card" content="summary_large_image">
    <!-- ファビコン -->
    <link rel="" href="">
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
    <?php if(is_page() or is_404() or get_post_type()==="user"):?>
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