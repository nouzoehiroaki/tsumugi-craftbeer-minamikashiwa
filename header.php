<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="format-detection" content="telephone=no">
        <meta name="google-site-verification" content="lTfQDbDlRJgwR37GhfnxVOgcKoP3Bk_yf_biOO6PX9c" />
        <title>南柏のクラフトビール専門店 | 2階のクラフトビール屋つむぎ</title>
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" />
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" />
        <link rel="preconnect" href="//fonts.googleapis.com">
        <link rel="preconnect" href="//fonts.gstatic.com" crossorigin>
        <link href="//fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@500;700&display=swap" rel="stylesheet">
        <?php wp_head(); ?>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-YW93VC06ZT"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-YW93VC06ZT');
        </script>
    </head>
    <body <?php body_class(); ?>>
        <header id="header">
            <div class="container position-relative">
                <button type="button" class="btn js-btn">
                    <span class="btn-line"></span>
                </button>
                <div class="box d-flex">
                    <nav class="g-nav">
                        <ul class="g-ul">
                            <li class="g-li">
                                <a class="g-menu line" href="<?php echo home_url('/'); ?>">トップ</a>
                            </li>
                            <li class="g-li">
                                <a class="g-menu line" href="<?php echo home_url('menu'); ?>">メニュー</a>
                            </li>
                            <li class="g-li">
                                <a class="g-menu line" href="<?php echo home_url('column'); ?>">コラム</a>
                            </li>
                            <li class="g-li">
                                <a class="g-menu line" href="<?php echo home_url('contact'); ?>">お問い合わせ</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <?php if ( !is_home() && !is_front_page()):?>
        <div class="header-logo">
            <div class="container position-relative">
                <h1>
                    <img class="logo under" src="<?php echo get_template_directory_uri(); ?>/img/logo_tsumugi.svg" alt="南柏のクラフトビール専門店 2階のクラフトビール屋つむぎ">
                </h1>
            </div>
        </div>
        <?php endif; ?>
