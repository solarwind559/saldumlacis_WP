<footer class="footer">
  <div class="footer-info">
  <div class="logo" id="logo">
    <a href="<?php echo esc_url( home_url( '/' ) )?>">
      <?php echo saldumlacis_custom_logo(); ?>
    </a>
  </div>
    <!-- <div class="contacts"> -->
    <?php
      if(is_active_sidebar('contacts')){
      dynamic_sidebar('contacts');
      }
    ?>
    <!-- </div> -->

    <!-- <div class="follow"> -->
    <?php
      if(is_active_sidebar('socials')){
      dynamic_sidebar('socials');
      }
    ?>
    <!-- </div> -->
    
  </div>

  <!-- <div class="copyright"> -->
    <?php
      if(is_active_sidebar('copyright')){
      dynamic_sidebar('copyright');
      }
    ?>
  <!-- </div> -->

</footer>

</body>
</html>

<?php
wp_footer();
?>
