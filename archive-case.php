<?php
/**
 * Archive Case
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
  <div class="l-inner p-case__inner">
    <nav class="p-case__nav">
      <ul class="p-case__list">
      <?php $genre_terms = get_terms('business', array('hide_empty'=>false)); ?>
      <?php foreach($genre_terms as $genre_term) : ?>
        <li><a href="#<?php echo $genre_term->slug; ?>"><?php echo $genre_term->name; ?></a></li>
      <?php endforeach; ?>
      </ul>
    </nav>
    <div class="p-case__category-contents">
      <?php $genre_terms = get_terms('business', array('hide_empty'=>false)); ?>
      <?php foreach($genre_terms as $genre_term) : ?>

      <div id="<?php echo $genre_term->slug; ?>" class="p-case__category-content">
        <hgroup>
          <hgroup class="p-case__heading">
            <h2 class="p-case__heading--ja"><?php echo $genre_term->name; ?></h2>
            <span class="p-case__heading--en u-italic"><?php echo $genre_term->description ?></span>
          </hgroup>
        </hgroup>
        <div class="p-case__category-cards">
        <?php
        $args = array (
          'post_type' => 'case',
          'posts_per_page' => 4,
          'tax_query' => array(
            array(
              'taxonomy' => 'business',
              'field' => 'id',
              'terms' => $genre_term->term_id,
              'operator' => 'IN',
            ),
          ),
        );
        $custom_query = new WP_Query($args);
        if($custom_query->have_posts()) : ?>
        <?php while($custom_query->have_posts()) : ?>
        <?php $custom_query->the_post(); ?>

          <div id="<?php echo get_the_ID(); ?>" class="p-case__category-card">
            <div class="p-case__card-heading">
              <?php if(get_field('type')) : ?>
              <p class="p-case__head-genre"><?php the_field('type') ?></p>
              <?php endif; ?>
              <h3 class="p-case__head-company"><?php the_title(); ?><span>様</span></h3>
              <?php
                $image = get_field('logo');
                if(!empty($image)) : ?>
                <div class="p-case__head-img">
                  <img src="<?php echo esc_url($image['url']); ?>" width="<?php echo esc_attr($image['width']); ?>" height="<?php echo esc_attr($image['height']); ?>" alt="Logo">
                </div>
              <?php else : ?>
                <div class="p-case__head-img">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/img/noimg.png'); ?>" alt="画像なし">
                </div>
                <!-- /p-head__case-img -->
              <?php endif; ?>
            </div>
            <!-- /p-case__card-heading -->
            <div class="p-case__body">
              <div class="p-case__course">
                <span>研修コース：</span>
                <span><?php echo $genre_term->name; ?></span>
              </div>
              <!-- /p-case__course -->
              <div class="p-case__text-boxes">
                <div class="p-case__text-box">
                  <h4 class="p-case__checkbox">研修の目的</h4>
                  <?php if(get_field('purpose')) : ?>
                  <p class="p-case__text"><?php the_field('purpose'); ?></p>
                  <?php endif; ?>
                </div>
                <!-- /p-case__text-box -->
                <div class="p-case__text-box">
                  <h4 class="p-case__checkbox">選んだ理由</h4>
                  <?php if(get_field('reason')) : ?>
                  <p class="p-case__text"><?php the_field('reason'); ?></p>
                  <?php endif; ?>
                </div>
                <!-- /p-case__text-box -->
                <div class="p-case__text-box">
                  <h4 class="p-case__checkbox">導入後の成果・効果</h4>
                  <?php
                  $result = get_field('result');
                  if($result) : ?>
                  <p class="p-case__text"><?php echo nl2br(esc_html($result)); ?></p>
                  <?php endif; ?>
                </div>
                <!-- /p-case__text-box -->
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
          <a href="<?php echo esc_url(get_term_link($genre_term, 'business')) ?>" class="c-button c-button__quaternary"><span class="c-button__text"><?php echo $genre_term->name; ?>の詳細</span><span class="c-button__arrow">&rarr;</span></a>
        </div>
        <!-- /p-case__button -->
      </div>
      <!-- /p-case__content -->
      <?php endforeach; ?>
    </div>
    <!-- /p-case__contents -->
  </div>
  <!-- /l-inner -->
</section>
<!-- /l-low-contents -->



<?php get_footer(); ?>