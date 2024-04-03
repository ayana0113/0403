<?php get_header(); ?>

<!-- ループの基本形の文章です -->
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<main>
            <!-- 会社案内 -->
            <h1 class="h1-title">会社案内</h1>
            <h2 class="h2-nav">ご挨拶</h2>
            <div class="sign">
                <p class="goaisatu2">会社が存続していくのに最も必要なことは、<br>社会から必要とされ続けることです。<br><br>当社は、地域の皆様並びに建設業者様に<br>安価で良質の各種建設用骨材を供給すると共に、<br>地域社会のインフラ整備の手伝いをし、<br>社会に貢献していきたいと考えています。</p>
                <div class="logo-img2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"></div>
            </div>
            <div class="takahashikenji"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/2.jpg"></div>
            <!-- 経営方針 -->
            <div class="keieihoushin">
                <h2 class="h2-nav">経営方針</h2>
                <div class="keiei-1-2-3">
                    <div class="1-people">
                        <h3 class="keiei-h3">1.人間中心</h3>
                        <p class="keiei-p">人間は会社・経営の基本であり総てである。</P>
                    </div>
                    <div class="2-safety">
                        <h3 class="keiei-h3">2.安全衛生</h3>
                        <p class="keiei-p">人命尊重のための安全は総てに優先する。</p>
                    </div>
                    <div class="3-zaimu">
                        <h3 class="keiei-h3">3.健全財務</h3>
                        <p class="keiei-p">健全な財務は経営にとって不可欠である。</p>
                    </div>
                </div>
                <div class="keiei-4-5-6">
                    <div class="4-hinshitu">
                        <h3 class="keiei-h3">4.品質重視</h3>
                        <p class="keiei-p">総ての品質向上は会社信頼の基礎である。</p>
                    </div>
                    <div class="5-hinshitu">
                        <h3 class="keiei-h3">5.顧客満足</h3>
                        <p class="keiei-p">顧客満足は成長の要締である。</p>
                    </div>
                    <div class="6-hinshitu">
                        <h3 class="keiei-h3">6.論理</h3>
                        <p class="keiei-p">法令・論理尊種は企業の義務である。</p>
                    </div>
                </div>
            </div>
            <!-- 会社概要 -->
            <h2 class="h2-nav">会社概要</h2>
            <table>
                <tbody>
                    <tr>
                        <th>名称</th>
                        <td>高橋建材株式会社</td>
                    </tr>
                    <tr>
                        <th>本社</th>
                        <td>群馬県藤岡市白石1651-18</td>
                    </tr>
                    <tr>
                        <th>高崎営業所</th>
                        <td>群馬県高崎市鍛冶町1-3</td>
                    </tr>
                    <tr>
                        <th>太田支店</th>
                        <td>群馬県太田市世良田町1969-18 2F</td>
                    </tr>
                    <tr>
                        <th>埼玉支店</th>
                        <td>埼玉県児玉郡神川町元原61番地2 オネスティー元原205号</td>
                    </tr>
                    <tr>
                        <th>資機材部</th>
                        <td>群馬県藤岡市白石1651-18</td>
                    </tr>
                    <tr>
                        <th>代表取締役会長</th>
                        <td>髙橋 謙司</td>
                    </tr>
                    <tr>
                        <th>設立</th>
                        <td>昭和45年11月25日</td>
                    </tr>
                    <tr>
                        <th>資本金</th>
                        <td>24,000千円</td>
                    </tr>
                    <tr>
                        <th>営業品目</th>
                        <td>土木工事・舗装工事・建築工事・砕石(砂利)販売<br>産業廃棄物中間処理<br>産業廃棄物収集運搬<br><br>【工事部】<br>土木工事・アスファルト舗装工事・建築工事<br>外構工事・宅地造成工事・水道工事<br>下水道工事・補修工事 他<br><br>【建材部】<br>各種砕石(砂利)販売<br>RC(再生採石)生産販売<br>産業廃棄物中間処理<br>(がれき類、ガラスくず・コンクリートくず及び陶磁器くず)<br>産業廃棄物収集運搬</td>
                    </tr>
                    <tr>
                        <th>主要取引銀行</th>
                        <td>群馬銀行・しののめ信用金庫</td>
                    </tr>
                    <tr>
                        <th>関連会社</th>
                        <td>株式会社RPC</td>
                    </tr>
                </tbody>
            </table>

             <!-- 沿革 -->
             <h2 class="h2-nav">沿革</h2>
             <table>
                <tbody>
                    <tr>
                        <th>昭和31年</th>
                        <td>砂利販売業・土砂採集販売として初代、高橋 昇が自宅にて個人創業</td>
                    </tr>
                    <tr>
                        <th>昭和43年</th>
                        <td>鮎川の河川敷に砂利選別プラントを開設</td>
                    </tr>
                    <tr>
                        <th>昭和45年</th>
                        <td>株式会社設立</td>
                    </tr>
                    <tr>
                        <th>昭和57年</th>
                        <td>建設業許可取得に伴い同地で土木工事部門を併設</td>
                    </tr>
                    <tr>
                        <th>昭和58年</th>
                        <td>産業廃棄物収集運搬業を開始</td>
                    </tr>
                    <tr>
                        <th>平成 3年</th>
                        <td>砂利生産施設を分離し秩父コンクリートの出資を得て高橋鉱業を創業</td>
                    </tr>
                    <tr>
                        <th>平成 5年</th>
                        <td>舗装工事業を開始</td>
                    </tr>
                    <tr>
                        <th>平成13年</th>
                        <td>現地にて骨材販売センター・事務所・資材センターを集約</td>
                    </tr>
                    <tr>
                        <th>平成18年</th>
                        <td>産業廃棄物処分業許可の取得・移動式破砕中間処理業の許可取得</td>
                    </tr>
                    <tr>
                        <th>平成19年</th>
                        <td>RC(再生砕石)工場稼働開始</td>
                    </tr>
                    <tr>
                        <th>平成25年</th>
                        <td>環境事業(太陽光発電)を新設</td>
                    </tr>
                    <tr>
                        <th>平成27年</th>
                        <td>埼玉支店開設</td>
                    </tr>
                    <tr>
                        <th>令和 2年</th>
                        <td>太田支店開設</td>
                    </tr>
                    <tr>
                        <th>令和 5年</th>
                        <td>埼玉支店 東松山から児玉郡神川町に移転</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>現在に至る</td>
                    </tr>
                </tbody>
             </table>
             
             <!-- 登録・許可 -->
             <div class="touroku">
                <h2 class="h2-nav">登録・許可</h2>
                <div class="touroku-1-2-3">
                     <div class="touroku-1">
                         <h3 class="touroku-h3">1.建設業許可</h3>
                         <p class="touroku-p">国土交通大臣 許可(特-1)第25441号<br>(土木工事業,石工事業,舗装工事業,塗装工事業,<br>とび・土工工事業鋼構造物工事工,<br>しゅんせつ工事業,水道施設工事業)<br>国土交通大臣 許可(般-1)第25441号<br>(建築工事業,屋根工事業,内装仕上工事業,<br>大工工事業,タイル・れんが・ﾌﾞﾛｯｸ工事業)</p>
                     </div>
                     <div class="touroku-2">
                         <h3 class="touroku-h3">2.産業廃棄物処分業許可</h3>
                         <p class="touroku-p">群馬県知事許可番号01020019455<br>群馬県知事設置許可番号339-0号<br>産業廃棄物の種類<br>中間処理(破砕(移動式))<br>(がれき類、ガラスくず・コンクリートくず及び陶磁器くず)<br>能力968t/日</p>
                     </div>
                     <div class="touroku-3">
                         <h3 class="touroku-h3">3.産業廃棄物収集運搬許可</h3>
                         <p class="touroku-p">群馬県許可番号01000019455<br>埼玉県許可番号01104019455</p>
                     </div>
                </div>
                <div class="touroku-4-5">     
                     <div class="touroku-4">
                         <h3 class="touroku-h3">4.砂利採取業登録</h3>
                         <p class="touroku-p">群馬第313号</p>
                     </div>
                     <div class="touroku-5">
                        <h3 class="touroku-h3">5.砕石業登録</h3>
                        <p class="touroku-p">群馬県砕石登録第150号</p>
                     </div>
                </div>     
             </div>
             <!-- 加入団体 -->
             <div class="kanyu">
                <h2 class="h2-nav">加入団体</h2>
                <p class="kanyu-p">社団法人 群馬県建設業協会</p>
                <p class="kanyu-p">公益社団法人 群馬県環境資源創生協会</p>
                <p class="kanyu-p">烏川・神流資源開発協同組合 他</p>
             </div>
         </main>

<?php endwhile; else: ?>
<!-- コンテンツがないときのHTMLやPHPを書く -->
<?php endif; ?>
<?php get_footer(); ?>
