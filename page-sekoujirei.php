<?php get_header(); ?>
<!-- ループの基本形の文章です -->
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<main>
      <!-- 施工事例 -->
      <h1 class="h1-title">施工事例</h1>
      <div class="sekoujirei">
        <div>
          <h4 class="before">施工前</h4>
          <div class="sekou-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/okutano1.JPG" alt=""></div>
        </div>
        <div>
          <h4 class="after">施工後</h4>
          <div class="sekou-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/okutano2.JPG" alt=""></div>

        </div>
        <div>
          <h4 class="before">施工前</h4>
          <div class="sekou-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fujioka2before.JPG" alt=""></div>
        </div>
        <div>
          <h4 class="after">施工後</h4>
          <div class="sekou-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fujioka2.JPG" alt=""></div>
        </div>
        <div>
          <h4 class="before">施工前</h4>
          <div class="sekou-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ayugawa1.JPG" alt=""></div>
        </div>
        <div>
          <h4 class="after">施工後</h4>
          <div class="sekou-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ayugawa2.jpg" alt=""></div>
          <p class="ayugawa">藤岡土木事務所にて<br>優良技術者賞をいただきました！</p>
        </div>
      </div>
      <!-- 完成工事一覧 -->
      <h2 class="h2-nav">完成工事一覧</h2>
      <div class="kanseikouji">
        <div>
          <div class="kansei-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fujikka.JPG" alt=""></div>
          <p class="kansei-p">藤岡市</p>
        </div>
        <div>
          <div class="kansei-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fujioka3.JPG" alt=""></div>
          <p class="kansei-p">藤岡市</p>
        </div>
        <div>
          <div class="kansei-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fujiokasougou.JPG" alt=""></div>
          <p class="kansei-p">藤岡総合病院</p>
        </div>
        <div>
          <div class="kansei-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/kanra.jpg" alt=""></div>
          <p class="kansei-p">甘楽町</p>
        </div>
        <div>
          <div class="kansei-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nanbokumura.JPG" alt=""></div>
          <p class="kansei-p">南牧村 村道大仁田線</p>
        </div>
        <div>
          <div class="kansei-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nishihirai.JPG" alt=""></div>
          <p class="kansei-p">藤岡市 西平井</p>
        </div>
        <div>
          <div class="kansei-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/onishi.JPG" alt=""></div>
          <p class="kansei-p">藤岡市 鬼石町</p>
        </div>
        <div>
          <div class="kansei-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/oota.JPG" alt=""></div>
          <p class="kansei-p">太田市</p>
        </div>
        <div>
          <div class="kansei-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tamamura.JPG" alt=""></div>
          <p class="kansei-p">玉村町</p>
        </div>
      </div>


    </main>
<?php endwhile; else: ?>
<!-- コンテンツがないときのHTMLやPHPを書く -->
<?php endif; ?>
<?php get_footer(); ?>
