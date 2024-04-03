<?php get_header(); ?>

<!-- ループの基本形の文章です -->
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<main>
      <!-- 採用情報 -->
      <h1 class="h1-title">採用情報</h1>
      <p class="recruit-p">新卒・中途共に若干名募集しています。<br>施工管理技術者歓迎<br><br>※お問い合わせ先<br>tel 0274-23-3611<br>営業部  曽根まで</p>

      <!-- お問い合わせフォーム -->
     <p class="otoiawase"> <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
      <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
      </svg>   お問い合わせ   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
      <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
      </svg></a></p>
      <p class="setubi-p">お問い合わせフォームからもどうぞ</p>

      <!-- 新卒採用 -->
      <h2 class="h2-nav">新卒採用</h2>
      <table>
        <tbody>
          <tr>
            <th>募集内容</th>
            <td>土木系技術者・重機オペレーター及び土木技能者・施工管理技士</td>
          </tr>
          <tr>
            <th>勤務地</th>
            <td>藤岡市</td>
          </tr>
          <tr>
            <th>勤務時間</th>
            <td>7:45～17:00(実働7.45時間) ※現場状況による</td>
          </tr> 
          <tr>
            <th>月給</th>
            <td>220,000〜  ※施工管理技士は応相談</td>
          </tr>
          <tr>
            <th>休日</th>
            <td>日曜日 祝日 夏季 年末年始 当社カレンダーによる
            </td>
          </tr>
          <tr>
            <th>待遇</th>
            <td>昇給年1回(7月)<br>賞与年2回(6月、12月)<br>決算賞与<br>社会保険完備</td>
          </tr>
          <tr>
            <th>手当</th>
            <td>時間外手当<br>深夜手当<br>現場手当<br>通勤手当  他</td>
          </tr>
          <tr>
            <th>研修期間</th>
            <td>あり(3ヶ月)</td>
          </tr>
          <tr>
            <th>応募方法</th>
            <td>お問い合わせフォームまたはお電話でご応募ください</td>
          </tr>
          <tr>
            <th>提出書類</th>
            <td>履歴書(写真貼付)<br>成績証明書<br>卒業見込証明書<br>健康診断書</td>
          </tr>
          <tr>
            <th>選考方法</th>
            <td>一次選考(書類選考)<br>二次選考(面接)</td>
          </tr>
        </tbody>
      </table>

      <!-- 中途採用 -->
      <h2 class="h2-nav">中途採用</h2>
      <table>
        <tbody>
          <tr>
            <th>募集内容</th>
            <td>土木系技術者・重機オペレーター及び土木技能者・施工監理技術者</td>
          </tr>
          <tr>
            <th>勤務地</th>
            <td>藤岡市</td>
          </tr>
          <tr>
            <th>勤務時間</th>
            <td>7:45～17:00(実働7.45時間) ※現場状況による</td>
          </tr>
          <tr>
            <th>月給</th>
            <td>経験・スキルを考慮の上、当社規定に基づき決定</td>
          </tr>
          <tr>
            <th>休日</th>
            <td>日曜日 祝日 夏季 年末年始 当社カレンダーによる</td>
          </tr>
          <tr>
            <th>待遇</th>
            <td>昇給年1回(7月)<br>賞与年2回(6月、12月)<br>決算賞与<br>社会保険完備</td>
          </tr>
          <tr>
            <th>手当</th>
            <td>時間外手当<br>深夜手当<br>現場手当<br>通勤手当  他</td>
          </tr>
          <tr>
            <th>研修期間</th>
            <td>あり(3ヶ月)</td>
          </tr>
          <tr>
            <th>応募方法</th>
            <td>お問い合わせフォームまたはお電話でご応募ください</td>
          </tr>
          <tr>
            <th>提出書類</th>
            <td>履歴書(写真貼付)<br>職務経歴書</td>
          </tr>
          <tr>
            <th>選考方法</th>
            <td>一次選考(書類選考)<br>二次選考(面接)</td>
          </tr>
        </tbody>
      </table>

    </main>
<?php endwhile; else: ?>
<!-- コンテンツがないときのHTMLやPHPを書く -->
<?php endif; ?>
<?php get_footer(); ?>
