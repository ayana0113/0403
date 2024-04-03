<?php get_header(); ?>
    <main>
      <!--　ここからメイン画像  -->
        <div class="rode-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/rode6.jpg" alt="道路">
        </div>
      <!-- ここまでメイン画像 -->
      <!-- ここからお知らせ -->
    <!-- サブループ -->
        <div class="informaition">
            <h2 class="informaitionh1">お知らせ<br>INFOMAITION</h2>
            <div class="home-news">
                    <div class="home-news-box">
                    <?php $args = array(
                        'orderby' => 'date',
                        'order' => 'DESC',
                        );
                    $new_query = new WP_Query($args);
                    if($new_query->have_posts()): while($new_query->have_posts()): $new_query->the_post(); ?>
                    <!-- 表示させるコンテンツ -->
                    <dl>
                        <dt><time><?php echo get_the_date(); ?></time></dt>
                        <dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
                    </dl>
                    <!-- ここまでコンテンツ -->
                    <?php endwhile; wp_reset_postdata(); else: ?>
                        <p>お知らせはありません</p>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
      </div>
      <!-- ここまでがお知らせ -->
      <!-- ここからが会社挨拶 -->
         <div class="company-greeting2">
              <div class="box"><br>公共事業など数多くの舗装工事に<br>携わって参りました。<br><br>この豊富な経験と実績をもとに<br>品質と価格には絶対の自信があります。<br>駐車場工事、舗装工事で<br>お悩みのお客様がいらっしゃいましたら<br>是非ともお気軽にご相談ください。</div>
        </div>    
      <!-- ここまでが会社挨拶 -->
    <div class="flex">
      <!-- 会社案内・採用情報 -->
          <!-- ここからが会社案内 -->
               <h2 class="company-brochre-container"><a href="company.html">会社案内</a></h2>
          <!-- ここからが採用情報 -->
               <h2 class="recruit-container"><a href="<?php echo esc_url(home_url()); ?>/recruit">採用情報</a></h2>
      <!-- ここからが舗装工事・施工事例 -->
          <!-- ここからが舗装工事 -->
               <h2 class="hosou-container"><a href="<?php echo esc_url(home_url()); ?>/hosoukouji">舗装工事</a></h2>
          <!-- ここからが施工事例 -->
               <h2 class="works-container"><a href="<?php echo esc_url(home_url()); ?>/sekoujirei">施工事例</a></h2>
      <!-- ここからが砂利販売・お見積り -->
          <!-- ここからが砂利販売 -->
               <h2 class="sales-container"><a href="<?php echo esc_url(home_url()); ?>/jyari">砂利販売</a></h2>
          <!-- ここからがお見積り -->
               <h2 class="estimate-container"><a href="<?php echo esc_url(home_url()); ?>/">お見積り</a></h2>
    </div>
     <!-- ここからがグーグルマップ -->
     <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3217.3025101225694!2d139.04206407581353!3d36.25643397240714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601eeb4db3ac43e3%3A0x7021d8feb899fe24!2z6auY5qmL5bu65p2Q77yI5qCq77yJ!5e0!3m2!1sja!2sjp!4v1703753856395!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </div>
     <!--  ここまでがグーグルマップ-->
   </main>
   <?php get_footer(); 
