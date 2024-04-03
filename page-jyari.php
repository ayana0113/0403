<?php get_header(); ?>
<!-- ループの基本形の文章です -->
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<main>
      <h1 class="h1-title">砂利販売</h1>
      <h2 class="h2-nav">砕石(砂利)について</h2>
      <div class="jyari">
        <div class="jyari-kind">
        <!-- 30-0 -->
        <div>
          <h4>砕石30-0</h4>
          <div class="jyari-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/30-0.jpg" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/30-0-2.jpg" alt="">
          </div>
          <p>大きさが 0 mm から 30mm の砕石であとは下記 40-0 と同一です。 </p>
          <p>粒形が小さいため扱いやすいので一般家庭の駐車場にはお勧めです。 </p>
        </div>
        <!-- 40-0 -->
        <div>
          <h4>砕石40-0</h4>
          <div class="jyari-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/40-0.jpg" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/40-0-2.jpg" alt="">
          </div>
          <p>主にぬかるみや駐車場の敷き砂利として広く使用されています。</p>
          <p>大きさが 0mm から 40mm までで、砂利や岩を砕いたものです。</p>
          <p>安価でしまりやすい性質があります。</p>
        </div>
        <!-- RC40-0 -->
        <div>
          <h4>RC40-0</h4>
          <div class="jyari-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/RC40-0.jpg" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/RC40-0-2.jpg" alt="">
          </div>
          <p>コンクリート廃材を破砕して作った砕石です。</p>
          <p>基本的には砕石 40-0 と大きさは同一であるが、RC 40-0 は環境に優しく、安価でしまりやすい性質があります。</p>
        </div>
        <!-- 白ビリ -->
        <div>
          <h4>白ビリ</h4>
          <div class="jyari-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shirobiri.jpg" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shirobiri-2.jpg" alt="">
          </div>
          <p>石灰岩の砕石で、粒の大きさが 5mm ～ 13mm 程の細かい砕石。</p>
          <p>エクステリアなどに使われる人気の砕石。</p>
          <p>和・洋 の庭どちらにも合い、庭や玄関廻りを明るく演出できます。</p>
          <p>多くのお客様のが購入しているおすすめの砕石です。</p>
        </div>
        <!-- 黒土 -->
        <div>
          <h4>黒土</h4>
          <div class="jyari-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/kurotuchi.jpg" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/kurotuchi-2.jpg" alt="">
          </div>
          <p>榛名山周辺で採取される良質の黒土。</p>
          <p>養分は多く含みますが、草等の種子が入っていないので、草がはえにくいです。</p>
          <p>主に植樹の時に使用したり、花壇等の造園に用いられます。</p>
        </div>
        <!-- 6号砕石 -->
        <div>
          <h4>6号砕石</h4>
          <div class="jyari-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/6gou.jpg" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/6gou2.jpg" alt="">
          </div>
          <p>エクステリアなどに使われる石。</p>
          <p>粒の大きさが 5mm ～ 13mm 程の細かい砕石。</p>
          <p>白ビリよりも安価で色はグレー。</p>
          <p>家の犬走りなどに使用することで、雑草が生えるのを防いだり、雨の泥跳ね防止・踏んだ時に音がするので防犯対策になるなど、様々な用途で使える砕石です。</p>
        </div>
        <!-- 砂 -->
        <div>
          <h4>砂</h4>
          <div class="jyari-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/suna.jpg" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/suna-2.jpg" alt="">
          </div>
          <p>芝生・砂場などに使われる砂。</p>
          <p>川砂は非常に排水性に非常に優れ、土と混ぜることで園芸用としても根腐れ防止に役立ちます。</p>
        </div>
        <!-- 山砂 -->
        <div>
          <h4>山砂</h4>
          <div class="jyari-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/yamasuna.jpg" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/yamasuna-2.jpg" alt="">
          </div>
          <p>山を削った天然の砂。</p>
          <p>川砂より保水性に優れ、乾くと地盤が良く締まります。</p>
          <p>川砂より土に近い分水はけが悪いです。</p>
          <p>人工芝を張りたい時に、下地の上に敷いて固めると良いです。</p>
        </div>
      </div>
      
  </main>
<?php endwhile; else: ?>
<!-- コンテンツがないときのHTMLやPHPを書く -->
<?php endif; ?>
<?php get_footer(); ?>