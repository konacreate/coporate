<?php

/**
 * Template Name: about
 */
get_header();
?>

<div class="l-low p-about">
  <h1 class="c-low-title --about">当社について</h1>
</div>

<?php if (function_exists('bcn_display')) : ?>
  <!-- breadcrumb -->
  <div class="p-breadcrumb">
    <?php bcn_display(); // BreadcrumbNavXTのパンくずを表示するための記述 
    ?>
  </div><!-- /breadcrumb -->
<?php endif; ?>

<section class="l-low__contents p-about__contents">
  <div class="l-inner__wide">
    <div class="p-about__concept --mission c-animated__fadeIn --delay0">
      <h2 class="p-about__concept-heading c-heading__title --mission --white">社会的使命</h2>
      <div class="p-about__message">
        <h3 class="p-about__lead">人財育成を通じて、<br class="u-sp">豊かな世界を創造する</h3>
        <p class="p-about__description">急速に広がったグローバル社会に対応できる人材を育成することで、文化・言語の垣根を越えたコミュニケーションを活発にし、一人でも多くの人が豊かに暮らせる世界を実現することを使命とする。</p>
      </div>
      <!-- /p-about__message -->
    </div>
    <!-- /p-about__concept --mission -->
    <div class="p-about__concept --vision c-animated__fadeIn --delay0">
      <h2 class="p-about__concept-heading c-heading__title --vision --white">企業理念</h2>
      <div class="p-about__message">
        <h3 class="p-about__lead">文化の垣根を越えた<br class="u-pc">人と人とのつながりが新しい価値を生む</h3>
        <p class="p-about__description">コミュニケーションスキル習得をサポートすることで一人でも多くのビジネスパーソンの視野を広げ、世界を舞台に新しい相乗効果を生む未来を創造する。文化の垣根を越えた人と人とのつながりが新しい価値を生むことを信念とする。</p>
      </div>
      <!-- /p-about__message -->
    </div>
    <!-- /p-about__concept --vision -->
  </div>
  <!-- l-inner -->
  <div class="p-about__introduce">
    <div class="l-inner">

      <div class="p-about__introduce-contents c-animated__fadeIn --delay0">
        <h2 class="p-about__introduce-heading">会社概要</h2>
        <table class="p-about__table">
          <tr>
            <th>代表</th>
            <td>波瑠　慶太</td>
          </tr>
          <tr>
            <th>事業内容</th>
            <td>
              <ul>
                <li>・ビジネス英会話教育事業</li>
                <li>・異文化交流サポート事業</li>
                <li>・ビジネス留学事業</li>
              </ul>
            </td>
          </tr>
          <tr>
            <th>設立</th>
            <td>2012年10月03日</td>
          </tr>
          <tr>
            <th>所在地</th>
            <td>〒550-1000<br>大阪市西区土佐堀9-5-5</td>
          </tr>
          <tr>
            <th>TEL</th>
            <td>06-123-4567（代表）</td>
          </tr>
          <tr>
            <th>FAX</th>
            <td>06-123-4568（代表）</td>
          </tr>
          <tr>
            <th>E-mail</th>
            <td>globalstandard@example.com</td>
          </tr>
        </table>
        <!-- /p-about__table -->
      </div>
      <!-- /p-about__introduce-contents -->
    </div>
    <!-- /l-inner -->
  </div>
  <!-- /p-about__introduce -->
  <div class="p-about__officer">
    <h2 class="c-low-heading c-animated__fadeIn --delay0">役員紹介</h2>
    <div class="p-about__cards">
      <div class="p-about__card">
        <div class="p-about__left c-animated__leftSlideIn">
          <div class="p-about__name"><span>代表取締役社長</span><span>波瑠　慶太</span></div>
          <p class="p-about__text">20年間外資系企業に勤務し、世界17カ国でビジネスを展開。<br>様々な文化に触れ、コミュニケーションスキルを磨き、同時にその必要性を実感する。<br>自身も講師を務め、実体験から得られた知見を皆様に還元し、グローバルなビジネス展開をサポートいたします。</p>
          <div class="p-about__sns">
            <a href="#" class="p-about__twitter">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sns.svg" alt="sns">
            </a>
          </div>
          <!-- /p-about__sns -->
        </div>
        <!-- /p-about__left -->
        <div class="p-about__right c-animated__rightSlideIn">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-officer1.jpg" alt="代表取締役社長 波瑠　慶太">
        </div>
        <!-- /p-about__right -->
      </div>
      <!-- /p-about__card -->
      <div class="p-about__card">
        <div class="p-about__left c-animated__leftSlideIn">
          <div class="p-about__name"><span>取締役</span><span>ジャック・スミス</span></div>
          <p class="p-about__text">オーストラリア出身。<br>英会話の講師として13年のキャリアがあります。<br>翻訳業務も担当しており、外国映画の日本版DVDの字幕やテレビ番組の英語をヒヤリングなども行なっております。<br>皆様に「より気持ちの伝わる英会話」を習得していただくサポートをいたします。</p>
          <div class="p-about__sns">
            <a href="#" class="p-about__twitter">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sns.svg" alt="sns">
            </a>
          </div>
          <!-- /p-about__sns -->
        </div>
        <!-- /p-about__left -->
        <div class="p-about__right c-animated__rightSlideIn">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-officer2.jpg" alt="取締役 ジャック・スミス">
        </div>
        <!-- /p-about__right -->
      </div>
      <!-- /p-about__card -->
      <div class="p-about__card">
        <div class="p-about__left c-animated__leftSlideIn">
          <div class="p-about__name"><span>取締役</span><span>メアリー・ジャクソン</span></div>
          <p class="p-about__text">アメリカ出身。<br>メジャーリーグ球団「ニューヨークヤンキース」の通訳担当として7年間チームに在籍。<br>数多くの契約交渉の経験を活かし、国際ビジネスにおけるコミュニケーションのマナーから応用までお伝えいたします。</p>
          <div class="p-about__sns">
            <a href="#" class="p-about__twitter">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sns.svg" alt="sns">
            </a>
          </div>
          <!-- /p-about__sns -->
        </div>
        <!-- /p-about__left -->
        <div class="p-about__right c-animated__rightSlideIn">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-officer3.jpg" alt="取締役 メアリー・ジャクソン">
        </div>
        <!-- /p-about__right -->
      </div>
      <!-- /p-about__card -->
    </div>
    <!-- /p-about__cards -->
    <div class="p-about__bg p-bg"></div>
  </div>
  <!-- /p-about__officer -->
</section>
<!-- /p-about -->


<?php get_footer(); ?>