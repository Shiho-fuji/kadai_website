<?php get_header();?>


  <main>
    <div class="top-mv">
      <div class="mv-text">
        <h1 class="mv-text1"><span class="dashed-line mv-text-left">根本的な症状改善を&thinsp;</span><br><span class="dashed-line mv-text-right">サポートします&thinsp;</span></h1>
      </div>

      <div class="swiper-mv-img">
        <!-- Slider main container -->
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/topmv-sp.png">
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/topmv-pc.png">
                <img decoding="async" srcset="<?php echo get_template_directory_uri(); ?>/img/topmv-pc.png" alt="メインビジュアル" loading="lazy" class="mv-img">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/top-mv2-sp.png">
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/top-mv2-pc.png">
                <img decoding="async" srcset="<?php echo get_template_directory_uri(); ?>/img/top-mv2-pc.png" alt="メインビジュアル" loading="lazy" class="mv-img">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/top-mv3-sp.png">
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/top-mv3-pc.png">
                <img decoding="async" srcset="<?php echo get_template_directory_uri(); ?>/img/top-mv3-pc.png" alt="メインビジュアル" loading="lazy" class="mv-img">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/top-mv4-sp.png">
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/top-mv4-pc.png">
                <img decoding="async" srcset="<?php echo get_template_directory_uri(); ?>/img/top-mv4-pc.png" alt="メインビジュアル" loading="lazy" class="mv-img">
              </picture>
            </div>
          </div>
        
          <!-- If we need scrollbar -->
          <div class="swiper-pagination"></div>
        </div>
      </div>


    </div>


    <section id="news">
      <div class="news-gp">
        <div class="news-title">
          <h2 class="news-news">News</h2>
          <p class="news-know">お知らせ</p>
        </div>
        <div class="news-text-gp">
          <div class="date-and-time">
            <p class="news-date">2022/12/21</p>
            <p class="news-day">営業日時</p>
          </div>
          <p>年末年始の営業時間について</p>
        </div>
      </div>
      <a href="Information.html" class="news-link">→ お知らせ一覧</a>
    </section>


    <section id="concept">
      <div class="concept">
        <div class="concept-gp">
          <div class="concept-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/concept01.png" class="concept-img01" alt="コンセプト、整体中の画像">
            <img src="<?php echo get_template_directory_uri(); ?>/img/concept02.png" class="concept-img02" alt="コンセプト、整体中の画像">
            <img src="<?php echo get_template_directory_uri(); ?>/img/concept03.png" class="concept-img03" alt="コンセプト、整体中の画像">
          </div>
          <div class="concept-main">
            <div class="concept-title">
              <h2 class="concept-main-title"><img src="<?php echo get_template_directory_uri(); ?>/img/Union.png" class="concept-title-img" alt="タイトルの横の画像">Concept</h2>
              <p class="concept-title-sub">特長</p>
            </div>
            <div>
              <p class="concept-text">
                日々変化する
                <br>カラダと心を癒すパーソナル
                <br>トレーナーとして
              </p>
            </div>
            <div>
              <P class="concept-example">
                当院では、問診にてお客様の症状や生活スタイル、ご希望を丁寧にお伺いした上で施術方針を立てていきます。
              </P>
              <P class="concept-example">
                また、根本的に症状を改善するために、お客様ご自身で行えるケアやストレッチもお伝えします。
              </P>
              <P class="concept-example">
                ご不安な点や疑問点などお気軽にご相談くださいませ。
              </p>
            </div>
            <div>
              <a href="about.html" class="concept-link">→ 当院について</a>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="course">
      <div class="course">
        <div class="course-title">
          <h2 class="course-title-child">
            <img src="<?php echo get_template_directory_uri(); ?>/img/left-diagonal.png" alt="左側の斜線" class="diagonal">
            コース・料金
            <img src="<?php echo get_template_directory_uri(); ?>/img/right-diagonal.png" alt="右側の斜線" class="diagonal">
          </h2>
        </div>
        <div class="course-content">
          <p>当院では保険診療、自費診療と<br>もにご対応しております。</p>
        </div>
        <div>
          <div class="course-gp">
            <div class="course-child">
              <img src="<?php echo get_template_directory_uri(); ?>/img/cose01.png" class="course-img" alt="コースの診療の画像">
              <p class="course-clinical">保険診療</p>
              <ul class="course-list">
                <li class="course-list1">骨折・打撲・捻挫・脱臼</li>
                <li class="course-list1">スポーツ診療</li>
                <li class="course-list1">交通事故</li>
              </ul>
            </div>
            <div class="course-child">
              <img src="<?php echo get_template_directory_uri(); ?>/img/cose02.png" class="course-img" alt="コースの診療の画像">
              <p class="course-clinical">自費診療</p>
              <ul class="course-list">
                <li class="course-list1">腰痛・肩こり</li>
                <li class="course-list1">冷え性・だるさ</li>
                <li class="course-list1">骨盤・背骨矯正</li>
              </ul>
            </div>
          </div>
        </div>
        <a href="" class="course-link">→ コース・料金詳細へ</a>
      </div>
    </section>
    

    <section id="kyaku">
      <picture>
        <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/kyaku00.png">
        <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/kyaku-pc.png">
        <img decoding="async" srcset="<?php echo get_template_directory_uri(); ?>/img/kyaku-pc.png" alt="お客様に寄り添う" loading="lazy" class="kyaku-mv">
      </picture>
      <div class="kyaku">
        <div>
          <h2 class="kyaku-title">
            <img src="<?php echo get_template_directory_uri(); ?>/img/left-diagonal.png" alt="左側の斜線" class="diagonal">
            お客様の声
            <img src="<?php echo get_template_directory_uri(); ?>/img/right-diagonal.png" alt="右側の斜線" class="diagonal">
          </h2>
          <p class="kyaku-title-text">痛みの改善に加えて自分で予防<br>もできる様になりました</p>
        </div>
        <ul class="kyaku-gp">
          <li class="kyaku-voice">
            <div class="kyaku-img-parent">
              <img src="<?php echo get_template_directory_uri(); ?>/img/Kyaku1.png" alt="お客様のお顔" class="kyaku-voice-img">
            </div>
            <p class="kyaku-name">S・K様&emsp;30代女性</p>
            <p class="kyaku-comment">1ヶ月で腰の痛みが軽減しました。自分で自宅でできるケアも教えていただき、お任せしてよかったです。</p>
          </li>
          <li class="kyaku-voice">
            <div class="kyaku-img-parent">
              <img src="<?php echo get_template_directory_uri(); ?>/img/Kyaku2.png" alt="お客様のお顔" class="kyaku-voice-img">
            </div>
            <p class="kyaku-name">T・M様&emsp;40代男性</p>
            <p class="kyaku-comment">マラソンで右膝が痛むので、施術を受けています。なぜ痛みが生じるのかを身体の仕組みから教えていただき、普段の練習メニューも工夫できています。</p>
          </li>
          <li class="kyaku-voice">
            <div class="kyaku-img-parent">
              <img src="<?php echo get_template_directory_uri(); ?>/img/Kyaku3.png" alt="お客様のお顔" class="kyaku-voice-img">
            </div>
            <p class="kyaku-name">S・T様&emsp;60代女性</p>
            <P class="kyaku-comment">転倒して足を骨折したのをきっかけに、痛みの軽減と筋肉の衰えを防ぐために方針を立てていただいています。今は毎日元気に近所を散歩できています。</P>
          </li>
        </ul>
        <a href="" class="kyaku-link">→ お客様の声一覧へ</a>
      </div>
    </section>
  </main>



  <?php wp_footer(); ?>