<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <?php wp_head(); ?>
</head>

<body>
  <div id="loading" class="p-loading">
    <p class="p-loading__text u-italic c-animated__blurText">Global Standard</p>
  </div>

  <div class="p-header__space"></div>
  <header class="p-header">
    <div class="p-header__inner">
      <a href="<?php echo home_url('/'); ?>" class="p-header__logo u-italic">global standard</a>
      <nav class="p-header__nav">
        <ul class="p-header__list">
          <li><a href="<?php echo home_url('/'); ?>">トップ</a></li>
          <li><a href="<?php echo home_url('/about'); ?>">当社について</a></li>
          <li><a href="<?php echo home_url('/service'); ?>">サービス</a></li>
          <li><a href="<?php echo home_url('/case'); ?>">導入事例</a></li>
          <li><a href="<?php echo home_url('/news'); ?>">お知らせ</a></li>
        </ul>
        <div class="p-header__button-wrapper">
          <a href="<?php echo home_url('/download'); ?>" class="p-header__button c-button c-button__primary">資料ダウンロード</a>
          <a href="<?php echo home_url('/contact'); ?>" class="p-header__button c-button__secondary">お問い合わせ</a>
        </div>
      </nav>
    </div>
  </header>
  <button type="button" class="p-drawer__icon" aria-expanded="false" aria-controls="menu" aria-label="メニュー">
    <div class="p-drawer__icon--bar"></div>
    <div class="p-drawer__icon--bar"></div>
    <div class="p-drawer__icon--bar"></div>
  </button>

  <div class="p-drawer" id="menu">
    <div class="p-drawer__body">
      <ul class="p-drawer__list">
        <li><a href="<?php echo home_url('/'); ?>">トップ</a></li>
        <li><a href="<?php echo home_url('/about'); ?>">当社について</a></li>
        <li><a href="<?php echo home_url('/service'); ?>">サービス</a></li>
        <li><a href="<?php echo home_url('/case'); ?>">導入事例</a></li>
        <li><a href="<?php echo home_url('/news'); ?>">お知らせ</a></li>
      </ul>
      <a href="<?php echo home_url('/download'); ?>" class="p-drawer__button">資料ダウンロード</a>
      <a href="<?php echo home_url('/contact'); ?>" class="p-drawer__button --white">お問い合わせ</a>
    </div>
  </div>
