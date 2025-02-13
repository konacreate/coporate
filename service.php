<?php
/**
 * Template Name: service
 */
get_header();
?>
<div class="l-low p-service">
  <h1 class="c-low-title --service">サービス</h1>
</div>
<?php if (function_exists('bcn_display')) : ?>
  <!-- breadcrumb -->
  <div class="p-breadcrumb">
    <?php bcn_display(); // BreadcrumbNavXTのパンくずを表示するための記述
    ?>
  </div><!-- /breadcrumb -->
<?php endif; ?>
<section class="l-low__contents">
  <h2 class="p-service__heading c-animated__scale">世界で活躍できる<br>グローバルな人材を育てる<br class="u-sp">３つの研修プログラム</h2>
  <div class="p-service__programs">
    <div class="p-service__inner">
      <div id="business-english-training" class="p-service__program">
        <figure class="p-service__img u-pc c-animated__fadeInDown">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-img1.jpg" alt="ビジネス英語研修">
        </figure>
        <figure class="p-service__img u-sp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-1.jpg" alt="ビジネス英語研修">
        </figure>
        <div class="p-service__detail c-animated__fadeIn --delay0">
          <h3 class="p-service__detail-heading--main">ビジネス英語研修</h3>
          <p class="p-service__detail-heading--sub u-italic">
            Business English Training
          </p>
          <p class="p-service__text">ビジネス英会話はこれからの時代、すべてのビジネスパーソンが学ぶべき必須スキルと考えおります。<br>海外にビジネス展開する際にはもちろんのこと、日本国内でも英会話コミュニケーションができることによってチャンスが掴める場面があります。<br><br>担当する講師は皆、豊富な海外ビジネス経験者であり、ティーチングスキル、コミュニケーションスキル、人間性に加えて採用後には厳しいトレーニング期間を設けているので、様々な職業や職種に合ったスキルまで身につけられます。<br>また、必要に応じてマンツーマン形式のレッスンを行うことも可能なので、時間の限り話すことができ効率よく上達することができます。</p>
          <div class="p-service__wrap">
            <dl class="p-service__dl">
              <dt class="p-service__dt">対象</dt>
              <dd class="p-service__dd--subject">ビジネスの中で使える英語コミュニケーション能力が必要な方</dd>
            </dl>
            <dl class="p-service__dl">
              <dt class="p-service__dt">費用</dt>
              <dd class="p-service__dd--cost">時間内容要相談</dd>
            </dl>
          </div>
          <!-- /p-service__wrap -->
          <div class="p-service__button">
            <a href="<?php echo home_url('/contact') ?>" class="c-button c-button__quaternary"><span class="c-button__text">お申し込みはこちら</span><span class="c-button__arrow">&rarr;</span></a>
          </div>
          <!-- /p-service__button -->
          <div class="p-service__number u-italic">01</div>
          <!-- /p-service__number -->
        </div>
        <!-- /p-service__detail -->
      </div>
      <!-- /p-service__step -->
      <div id="cross-cultural-communication" class="p-service__program">
        <figure class="p-service__img u-pc c-animated__fadeInDown">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-img2.jpg" alt="異文化コミュニケーション">
        </figure>
        <figure class="p-service__img u-sp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-2.jpg" alt="異文化コミュニケーション">
        </figure>
        <div class="p-service__detail c-animated__fadeIn --delay0">
          <h3 class="p-service__detail-heading--main">異文化<br class="u-sp">コミュニケーション</h3>
          <p class="p-service__detail-heading--sub u-italic">
            Cross-cultural communication
          </p>
          <p class="p-service__text">急速にグローバル化が進んでおり、ビジネスの場面に限らず様々な文化的背景を持つ者同士の交流はもはや日常的な光景となりました。<br>言語や文化が異なる相手を理解することで世界が広がり、新たなビジネスチャンスに巡り会うことは少なくありません。<br>多様な価値観を尊重しながら言葉の垣根を越え、コミュニケーションの力で他者を理解しようとする「異文化コミュニケーション」はこれからの時代、さらに重要となるスキルと言えます。<br><br>コミュニケーションの基本となる日本語と英語の力を鍛えつつ、アプローチする国の文化を同時に学び、スムーズなビジネス展開をサポートいたします。</p>
          <div class="p-service__wrap">
            <dl class="p-service__dl">
              <dt class="p-service__dt">対象</dt>
              <dd class="p-service__dd--subject">海外へのビジネス展開を検討されている方</dd>
            </dl>
            <dl class="p-service__dl">
              <dt class="p-service__dt">費用</dt>
              <dd class="p-service__dd--cost">時間内容要相談</dd>
            </dl>
          </div>
          <!-- /p-service__wrap -->
          <div class="p-service__button">
            <a href="<?php echo home_url('/contact') ?>" class="c-button c-button__quaternary"><span class="c-button__text">お申し込みはこちら</span><span class="c-button__arrow">&rarr;</span></a>
          </div>
          <!-- /p-service__button -->
          <div class="p-service__number u-italic">02</div>
          <!-- /p-service__number -->
        </div>
        <!-- /p-service__detail -->
      </div>
      <!-- /p-service__step -->
      <div id="business-study-abroad-program" class="p-service__program">
        <figure class="p-service__img u-pc c-animated__fadeInDown">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-img3.jpg" alt="ビジネス留学プログラム">
        </figure>
        <figure class="p-service__img u-sp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-3.jpg" alt="ビジネス留学プログラム">
        </figure>
        <div class="p-service__detail c-animated__fadeIn --delay0">
          <h3 class="p-service__detail-heading--main">ビジネス留学<br class="u-sp">プログラム</h3>
          <p class="p-service__detail-heading--sub u-italic">
            Business study abroad program
          </p>
          <p class="p-service__text">将来的に海外で働きたい方に向けた講座をご用意しております。一般的には3ヶ月〜1年の期間で基本的な英会話スキルと、海外でのビジネスマナー習得を目指します。<br>通常の語学留学では得られないビジネスの場で通用するコミュニケーションスキル習得に重点をおいておりますので、海外でビジネス展開する際に自信を持って活動することができるようになります。<br><br>お申し込みいただく際に綿密なヒアリングを行い、おすすめの留学先を複数ピックアップいたします。海外ビジネス経験豊富な講師が、留学後のキャリアプラン作成までお手伝いいたします。</p>
          <div class="p-service__wrap">
            <dl class="p-service__dl">
              <dt class="p-service__dt">対象</dt>
              <dd class="p-service__dd--subject">英語コミュニケーション能力を習得し、将来的に海外で働きたい方</dd>
            </dl>
            <dl class="p-service__dl">
              <dt class="p-service__dt">費用</dt>
              <dd class="p-service__dd--cost">時間内容要相談</dd>
            </dl>
          </div>
          <!-- /p-service__wrap -->
          <div class="p-service__button">
            <a href="<?php echo home_url('/contact') ?>" class="c-button c-button__quaternary"><span class="c-button__text">お申し込みはこちら</span><span class="c-button__arrow">&rarr;</span></a>
          </div>
          <!-- /p-service__button -->
          <div class="p-service__number u-italic">03</div>
          <!-- /p-service__number -->
        </div>
        <!-- /p-service__detail -->
      </div>
      <!-- /p-service__step -->
    </div>
    <!-- /p-service__inner -->
    <div class="p-service__bg p-bg"></div>
    <!-- /p-service__bg -->
  </div>
  <!-- /p-service__program -->

  <div class="p-service__flow">
    <div class="l-inner">
      <h2 class="c-low-heading --white c-animated__fadeIn --delay0">導入の流れ</h2>
      <div class="p-service__items c-animated__clipView">
        <div class="p-service__item --01">
          <div class="p-service__step-wrapper">
            <span class="p-service__step u-italic">STEP</span>
            <span class="p-service__step-number  u-italic">01</span>
          </div>
          <!-- /p-service__step -->
          <div class="p-service__flow-wrapper --01">
            <h3 class="p-service__flow-heading">お問い合わせ</h3>
            <p class="p-service__flow-text">お問い合わせフォームより必要事項を誤入力の上、お申し込みください</p>
          </div>
        </div>
        <!-- /p-service__item -->
        <div class="p-service__item --02">
          <div class="p-service__step-wrapper">
            <span class="p-service__step  u-italic">STEP</span>
            <span class="p-service__step-number  u-italic">02</span>
          </div>
          <!-- /p-service__step -->
          <div class="p-service__flow-wrapper --02">
            <h3 class="p-service__flow-heading">ご提案</h3>
            <p class="p-service__flow-text">ご依頼の背景をお伺いし、必要なスキルと習得期間から最適なプランをご提案いたします</p>
          </div>
        </div>
        <!-- /p-service__item -->
        <div class="p-service__item --03">
          <div class="p-service__step-wrapper">
            <span class="p-service__step  u-italic">STEP</span>
            <span class="p-service__step-number  u-italic">03</span>
          </div>
          <!-- /p-service__step -->
          <div class="p-service__flow-wrapper --03">
            <h3 class="p-service__flow-heading">日程調整</h3>
            <p class="p-service__flow-text">研修日数と開始日を調整し、今後の流れ全体の段取りをご提案いたします</p>
          </div>
        </div>
        <!-- /p-service__item -->
        <div class="p-service__item --04">
          <div class="p-service__step-wrapper">
            <span class="p-service__step  u-italic">STEP</span>
            <span class="p-service__step-number  u-italic">04</span>
          </div>
          <!-- /p-service__step -->
          <div class="p-service__flow-wrapper --04">
            <h3 class="p-service__flow-heading">研修開始</h3>
            <p class="p-service__flow-text">研修当日はお約束のお時間の30分前に講師が伺います。<br><span class="p-service__flow-text--red">※キャンセルのご連絡は2日前までにお願いいたします</span></p>
          </div>
        </div>
        <!-- /p-service__steps -->
      </div>
      <!-- /p-service__items -->
    </div>
    <!-- /l-inner -->
  </div>
  <!-- /p-service__flow -->
  <!-- よくある質問 -->
  <div class="p-service__qa">
    <div class="p-service__qa-inner">
      <h2 class="c-low-heading c-animated__fadeIn --delay0">よくある質問</h2>
      <div class="p-qa c-animated__fadeIn --delay0">
        <details class="p-qa__details js-details">
          <summary class="p-qa__head js-summary">
            <span class="p-qa__head-text">どんな教材を使うのでしょうか？</span>
          </summary>
          <div class="js-content">
            <div class="p-qa__a">
              <p class="p-qa__a-text">録音しても構いません。語学学習において、言語に触れている時間が長いほど早く上達します。ぜひご自宅での復習にお役立てください。<br>ただし、原則として第三者への配布は禁止しておりますので、ご了承ください。</p>
            </div>
            <!-- /p-qa__a -->
          </div>
          <!-- /js-content -->
        </details>
        <details class="p-qa__details js-details">
          <summary class="p-qa__head js-summary">
            <span class="p-qa__head-text">講義中のレッスン内容は録音してもよいのでしょうか？</span>
          </summary>
          <div class="js-content">
            <div class="p-qa__a">
              <p class="p-qa__a-text">録音しても構いません。語学学習において、言語に触れている時間が長いほど早く上達します。ぜひご自宅での復習にお役立てください。<br>ただし、原則として第三者への配布は禁止しておりますので、ご了承ください。</p>
            </div>
            <!-- /p-qa__a -->
          </div>
          <!-- /js-content -->
        </details>
        <details class="p-qa__details js-details">
          <summary class="p-qa__head js-summary">
            <span class="p-qa__head-text">講師はどんな人が担当しているのでしょうか？</span>
          </summary>
          <div class="js-content">
            <div class="p-qa__a js-content">
              <p class="p-qa__a-text">録音しても構いません。語学学習において、言語に触れている時間が長いほど早く上達します。ぜひご自宅での復習にお役立てください。<br>ただし、原則として第三者への配布は禁止しておりますので、ご了承ください。</p>
            </div>
            <!-- /p-qa__a -->
          </div>
          <!-- /js-content -->
        </details>
        <details class="p-qa__details js-details">
          <summary class="p-qa__head js-summary">
            <span class="p-qa__head-text">講師が合わないと感じた場合、変更してもらえるのでしょうか？</span>
          </summary>
          <div class="js-content">
            <div class="p-qa__a">
              <p class="p-qa__a-text">録音しても構いません。語学学習において、言語に触れている時間が長いほど早く上達します。ぜひご自宅での復習にお役立てください。<br>ただし、原則として第三者への配布は禁止しておりますので、ご了承ください。</p>
            </div>
          </div>
        </details>
        <details class="p-qa__details js-details">
          <summary class="p-qa__head js-summary">
            <span class="p-qa__head-text">講義当日のキャンセルは可能でしょうか？</span>
          </summary>
          <div class="js-content">
            <div class="p-qa__a js-content">
              <p class="p-qa__a-text">録音しても構いません。語学学習において、言語に触れている時間が長いほど早く上達します。ぜひご自宅での復習にお役立てください。<br>ただし、原則として第三者への配布は禁止しておりますので、ご了承ください。</p>
            </div>
            <!-- /p-qa__a -->
          </div>
          <!-- /js-content -->
        </details>
        <details class="p-qa__details js-details">
          <summary class="js-summary">
            <ul class="p-qa__head">
              <li class="p-qa__head-text">途中退会した場合、返金は可能でしょうか？</li>
            </ul>
          </summary>
          <div class="js-content">
            <div class="p-qa__a">
              <p class="p-qa__a-text">録音しても構いません。語学学習において、言語に触れている時間が長いほど早く上達します。ぜひご自宅での復習にお役立てください。<br>ただし、原則として第三者への配布は禁止しておりますので、ご了承ください。</p>
            </div>
            <!-- /p-qa__a -->
          </div>
          <!-- /js-content -->
        </details>
      </div>
      <!-- /p-qa -->
    </div>
    <!-- /l-inner -->
  </div>
  <!-- /p-service__qa -->
</section>
<?php get_footer(); ?>