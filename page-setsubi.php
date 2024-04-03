<?php get_header(); ?>
<!-- ループの基本形の文章です -->
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<main>
            <!-- 会社案内 -->
            <h1 class="h1-title">設備概要</h1>
            <h2 class="h2-nav">敷地案内</h2>
            <div class="plant">
              <div>
                 <h4>事務所資機材部敷地</h4>
                 <p class="setubi-p">残土置場 3,000㎡</p>
                 <p class="setubi-p">ストックヤード 8,000㎡</p>
                 <p class="setubi-p">その他含めて総面積 43,000㎡</p>
              </div>
              <div>
                 <h4>RCプラント</h4>
                 <p class="setubi-p">廃棄物中間処理(破砕(移動式))</p>
                 <p class="setubi-p">(がれき類、ガラスくず・コンクリートくず及び陶磁器くず)</p>
                 <p class="setubi-p">許可No.1020019455</p>
                 <p class="setubi-p">968t/日</p>
              </div>
            </div>

            <!-- 車両機械 -->
            <h2 class="h2-nav">主な車両機械</h2>
            <div class="sharyo-kind">
              <div>
                <h4>アスファルトフィニッシャー</h4>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dscn3609.jpg" alt="">
                <table>
                  <tbody>
                    <tr>
                      <th class="th1">大型フィニッシャー</th>
                      <td>2台</td>
                    </tr>
                    <tr>
                      <th class="th1">中型タイヤフィニッシャー</th>
                      <td>1台</td>
                    </tr>
                    <tr>
                      <th class="th1">小型フィニッシャー</th>
                      <td>2台</td>
                    </tr>
                    <tr>
                      <th class="th1">スーパーミニフィニッシャー</th>
                    <td>1台</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div>
                <h4>ローラー関係</h4>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dscn3596.jpg" alt="">
                <table>
                  <tbody>
                    <tr>
                      <th class="th1">タイヤローラー</th>
                      <td>2台</td>
                    </tr>
                    <tr>
                      <th class="th1">コンバインドローラー</th>
                      <td>2台</td>
                    </tr>
                    <tr>
                      <th class="th1">3tタンデムローラー</th>
                      <td>1台</td>
                    </tr>
                    <tr>
                      <th class="th1">3tタイヤローラー</th>
                      <td>1台</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div>
                <h4>整地機械</h4>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dscn2082.jpg" alt="">
                <table>
                  <tbody>
                    <tr>
                      <th class="th1">レーザーブルトーザー</th>
                      <td>1台</td>
                    </tr>
                    <tr>
                      <th class="th1">ブルトーザーD3G</th>
                      <td>1台</td>
                    </tr>
                    <tr>
                      <th class="th1">ブルトーザーBD2</th>
                      <td>2台</td>
                    </tr>
                    <tr>
                      <th class="th1">グレーダー</th>
                      <td>1台</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div>
                <h4>掘削機械</h4>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dscn3603.jpg" alt="">
                <table>
                  <tbody>
                    <tr>
                      <th class="th1">0.7m3級</th>
                      <td>1台</td>
                    </tr>
                    <tr>
                      <th class="th1">0.45m3級</th>
                      <td>2台</td>
                    </tr>
                    <tr>
                      <th class="th1">ミニユンボ</th>
                      <td>3台</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div>
                <h4>積込機械</h4>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dscn3601.jpg" alt="">
                <table>
                  <tbody>
                    <tr>
                      <th class="th1">大型タイヤショベル</th>
                      <td>1台</td>
                    </tr>
                    <tr>
                      <th class="th1">中型タイヤショベル</th>
                      <td>2台</td>
                    </tr>
                    <tr>
                      <th class="th1">小型タイヤショベル</th>
                      <td>2台</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div>
                <h4>車両関係</h4>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dscn3530.jpg" alt="">
                <table>
                  <tbody>
                    <tr>
                      <th class="th1">大型回送車25t</th>
                      <td>2台</td>
                    </tr>
                    <tr>
                      <th class="th1">大型ダンプ</th>
                      <td>2台</td>
                    </tr>
                    <tr>
                      <th class="th1">8tダンプ</th>
                      <td>1台</td>
                    </tr>
                    <tr>
                      <th class="th1">4tダンプ</th>
                      <td>2台</td>
                    </tr>
                    <tr>
                      <th class="th1">3tダンプ</th>
                      <td>2台</td>
                    </tr>
                    <tr>
                      <th class="th1">2tダンプ</th>
                      <td>1台</td>
                    </tr>
                    <tr>
                      <th class="th1">3tユニック</th>
                      <td>1台</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <!-- フッター -->
        </main>
<?php endwhile; else: ?>
<!-- コンテンツがないときのHTMLやPHPを書く -->
<?php endif; ?>
<?php get_footer(); ?>
