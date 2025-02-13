<?php
/**
 * Archive Business
 */
get_header(); ?>
<div class="l-low p-case">
  <h1 class="c-low-title --case">導入事例</h1>
</div>
<?php if (function_exists('bcn_display')) : ?>
  <!-- breadcrumb -->
  <div class="p-breadcrumb">
    <?php bcn_display(); // BreadcrumbNavXTのパンくずを表示するための記述 
    ?>
  </div><!-- /breadcrumb -->
<?php endif; ?>
<section class="l-low__contents p-case__contents">
  <div class="l-inner">
    <div class="p-case__nav">
      <?php $genre_terms = get_terms('case', array('hide_empty'=>false)); ?>
      <?php foreach($genre_terms as $genre_term) : ?>
        <a href="<?php echo get_term_link( $genre_term, 'case'); ?>" class="p-case__nav-link"><?php echo $genre_term->name; ?></a>
      <?php endforeach; ?>
    </div>
    <div class="p-case__category-contents">
      <div class="p-case__category-content">
        <h2 class="p-case__heading">ビジネス英語研修</h2>
        <div class="p-case__category-cards">
          <?php if (have_posts()) : ?>
            <?php while(have_posts()) : ?>
              <?php the_post(); ?>
          <div class="p-case__category-card">
            <div class="p-case__card-heading">
              <div class="p-case__head-genre">Webマーケティング事業</div>
              <h3 class="p-case__head-company">AAA株式会社</h3>
              <div class="p-case__head-img">
              <?php
          if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'my_thumbnail' );
          } else {
            echo '<img src="' . esc_url( get_template_directory_uri() ) . '/img/noimg.png" alt="">';
          }
        ?>
              </div>
            </div>
            <div class="p-case__body">
              <div class="p-case__course">
                <span>研修コース：</span>
                <span>ビジネス英語研修</span>
              </div>
              <div class="p-case__text-box">
                <h4 class="p-case__checkbox">研修の目的</h4>
                <p class="p-case__text">海外にビジネス展開する計画があり、必要な英会話コミュニケーションを身につけることが目的。</p>
                <h4 class="p-case__checkbox">選んだ理由</h4>
                <p class="p-case__text">海外の企業で働いていた実績のある講師に直接ご指導いただけることは、とても貴重な経験になると考えた為</p>
                <h4 class="p-case__checkbox">導入後の成果・効果</h4>
                <p class="p-case__text">昨年からオーストラリアの企業と業務提携を開始し、３ヶ月という短い研修期間でしたが、業務に必要なコミュニケーションはスムーズに行えております。
                  今後は更なるスキルアップを目指していきます。</p>
              </div>
              <!-- /p-case__text-box -->
            </div>
            <!-- /p-case__body -->
          </div>
          <!-- /p-case__category-card -->
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <!-- /p-case__category-cards -->
         <div class="p-case__button">
          <a href="" class="c-button c-button__quaternary"><span class="c-button__text">ビジネス英語研修の詳細</span><span class="c-button__arrow">&rarr;</span></a>
         </div>
      </div>
      <!-- /p-case__content -->
    </div>
    <!-- /p-case__contents -->
  </div>
  <!-- /l-inner -->
</section>
<!-- /l-low-contents -->



<?php get_footer(); ?>