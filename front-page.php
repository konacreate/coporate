<?php get_header(); ?>

<main class="l-main">
  <div class="p-mv">
    <div class="p-mv__slider">
      <!-- Slider main container -->
      <div class="swiper js-mv-swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide p-mv__slide">
            <picture class="p-mv__img">
              <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mv1-pc.jpg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp/mv1-sp.jpg" alt="mv" decoding="async">
            </picture>
          </div>
          <!-- /p-mv__slide -->
          <div class="swiper-slide p-mv__slide">
            <picture class="p-mv__img">
              <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mv2-pc.jpg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp/mv2-sp.jpg" alt="mv" decoding="async">
            </picture>
          </div>
          <!-- /p-mv__slide -->
          <div class="swiper-slide p-mv__slide">
            <picture class="p-mv__img">
              <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mv3-pc.jpg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp/mv3-sp.jpg" alt="mv" decoding="async">
            </picture>
          </div>
          <!-- /p-mv__slide -->
        </div>
        <!-- /swiper-wrapper -->
      </div>
      <!-- /swiper -->
    </div>
    <!-- /p-mv__slider -->

    <div class="p-mv__heading-wrap">
      <div class="p-mv__heading--sub u-italic u-pc">
        <span>YOU CAN CHANGE</span>
        <span>THE WORLD</span>
      </div>
      <div class="p-mv__heading--sub u-italic u-sp">
        <span>YOU CAN</span>
        <span>CHANGE</span>
        <span>THE WORLD</span>
      </div>
      <h1 class="p-mv__heading--main">世界で活躍できるグローバルな人材を育てる</h1>
    </div>
  </div>
  <!-- 当社について -->
  <section class="p-top-about">
    <div class="l-inner p-top-about__inner">
      <div class="c-heading-top">
        <h2 class="c-heading-top__title --about">当社について</h2>
        <a href="" class="p-top-about__link--pc c-button-top u-pc">
          <span class="c-button-top__text">
            View more
            <span class="c-button-top__arrow"></span>
            <span class="c-button-top__circle"></span>
          </span>
        </a>
      </div>
      <div class="p-top-about__items">
        <div class="p-top-about__text">
          急速に広がったグローバル社会に対応できる人材を育成することで、文化・言語の垣根を越えたコミュニケーションを活発にし、一人でも多くの人が豊かに暮らせる世界を実現することを使命とする。<br><br>コミュニケーションスキル習得をサポートすることで一人でも多くのビジネスパーソンの視野を広げ、世界を舞台に新しい相乗効果を生む未来を創造する。<br><br>文化の垣根を越えた人と人とのつながりが新しい価値を生むことを信念とする。
        </div>
        <div class="p-top-about__img-wrapper">
          <figure class="p-top-about__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-img.jpg" alt="コミュニケーションスキル習得をサポート">
          </figure>
          <a href="" class="p-top-about__link--sp c-button-top u-sp">
            <span class="c-button-top__text">
              View more
              <span class="c-button-top__arrow"></span>
              <span class="c-button-top__circle"></span>
            </span>
          </a>
          <div class="p-top-about__bg--base p-top-about__bg--bottom u-sp"></div>
        </div>
      </div>
    </div>
    <div class="p-top-about__bg p-bg"></div>
    <div class="p-top-about__bg--base p-top-about__bg--right u-pc"></div>
  </section>

  <!-- サービス -->
  <section class="l-top-service p-top-service">
    <div class="l-inner">
      <div class="c-heading-top">
        <h2 class="c-heading-top__title --service">サービス</h2>
        <a href="" class="c-button-top u-pc">
          <span class="c-button-top__text --black">
            View more
            <span class="c-button-top__arrow --black"></span>
            <span class="c-button-top__circle --fill"></span>
          </span>
        </a>
      </div>
      <div class="p-top-service__cards">
        <div class="p-top__service__card">
          <div class="p-top__service__number u-italic --01">01</div>
          <div class="p-top-service__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-1.jpg" alt="ビジネス英語研修">
            <h3 class="p-top-service__lead"><span>ビジネス英語研修</span></h3>
          </div>
          <!-- /p-top-service__img -->
          <div class="p-top-service__body">
            <p class="p-top-service__text">ビジネス英会話はこれからの時代、すべてのビジネスパーソンが学ぶべき必須スキルと考えおります。海外にビジネス展開する際にはもちろんのこと、日本国内でも英会話コミュニケーションができることによってチャンスが掴める場面があります。</p>
          </div>
          <!-- /p-top-service__body -->
        </div>
        <!-- /p-top-service__card -->
        <div class="p-top__service__card">
          <div class="p-top__service__number u-italic --02">02</div>
          <div class="p-top-service__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-2.jpg" alt="ビジネス英語研修">
            <h3 class="p-top-service__lead"><span>異文化</span><span>コミュニケーション研修</span></h3>
          </div>
          <!-- /p-top-service__img -->
          <div class="p-top-service__body">
            <p class="p-top-service__text">急速にグローバル化が進んでおり、ビジネスの場面に限らず様々な文化的背景を持つ者同士の交流はもはや日常的な光景となりました。<br>言語や文化が異なる相手を理解することで世界が広がり、新たなビジネスチャンスに巡り会うことは少なくありません。</p>
          </div>
          <!-- /p-top-service__body -->
        </div>
        <!-- /p-top-service__card -->
        <div class="p-top__service__card">
          <div class="p-top__service__number u-italic --03">03</div>
          <div class="p-top-service__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-3.jpg" alt="ビジネス留学サポートプログラム">
            <h3 class="p-top-service__lead">
              <span>ビジネス留学</span>
              <span>サポートプログラム</span>
            </h3>
          </div>
          <!-- /p-top-service__img -->
          <div class="p-top-service__body">
            <p class="p-top-service__text">将来的に海外で働きたい方に向けた講座をご用意しております。一般的には3ヶ月〜1年の期間で基本的な英会話スキルと、海外でのビジネスマナー習得を目指します。<br>通常の語学留学では得られないビジネスの場で通用するコミュニケーションスキル習得に重点をおいておりますので、海外でビジネス展開する際に自信を持って活動することができるようになります。</p>
          </div>
          <!-- /p-top-service__body -->
        </div>
        <!-- /p-top-service__card -->
      </div>
      <!-- /p-top-service__cards -->
      <a href="" class="p-top-service__link--sp c-button-top u-sp">
        <span class="c-button-top__text --blue">
          View more
          <span class="c-button-top__arrow --blue"></span>
          <span class="c-button-top__circle --fill"></span>
        </span>
      </a>
    </div>
    <!-- /l-inner -->
    <div class="p-bg p-top-service__bg"></div>
  </section>
  <!-- 導入事例 -->
  <section class="l-top__case p-top-case">
    <div class="l-inner">
      <div class="c-heading-top">
        <h2 class="c-heading-top__title --case --white">導入事例</h2>
        <a href="" class="p-top-about__link--pc c-button-top u-pc">
          <span class="c-button-top__text">
            View more
            <span class="c-button-top__arrow"></span>
            <span class="c-button-top__circle"></span>
          </span>
        </a>
      </div>
      <!-- /c-heading-top -->
      <div class="p-top-case__cards">
        <a href="" class="p-top-case__card">
          <div class="p-top-case__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aaa.png" alt="">
          </div>
          <div class="p-top-case__body">
            <h3 class="p-top-case__company">AAA株式会社　様</h3>
            <p class="p-top-case__category">ビジネス英語研修</p>
          </div>
        </a>
        <!-- /p-top-case__card -->
        <a href="" class="p-top-case__card">
          <div class="p-top-case__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bbb.png" alt="">
          </div>
          <div class="p-top-case__body">
            <h3 class="p-top-case__company">合同会社BBB　様</h3>
            <p class="p-top-case__category">異文化コミュニケーション</p>
          </div>
        </a>
        <!-- /p-top-case__card -->
        <a href="" class="p-top-case__card">
          <div class="p-top-case__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ccc.png" alt="">
          </div>
          <div class="p-top-case__body">
            <h3 class="p-top-case__company">合同会社CCC　様</h3>
            <p class="p-top-case__category">ビジネス留学プログラム</p>
          </div>
        </a>
        <!-- /p-top-case__card -->
        <a href="" class="p-top-case__card">
          <div class="p-top-case__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ddd.png" alt="">
          </div>
          <div class="p-top-case__body">
            <h3 class="p-top-case__company">DDD株式会社　様</h3>
            <p class="p-top-case__category">異文化コミュニケーション</p>
          </div>
        </a>
        <!-- /p-top-case__card -->
        <a href="" class="p-top-case__card">
          <div class="p-top-case__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/eee.png" alt="">
          </div>
          <div class="p-top-case__body">
            <h3 class="p-top-case__company">EEE株式会社　様</h3>
            <p class="p-top-case__category">ビジネス留学プログラム</p>
          </div>
        </a>
        <!-- /p-top-case__card -->
        <a href="" class="p-top-case__card">
          <div class="p-top-case__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fff.png" alt="">
          </div>
          <div class="p-top-case__body">
            <h3 class="p-top-case__company">FFF株式会社　様</h3>
            <p class="p-top-case__category">ビジネス英語研修</p>
          </div>
        </a>
        <!-- /p-top-case__card -->
      </div>
      <!-- /p-top-case__cards -->
      <a href="" class="p-top-case__link--sp c-button-top u-sp">
        <span class="c-button-top__text">
          View more
          <span class="c-button-top__arrow"></span>
          <span class="c-button-top__circle"></span>
        </span>
      </a>
    </div>
  </section>
  <!-- 新着情報 -->
  <section class="l-top__news p-top-news">
    <div class="l-inner">
      <div class="c-heading-top">
        <h2 class="c-heading-top__title --news">新着情報</h2>
        <a href="" class="c-button-top u-pc">
          <span class="c-button-top__text --black">
            View more
            <span class="c-button-top__arrow --black"></span>
            <span class="c-button-top__circle --fill"></span>
          </span>
        </a>
      </div>
      <div class="p-top-news__boxes">
        <a class="p-top-news__box">
          <div class="p-top-news__meta">
            <p class="p-top-news__category">
              営業時間
            </p>
            <time datetime="" class="p-top-news__time">2021.07.20</time>
          </div>
          <h3 class="p-top-news__title">お盆期間中の営業について</h3>
        </a>
        <!-- /p-top-news__box -->
        <a class="p-top-news__box">
          <div class="p-top-news__meta">
            <p class="p-top-news__category">
              その他
            </p>
            <time datetime="" class="p-top-news__time">2021.06.01</time>
          </div>
          <h3 class="p-top-news__title">新型コロナウイルス対策ご協力のお願い</h3>
        </a>
        <!-- /p-top-news__box -->
        <a class="p-top-news__box">
          <div class="p-top-news__meta">
            <p class="p-top-news__category">
              その他
            </p>
            <time datetime="" class="p-top-news__time">2021.05.01</time>
          </div>
          <h3 class="p-top-news__title">オンライン英会話スクール「グッドイングリッシュオンライン株式会社」との業務提携について</h3>
        </a>
        <!-- /p-top-news__box -->
      </div>
      <!-- /p-top-news__boxes -->
      <a href="" class="p-top-news__link--sp c-button-top u-sp">
        <span class="c-button-top__text --blue">
          View more
          <span class="c-button-top__arrow --blue"></span>
          <span class="c-button-top__circle --fill"></span>
        </span>
      </a>
      <!-- /p-top-news__link--sp -->
    </div>
    <!-- /l-inner -->
    <div class="p-top-news__bg p-bg"></div>
  </section>

  <!--  フッター -->
  <footer class="l-footer p-footer">
    <div class="p-footer__contact-wrapper">
      <div class="p-footer__download">
        <div class="p-footer__heading--sub u-italic">download</div>
        <div class="p-footer__heading--main">資料ダウンロード</div>
        <a href="" class="p-footer__link c-button__tertiary"><span>View more
            <span class="c-button--arrow">&rarr;</span>
          </span></a>
        <!-- /p-footer__link -->
      </div>
      <div class="p-footer__contact">
        <div class="p-footer__heading--sub u-italic">contact</div>
        <div class="p-footer__heading--main">お問い合わせ</div>
        <a href="" class="p-footer__link c-button__tertiary"><span>View more
            <span class="c-button--arrow">&rarr;</span>
          </span>
        </a>
        <!-- /p-footer__link -->
      </div>
      <!-- /p-footer__contact -->
    </div>
    <!-- /p-footer__contact-wrapper -->
    <div class="p-footer__bottom">
      <div class="p-footer__logo u-italic">global standard</div>
      <address class="p-footer__address">
        <span>〒550-1000　大阪市西区土佐堀9-5-5<br>TEL　06-123-4567<br>FAX　06-123-4568</span>
      </address>
      <!-- /p-footer__address -->
      <div class="p-footer__copyright">
        <small>&copy;2021 Global Standard. All Rights Reserved.</small>
      </div>
    </div>
    <!-- /p-footer__bottom -->
    <button class="c-to-top">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-top.svg" alt="ページトップボタン">
    </button>
  </footer>


</main>

<footer class="l-footer"></footer>
<?php wp_footer(); ?>
</body>

</html>