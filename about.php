<?php
/**
 * Template Name: about
 */
 get_header();
?>

<div class="l-low p-low__about">
  <h1 class="p-low__heading">当社について</h1>
</div>

<?php if (function_exists('bcn_display')) : ?>
  <!-- breadcrumb -->
  <div class="p-breadcrumb">
    <?php bcn_display(); // BreadcrumbNavXTのパンくずを表示するための記述 ?>
  </div><!-- /breadcrumb -->
<?php endif; ?>


<?php get_footer(); ?>