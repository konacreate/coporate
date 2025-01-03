<aside class="p-widget">
      <div class="p-widget__new">
        <h3 class="p-widget__heading">新着記事</h3>
        <div class="p-widget__articles">
          <?php $recent_query = new WP_Query(
            array (
              'post_type' => 'post',
              'posts_per_page' => 5,
              'orderby' => 'date',
              'order' => 'DESC',
            )
          );
          ?>
          <?php if($recent_query->have_posts()) : ?>
            <?php while($recent_query->have_posts()) : ?>
              <?php $recent_query->the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="p-widget__article">
            <div class="p-widget__img">
              <?php if(has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimg" alt="画像なし">
                <?php endif; ?>
            </div>
            <div class="p-widget__body">
              <div class="c-widget-meta">
                  <?php $category = get_the_category(); ?><?php if ($category[0]) : ?>
                    <div class="c-widget-meta__category"><?php echo $category[0]->cat_name; ?></div>
                    <?php endif; ?>
                <time datetime="<?php the_time('c'); ?>" class="c-widget-meta__time"><?php the_time('Y.m.d'); ?></time>
              </div>
              <!-- /c-widget__meta -->
               <div class="p-widget__title"><?php the_title(); ?></div>
            </div>
            <!-- /p-widget__body -->
          </a>
          <!-- /p-widget__article -->
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <!-- /p-widget__articles -->
      </div>
      <!-- /p-widget__new -->
       <div class="p-widget__category">
        <h3 class="p-widget__heading">カテゴリ</h3>
        <ul class="p-widget__categories">
        <?php
        // 初期値なので$argsは書かなくてもOK
        $args = array(
        'title_li'   => '',      // 親カテゴリのタイトルを非表示にする
      );
    ?>
    <?php wp_list_categories($args); ?>
        </ul>
       </div>
    </aside>
    <!-- /p-widget -->