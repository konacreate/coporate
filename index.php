<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- favicon -->
    <link rel="icon" href="./assets/img/favicon.ico" type="image/svg+xml" />

    <?php wp_head(); ?>
  </head>

  <body>
		<header class="p-header">
			<div class="p-header__inner">
				<a href="" class="p-header__logo u-italic">global standard</a>
				<nav class="p-header__nav">
					<ul class="p-header__list">
						<li><a href="">トップ</a></li>
						<li><a href="">当社について</a></li>
						<li><a href="">サービス</a></li>
						<li><a href="">導入事例</a></li>
						<li><a href="">お知らせ</a></li>
					</ul>
					<a href="" class="p-header__button c-button c-button__primary">資料ダウンロード</a>
					<a href="" class="p-header__button c-button__secondary">お問い合わせ</a>
				</nav>
			</div>
		</header>
		
		<button class="p-drawer__icon">
			<div class="p-drawer__icon--bar"></div>
			<div class="p-drawer__icon--bar"></div>
			<div class="p-drawer__icon--bar"></div>
		</button>
		
		<div class="p-drawer">
			<div class="p-drawer__body">
				<ul class="p-drawer__list">
					<li><a href=""></a></li>
					<li><a href=""></a></li>
					<li><a href=""></a></li>
				</ul>
				<a href="" class="p-drawer__btn">お問い合わせ</a>
			</div>
		</div>



    <main class="l-main">
      <section class="p-test">
        <div class="l-inner">
          <div class="p-test__container">
            <div class="p-test__text-wrap">
              <h2 class="p-test__title">たいとる</h2>
              <p class="p-test__text">
                テストテキストですテストテキストテストテキストですテストテキストテストテキストですテストテキストテストテキストですテストテキスト
              </p>
            </div>
            <picture class="p-test__img">
              <img src="./assets/img/pc-img-drink.jpg" alt='' width='' height='' loading='lazy'>
            </picture>
          </div>
        </div>
      </section>

<<<<<<< HEAD
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
      <div class="c-heading">
        <h2 class="c-heading__title --about">当社について</h2>
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>" class="p-top-about__link--pc c-button-top u-pc">
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
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>" class="p-top-about__link--sp c-button-top u-sp">
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
  <section class="l-top__service p-top-service">
    <div class="l-inner">
      <div class="c-heading">
        <h2 class="c-heading__title --service">サービス</h2>
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('service'))); ?>" class="c-button-top u-pc">
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
      <a href="<?php echo esc_url(get_permalink(get_page_by_path('service'))); ?>" class="p-top-service__link--sp c-button-top u-sp">
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
      <div class="c-heading">
        <h2 class="c-heading__title --case --white">導入事例</h2>
        <a href="<?php echo esc_url(get_post_type_archive_link('case')); ?>" class="p-top-about__link--pc c-button-top u-pc">
          <span class="c-button-top__text">
            View more
            <span class="c-button-top__arrow"></span>
            <span class="c-button-top__circle"></span>
          </span>
        </a>
      </div>
      <!-- /c-heading -->
      <div class="p-top-case__cards">
        <?php
         $args = array (
          'post_type' => 'case',
          'posts_per_page' => 6,
          'orderby' => 'date',
          'order' => 'DESC',
         );
         $custom_query = new WP_Query($args);
         if($custom_query->have_posts()) :
         ?>
         <?php while($custom_query->have_posts()) : ?>
          <?php $custom_query->the_post(); ?>
        <a href="<?php echo esc_url(get_post_type_archive_link('case') . '#' . get_the_ID()); ?>" class="p-top-case__card">
        <?php
          $image = get_field('logo');
          if(!empty($image)) : ?>
        <div class="p-top-case__img">
          <img src="<?php echo esc_url($image['url']); ?>" width="<?php echo esc_attr($image['width']); ?>" height="<?php echo esc_attr($image['height']); ?>">
        </div>
          <?php else : ?>
        <div class="p-top-case__img">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/img/noimg.png'); ?>" alt="画像なし">
        </div>
        <?php endif; ?>
        <div class="p-top-case__body">
            <h3 class="p-top-case__company"><?php the_title(); ?><span>様</span></h3>
            <p class="p-top-case__category">
              <?php
              $terms = get_the_terms(get_the_ID(), 'business');
              if($terms && !is_wp_error($terms)) : ?>
              <?php echo $terms[0]->name; ?>
              <?php endif; ?>
            </p>
          </div>
        </a>
        <!-- /p-top-case__card -->
         <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <!-- /p-top-case__cards -->
      <a href="<?php echo esc_url(get_post_type_archive_link('case')); ?>" class="p-top-case__link--sp c-button-top u-sp">
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
      <div class="c-heading">
        <h2 class="c-heading__title --news">新着情報</h2>
        <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="c-button-top u-pc">
          <span class="c-button-top__text --black">
            View more
            <span class="c-button-top__arrow --black"></span>
            <span class="c-button-top__circle --fill"></span>
          </span>
        </a>
      </div>
      <div class="p-top-news__boxes">
      <?php $recent_query = new WP_Query(
            array (
              'post_type' => 'post',
              'posts_per_page' => 3,
              'orderby' => 'date',
              'order' => 'DESC',
            )
          );
          ?>
          <?php if($recent_query->have_posts()) : ?>
            <?php while($recent_query->have_posts()) : ?>
              <?php $recent_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="p-top-news__box">
          <div class="p-top-news__meta">
          <?php $category = get_the_category(); ?><?php if ($category[0]) : ?>
            <p class="p-top-news__category">
            <?php echo $category[0]->cat_name; ?>
            </p>
            <?php endif; ?>
            <time datetime="<?php the_time('c'); ?>" class="p-top-news__time"><?php the_time('Y.m.d'); ?></time>
          </div>
          <h3 class="p-top-news__title"><?php the_title(); ?></h3>
        </a>
        <!-- /p-top-news__box -->
         <?php endwhile; ?>
         <?php endif; ?>
      </div>
      <!-- /p-top-news__boxes -->
      <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="p-top-news__link--sp c-button-top u-sp">
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

<?php get_footer(); ?>
=======
    </main>

    <footer class="l-footer"></footer>
  <?php wp_footer(); ?>
  </body>
</html>
>>>>>>> parent of a3174c5 (完成)
