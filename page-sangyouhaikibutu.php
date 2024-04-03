<?php get_header(); ?>
<!-- ループの基本形の文章です -->
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<main>
      <!-- 施設案内 -->
      <h1 class="h1-title-1">産業廃棄物中間処理施設</h1>
      <h2 class="h2-nav-1">産業廃棄物中間処理施設のご案内</h2>
      <table>
        <tbody>
          <tr>
            <th>場所</th>
            <td>高橋建材株式会社 敷地内<br>産業廃棄物中間処理施設が許可になり稼働</td>
          </tr>
          <tr>
            <th>種類</th>
            <td>がれき類、ガラスくず・コンクリートくず及び陶磁器くず</td>
          </tr>
          <tr>
            <th>許可No.</th>
            <td>01020019455</td>
          </tr>
        </tbody>
      </table>
      <!-- 受入規格表 -->
      <h2 class="h2-nav-1">指定顧客コンクリートがら受入規格表</h2>
      <div class="ukeirehyou">
       <table>
        <tbody>
           <tr>
             <td>無筋60cm以下</td>
             <td>無筋60cm以上1m以下</td>
             <td>無筋1m以上2m以下</td>
           </tr>
           <tr>
             <td>有筋60cm以下</td>
             <td>有筋60cm以上1m以下</td>
             <td>有筋1m以上2m以下</td>
          </tr>
          <tr>
             <td>電柱・二次製品</td>
           </tr>
        </tbody>
       </table>
         <div>
            <p>石類（玉石・大理石・大谷石・墓石等）の受入はお断りをさせて頂きます。</p>
            <p>製品にならないもの（木屑や泥分ならびにガラスなど）はお引き取りできません。</p>
            <p>ガラの状況により、多少単価の変動がございます。</p>
         <p>深アオリダンプは上記より1.5倍増。少量の場合は台貫で計量させて頂きます。</p>
         </div>
      </div>
      <!-- クラッシャー写真 -->
      <div class="kurasha-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/rode6.jpg" alt=""></div>
      <p class="kurasha-p">移動式クラッシャー (ZR950JC)</p>

    </main>
<?php endwhile; else: ?>
<!-- コンテンツがないときのHTMLやPHPを書く -->
<?php endif; ?>
<?php get_footer(); ?>
