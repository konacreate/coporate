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
        <a href="" class="p-top-about__link c-button-top">
          <span class="c-button-top__text">
            View more
            <span class="c-button-top__arrow"></span>
            <span class="c-button-top__circle"></span>
          </span>
        </a>
      </div>
      <div class="p-top-about__text">
        急速に広がったグローバル社会に対応できる人材を育成することで、文化・言語の垣根を越えたコミュニケーションを活発にし、一人でも多くの人が豊かに暮らせる世界を実現することを使命とする。<br><br>コミュニケーションスキル習得をサポートすることで一人でも多くのビジネスパーソンの視野を広げ、世界を舞台に新しい相乗効果を生む未来を創造する。<br><br>文化の垣根を越えた人と人とのつながりが新しい価値を生むことを信念とする。
      </div>
      <div class="p-top-about__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-img.jpg" alt="コミュニケーションスキル習得をサポート">
      </div>
    </div>
    <div class="p-top-about__bg p-bg"></div>
    <div class="p-top-about__bg--right"></div>
  </section>

  <!-- サービス -->
  <section class="l-top-service p-top-service">
    <div class="l-inner">
      <div class="c-heading-top">
      <h2 class="c-heading-top__title --service">サービス</h2>
      <a href="" class="c-button-top">
        <span class="c-button-top__text --black">
          View more
          <span class="c-button-top__arrow --black"></span>
          <span class="c-button-top__circle --fill"></span>
        </span>
      </a>
      </div>
      <div class="p-top-service__cards">
        <div class="p-top__service__card">
          <div class="p-top__service__number">01</div>
          <div class="p-top__service__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-1.jpg" alt="ビジネス英語研修">
          </div>
          <h3 class="p-top-service__lead">ビジネス英語研修</h3>
          <!-- /p- -->
          <div class="p-top-service__body">
            <p class="p-top-service__text">ビジネス英会話はこれからの時代、すべてのビジネスパーソンが学ぶべき必須スキルと考えおります。海外にビジネス展開する際にはもちろんのこと、日本国内でも英会話コミュニケーションができることによってチャンスが掴める場面があります。</p>
          </div>
          <!-- /p-top-service__body -->
        </div>
        <!-- /p-top-service__card -->
        <div class="p-top__service__card">
          <div class="p-top__service__number">02</div>
          <div class="p-top__service__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-2.jpg" alt="ビジネス英語研修">
          </div>
          <h3 class="p-top-service__lead">異文化<br>コミュニケーション研修</h3>
          <!-- /p- -->
          <div class="p-top-service__body">
            <p class="p-top-service__text">急速にグローバル化が進んでおり、ビジネスの場面に限らず様々な文化的背景を持つ者同士の交流はもはや日常的な光景となりました。<br>言語や文化が異なる相手を理解することで世界が広がり、新たなビジネスチャンスに巡り会うことは少なくありません。</p>
          </div>
          <!-- /p-top-service__body -->
        </div>
        <!-- /p-top-service__card -->
        <div class="p-top__service__card">
          <div class="p-top__service__number">03</div>
          <div class="p-top__service__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-3.jpg" alt="ビジネス留学サポートプログラム">
          </div>
          <h3 class="p-top-service__lead">
            <span>ビジネス留学</span>
            <span>サポートプログラム</span>
          </h3>
          <!-- /p- -->
          <div class="p-top-service__body">
            <p class="p-top-service__text">将来的に海外で働きたい方に向けた講座をご用意しております。一般的には3ヶ月〜1年の期間で基本的な英会話スキルと、海外でのビジネスマナー習得を目指します。<br>通常の語学留学では得られないビジネスの場で通用するコミュニケーションスキル習得に重点をおいておりますので、海外でビジネス展開する際に自信を持って活動することができるようになります。</p>
          </div>
          <!-- /p-top-service__body -->
        </div>
        <!-- /p-top-service__card -->
      </div>
      <!-- /p-top-service__cards -->
    </div>
    <!-- /l-inner -->
    <div class="p-top-service__bg p-bg"></div>
  </section>


</main>

<footer class="l-footer"></footer>
<?php wp_footer(); ?>
</body>

</html>