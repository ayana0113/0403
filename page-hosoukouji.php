<?php get_header(); ?>

<!-- ループの基本形の文章です -->
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<main>
      <h1 class="h1-title">舗装工事</h1>
      <div class="genba">
        <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/genba1.JPG" alt=""></div>
        <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/genba10.JPG" alt=""></div>
        <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/genba9.JPG" alt=""></div>
      </div>
      <h2 class="h2-nav">舗装工事の種類</h2>
      <!-- 舗装工事種類 -->
      <div class="hosou-kind">
          <!-- アスファルト舗装 -->
          <div>
            <h4>アスファルト舗装</h4>
            <div class="hosou-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/rode2.jpg" alt=""></div>
            <p class="hosou-p">道路、駐車場等でよく使われている一般的な黒色の舗装です。<br>舗装の中でも比較的安値で施工ができます。<br>アスファルト舗装の中には透水性や排水性のもの等様々な種類の舗装がありますが、現地の状況に応じて最適な舗装をご提案します。</p>
          </div>
          <!-- コンクリート舗装 -->
          <div>
            <h4>コンクリート舗装</h4>
            <div class="hosou-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/conkuritohosou.jpg" alt=""></div>
            <p class="hosou-p">コンクリート材料を使用して耐荷、耐久性を目的とした舗装です。<br>コスト的にはアスファルト舗装に比べてかなりアップしますが強度も大きくなるのでメンテナンスの費用が比較的かからなくなります。</p>
          </div>
          <!-- カラー舗装 -->
          <div>
            <h4>カラー舗装</h4>
            <div class="hosou-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/colorhosou.jpg" alt=""></div>
            <p class="hosou-p">材料に顔料を加えたり着色骨材を使用したカラー舗装です。<br>耐荷、耐久性は一般的な黒色のアスファルト舗装と同等です。<br>周りの景観の引き立て役として利用してみてはどうでしょうか？</p>
          </div>
          <!-- インターロッキングブロック舗装 -->
          <div>
            <h4>インターロッキングブロック舗装</h4>
            <div class="hosou-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/interrocking.jpg" alt=""></div>
            <p class="hosou-p">独特の形状に製造された舗装用コンクリートブロックを路盤またはアスファルト舗装基盤上に敷設します。<br>ブロックの種類、形状、寸法、敷設パターン、色調および表面テクスチャーを選ぶことにより耐久性、安全性、快適性および景観性に優れた舗装です。</p>
          </div>
          <!-- ゴムチップ舗装 -->
          <div>
            <h4>ゴムチップ舗装</h4>
            <div class="hosou-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gomuchiphosou.jpg" alt=""></div>
            <p class="hosou-p">適度の弾力性を持ち年配者歩行時の足腰負担の軽減、幼児転倒時のけが防止等に優れた舗装です。<br>プールサイド、養護施設、公園の遊具回り等に使用されます。</p>
          </div>
          <!-- 土系舗装 -->
          <div>
            <h4>土系舗装</h4>
            <div class="hosou-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dokeihosou.jpg" alt=""></div>
            <p class="hosou-p">環境を重視した天然材量の舗装です。<br>見た目に美しく環境に優しい舗装です。<br> 土ならではの保水力と遮熱効果でヒートアイランド現象の緩和に適しています。</p>
          </div>
      </div>
      <!-- 施工費用 -->
      <h2 class="h2-nav">施工費用</h2>
      <div>
        <h4>工事価格について</h4>
        <h5>自社施工</h5>
        <p class="hiyou-p">弊社は受注した工事を外注することなく、すべて自社で施工いたします。<br>この為、余分な経費がかかりません</p>
        <h5>材料単価の圧縮</h5>
        <p class="hiyou-p">舗装工事は工事価格の約半分が材料費になります。<br>弊社の場合、材料の大量仕入れにより、この材料費を抑えることが可能です。</p>
        <h5>これが弊社の安さの秘密です！！</h5>
        <h4>お見積り</h4>
        <p class="hiyou-p">価格は現場の状況等によって変わります。<br>例：大型の工事車両が入れるか？<br>地盤の状況(地盤改良の必要性)？</p>
        <h5>詳しいお見積りにつきましては、お気軽にお問合せください。</h5>
        <div class="tel-otoiawase">
          <div>
            <!-- 電話番号 -->
            <p class="tel">tel 0274-23-3611</p>
            <p class="hiyou-p">電話でのお問い合わせはこちらから<br>営業担当:曽根</p>
          </div>
          <div>
            <!-- お問い合わせフォーム -->
           <p class="otoiawase"><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
           <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
           </svg>   お問い合わせ   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
           <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
           </svg></a></p>
            <p class="hiyou-p">お問い合わせフォームはこちらから</p>
          </div>
        </div>
      <!-- 依頼の流れ -->
          <h2 class="h2-nav">ご依頼の流れ</h2>
          <h4>①お客様のご要望伺い</h4>
          <p class="hiyou-p">まずはお電話もしくはお問合せフォームにてお問合せください。<br>駐車場工事、舗装工事に関する疑問・質問どんな些細なことでもご相談下さい。</p>
          <p class="soudan-p">ご相談は無料です。</p>
      <!-- 現地調査 -->
          <h4>②現地調査</h4>
          <p class="hiyou-p">弊社営業担当者もしくは工事担当者が直接現場に伺い、現地調査をいたします。<br>現場の状況を確認し、お客様のご要望に合ったご提案をさせていただきます。</p>
      <!-- お見積り -->
          <h4>③お見積もり</h4>
          <p class="hiyou-p">お客様のご要望と現場の状況に合わせて、お見積書を作成させていただきます。<br>予算・内容等にご納得いただければ、ご契約となります。</p>
          <p class="soudan-p">お見積もりまで無料です。</p>
      <!-- 工事開始 -->
          <h4>④工事開始</h4>
          <p class="hiyou-p">工程表に基づき、工事を進めさせていただきます。<br>弊社の優秀なスタッフにて、環境・品質・安全に十分気をつけて施工いたします。</p>
      <!-- 工事完成・引渡し -->
           <h4>⑤工事完成・引渡し</h4>
           <p class="hiyou-p">工事が完了しましたら、まずお客様にご確認いただきます。<br>万が一、気になる点、ご納得いただけない点等ございましたらお申し付けください。<br>確認終了後、お渡しとなります。</p>
      </div>

    </main>
<?php endwhile; else: ?>
<!-- コンテンツがないときのHTMLやPHPを書く -->
<?php endif; ?>
<?php get_footer(); ?>
