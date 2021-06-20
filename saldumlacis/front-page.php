<?php /* Template Name: Sākumlapa */ ?>

<?php get_header(); ?>

<?php get_sidebar(); ?>


<?php
  if( have_posts() ){
    while( have_posts() ){
      the_post();
      the_content();
    }
  }
?>

<?php get_footer(); ?>