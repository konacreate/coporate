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

    </main>

    <footer class="l-footer"></footer>
  <?php wp_footer(); ?>
  </body>
</html>
