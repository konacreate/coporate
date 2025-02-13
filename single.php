<?php get_header(); ?>
<div class="l-low p-article">
  <p class="c-low-title --news">ニュース</p>
</div>
<?php if (function_exists('bcn_display')) : ?>
  <!-- breadcrumb -->
  <div class="p-breadcrumb">
    <?php bcn_display(); // BreadcrumbNavXTのパンくずを表示するための記述
    ?>
  </div><!-- /breadcrumb -->
<?php endif; ?>
<section class="l-low__article">
  <div class="l-inner p-article__inner">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <div class="p-article__content">
          <div class="c-meta">
            <?php $category = get_the_category(); ?><?php if ($category[0]) : ?>
            <a class="c-meta__category --single" href="<?php echo get_category_link($category[0]->term_id); ?>"><?php echo $category[0]->cat_name; ?></a>
          <?php endif; ?>
          <time datetime="<?php the_time('c') ?>" class="c-meta__time --single"><?php the_time('Y.m.d') ?></time>
          </div>
          <!-- /c-meta -->
          <h1 class="p-article__title"><?php the_title(); ?></h1>
          <div class="p-article__img">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>
            <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimg.png" alt="">
            <?php endif; ?>
          </div>
          <!-- /p-article__img -->
          <div class="p-article__body">
            <?php the_content(); ?>
          </div>
          <!-- /p-article__body -->
          <div class="p-pagination-single">
            <div class="previous-post">
              <?php previous_post_link('%link', '< 前の記事へ'); ?>
            </div>
            <div class="next-post">
              <?php next_post_link('%link', '次の記事へ >'); ?>
            </div>
          </div>
          <!-- /p-pagination-single -->
        </div>
        <!-- /p-article__content -->
      <?php endwhile; ?>
    <?php endif; ?>
    <?php get_sidebar(); ?>
  </div>
  <!-- /l-inner -->
</section>
<!-- /l-low__contents -->
<?php get_footer(); ?>