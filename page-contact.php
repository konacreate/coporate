<?php get_header(); ?>

<div class="l-low p-contact">
  <h1 class="c-low-title --contact">お問い合わせ</h1>
</div>

<?php if (function_exists('bcn_display')) : ?>
  <!-- breadcrumb -->
  <div class="p-breadcrumb">
    <?php bcn_display(); // BreadcrumbNavXTのパンくずを表示するための記述
    ?>
  </div><!-- /breadcrumb -->
<?php endif; ?>

<section class="l-low__contents">
  <div class="l-inner p-contact__inner">
    <p class="p-contact__text">研修のお申し込み、その他お問い合わせは、下記のフォームからお問い合わせ内容をご記入ください。
      2日以内に担当者からメールにてご連絡いたします。</p>
    <div class="p-contact__contents">
      <h2 class="c-low-heading">お問い合わせ</h2>
      <div class="p-form">
        <?php echo do_shortcode('[contact-form-7 id="47f9053" title="お問い合わせフォーム"]'); ?>
      </div>
      <!-- /p-contact__form -->
    </div>
    <!-- /p-contact__contents -->
  </div>
  <!-- /p-contact__inner -->
</section>
<!-- /l-low__contents -->

<?php get_footer(); ?>