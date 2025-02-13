<?php
/*
Template Name: お問い合わせ完了
*/
?>
<?php get_header(); ?>
<div class="l-low p-contact-thanks">
  <h1 class="c-low-title --contact">お問い合わせ</h1>
</div>
<?php if (function_exists('bcn_display')) : ?>
  <!-- breadcrumb -->
  <div class="p-breadcrumb">
    <?php bcn_display(); // BreadcrumbNavXTのパンくずを表示するための記述 
    ?>
  </div><!-- /breadcrumb -->
  <div class="l-low__contents">
    <div class="l-inner">
      <div class="p-contact-thanks__content">
        <p class="p-contact-thanks__text">お問い合わせありがとうございました。<br>2日以内に担当者からメールにてご連絡いたしますので、しばらくお待ちいただけますと幸いです。</p>
        <div class="p-contact-thanks__button">
          <span>&rarr;</span><a href="<?php echo home_url('/') ?>">トップへ戻る</a>
        </div>
        <!-- /p-contact-thanks__button -->
      </div>
      <!-- /p-contact-thanks__content -->
    </div>
    <!-- /l-inner -->
  </div>
  <!-- /l-low__contents -->
<?php endif; ?>
<?php get_footer(); ?>