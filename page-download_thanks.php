<?php
/*
Template Name: 資料ダウンロード
*/
?>

<?php get_header(); ?>

<div class="l-low p-download">
  <p class="c-low-title --download">資料ダウンロード</p>
</div>

<?php if (function_exists('bcn_display')) : ?>
  <!-- breadcrumb -->
  <div class="p-breadcrumb">
    <?php bcn_display(); // BreadcrumbNavXTのパンくずを表示するための記述
    ?>

  </div><!-- /breadcrumb -->
<?php endif; ?>

<section class="l-low__contents l-low__download">
  <div class="l-inner p-download__inner">
    <div class="p-download__content">
      <h2 class="p-download__heading">世界で活躍できるグローバルな人材を育てる３つの研修プログラムをご用意しております。</h2>
      <div class="p-download__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pamphlet.png" alt="パンフレット">
      </div>
      <p class="p-download__text">急速にグローバルに活躍できる企業が生き残る時代と移り変わりました。<br>ビジネス英語や経営学を効率よく学びながら、世界各国から集まるビジネスパーソンと交流し、世界レベルでの人脈を構築する研修をご用意しております。<br><br>英語に苦手意識のある方でもご安心ください。<br>ビジネスで必要なコミュニケーションが取れるようになるまで実績豊富な講師陣がサポートいたします。<br>まずはこちらの資料をごらんください。</p>
    </div>
    <div class="p-download-form --thanks">
      <p class="p-download-form__heading">資料請求いただき<br>ありがとうございました！</p>

      <p class="p-download-form__thanks-message">資料は以下のリンクよりダウンロードください。</p>
      <div class="p-download-form__thanks-button">
        <span>&rarr;</span>
        <a href="<?php echo home_url('/') ?>">資料のダウンロードリンクはこちら</a>
      </div>
      <p class="p-download-form__thanks-text">また、ご入力いただいたメールアドレスの方へもダウンロードリンクを送付しておりますので、ご確認いただけますと幸いです。</p>
       </div>
    <!-- /p-download-form -->
  </div>
  <!-- /l-inner p-download__inner -->
</section>

<?php get_footer(); ?>