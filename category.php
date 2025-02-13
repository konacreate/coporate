<?php get_header(); ?>

<div class="l-low p-news">
  <h1 class="c-low-title --news">ニュース</h1>
</div>

<?php if (function_exists('bcn_display')) : ?>
  <!-- breadcrumb -->
  <div class="p-breadcrumb">
    <?php bcn_display(); // BreadcrumbNavXTのパンくずを表示するための記述 
    ?>
  </div><!-- /breadcrumb -->
<?php endif; ?>

<div class="l-low__contents">
  <div class="l-inner p-news__inner">
    <div class="p-news__contents">
      <div class="p-news__cat-name"><?php single_cat_title(); ?></div>
      <div class="p-news__articles">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : ?>
          <?php the_post(); ?>
            <a href="" class="p-news__article">
              <div class="p-news__img">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimg.png" alt="">
                <?php endif; ?>
              </div>
              <!-- /p-news__img -->
              <div class="p-news__body">
                <div class="c-meta p-news__meta">
                  <div class="c-meta__wrapper">
                    <?php $category = get_the_category(); ?><?php if ($category[0]) : ?>
                    <p class="c-meta__category"><?php echo $category[0]->cat_name; ?></p>
                  <?php endif; ?>
                  <?php $current_date = current_time('timestamp');
                  $post_date = get_the_time('U');
                  $is_new = ($current_date - $post_date) <= (5 * DAY_IN_SECONDS); ?>
                  <?php if($is_new) : ?>
                  <span class="p-news__new">new</span>
                  <?php endif; ?>
                  </div>
                  <!-- /c-meta__wrapper -->
                  <time datetime="<?php the_time('c'); ?>" class="c-meta__time"><?php the_time('Y.m.d'); ?></time>
                </div>
                <!-- /p-news__meta c-meta -->
                <h3 class="p-news__title"><?php the_title(); ?></h3>
              </div>
              <!-- /p-news__body -->
            </a>
            <!-- /p-news__article -->
        <?php endwhile; ?>
      <?php endif; ?>
      </div>
      <!-- /p-news__articles -->

      <div class="p-pagination">
      <?php
  echo paginate_links(
    array(
      'end_size' => 1,
      'mid_size' => 1,
      'prev_next' => true,
      'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="10" height="17" viewBox="0 0 10 17" fill="none">
<path d="M9.02305 0.395445C8.49571 -0.131896 7.63088 -0.131896 7.10354 0.395445L0.3958 7.12431C-0.117475 7.63759 -0.131538 8.46727 0.353614 8.99461L6.96292 15.625C7.2301 15.8922 7.57463 16.0258 7.92619 16.0258C8.27072 16.0258 8.62228 15.8922 8.88243 15.6321C9.40977 15.1047 9.4168 14.2469 8.88243 13.7126L3.26452 8.01024L9.02305 2.30793C9.55742 1.78762 9.55742 0.929817 9.02305 0.395445Z" fill="#888888"/>
</svg>',
      'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="10" height="17" viewBox="0 0 10 17" fill="none">
<path d="M0.400782 0.395447C0.928125 -0.131897 1.79297 -0.131897 2.32031 0.395447L9.02813 7.12435C9.54141 7.63763 9.55547 8.46732 9.07031 8.99466L2.46094 15.6251C2.19375 15.8923 1.84922 16.0259 1.49766 16.0259C1.15312 16.0259 0.801562 15.8923 0.541406 15.6322C0.0140618 15.1048 0.00703037 14.247 0.541406 13.7126L6.15937 8.01029L0.400781 2.30795C-0.133594 1.78763 -0.133594 0.929822 0.400782 0.395447Z" fill="#888888"/>
</svg>',
    )
  );
  ?>
      </div>
    </div>
    <!-- /p-news__contents -->
  <?php get_sidebar(); ?>
  </div>
  <!-- /l-inner -->
</div>
<!-- /l-low__contents -->


<?php get_footer(); ?>