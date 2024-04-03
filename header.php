<!DOCTYPE html>
<html>
  <head>
    <title>高橋建材株式会社</title>
    <meta charset="UTF-8">
    <meta name="description" content="舗装工事の事でお悩みのお客様はいらっしゃいませんか？弊社は群馬県を中心に数多くの舗装工事に携わって参りました。">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Roboto&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
   <?php wp_head(); ?>
  </head>

  <body>
    <!-- ヘッダー -->
    <header>
      <!-- ここから会社名タイトル -->
      <div class="header-container">
        <div class="logo-title">
          <div class="logo-img"><a href="<?php echo esc_url(home_url()); ?>" ><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="トップページに戻る"></a></div>
          <h1 class="site-title"><a href="<?php echo esc_url(home_url()); ?>">高橋建材株式会社</a></h1>
        </div>
         <!-- nabiボタン -->
         <div class="nabi-button">
         <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-justify" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
         </svg>
        </div>
      </div>
        <!-- ここまで会社タイトル -->
        <!-- ここからナビゲーションメニュー -->
           <!-- ヘッダーにメニューを表示 -->
           <?php $args =array(//まず変数$argsを作ってarray()の中にデータを入れる
                    'theme_location' => 'header_nav',// functions.phpで設定したメニューの名前を設定
                    'container' => 'nav',// <nav>タグを自動で出力してくれる。必ず書かなくてもデフォルトでは<div>タグを出力する
                );
                wp_nav_menu($args);//メニューを表示
                ?>
        <!-- ここまでナビゲーションメニュー -->
      
    </header>