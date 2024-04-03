<?php get_header(); ?>
<!-- ループの基本形の文章です -->
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<main>
      <h1 class="h1-title">様式集</h1>
      <h2 class="youshiki"><a href="document/soukatsuseikyuusho.xlsx">総括請求書様式</a></h2>
      <h2 class="youshiki"><a href="document/seikyuushoyoushiki.xlsx">請求書様式</a></h2>
      <h2 class="youshiki"><a href="document/gaichuuseikyuusho.xlsx">外注請求書</a></h2>
      <p class="youshiki-p">こちらからダウンロードお願い致します。</p>

    </main>
<?php endwhile; else: ?>
<!-- コンテンツがないときのHTMLやPHPを書く -->
<?php endif; ?>
<?php get_footer(); ?>
