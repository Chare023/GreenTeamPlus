<?php /* Template Name: Home */ ?>

<?php 
  get_header();
?>

<div class="l-ctn">
  <img src="<?php echo get_field('slider_image_1')['url']; ?>" alt="">
  <img src="<?php echo get_field('slider_image_2')['url']; ?>" alt="">
  <img src="<?php echo get_field('slider_image_3')['url']; ?>" alt="">
</div>
<?php
  get_footer();
?>