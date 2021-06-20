<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Saldumlācis</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>

<nav id="navigation">
  <div class="nav-top">
  <div class="logo" id="logo">
    <a href="<?php echo esc_url( home_url( '/' ) )?>">
      <?php echo saldumlacis_custom_logo(); ?>
    </a>
  </div>

<?php 
  $menu_array = array(
    'container'       => 'ul',
    'theme_location'  => 'header-nav',
    'container_class' => 'menu',
    'fallback_cb'     => false
  );
	wp_nav_menu( $menu_array );
?>

    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <img id="switch-from" class="menu-icon" src="http://saldumlacis.epizy.com/wp-content/uploads/2021/06/mini-menu.png" alt="menu icon">
      <img id="switch-to" class="menu-x" src="http://saldumlacis.epizy.com/wp-content/uploads/2021/06/close.png" alt="X" style="display: none">
    </a>

<!-- <?php 
  $mobile_menu_array = array(
    'container'       => 'ul',
    'theme_location'  => 'mobile-nav',
    'container_class' => 'open mobile-menu',
    'container_id'    => 'open',
    'fallback_cb'     => false
  );

	wp_nav_menu( $mobile_menu_array );
?> -->

      <ul class="mobile-menu open" id="open">
        <a href=""><li>Grāmata</li></a>
        <a href=""><li>Aktivitātes bērniem</li></a>
        <a href=""><li>Pasakas</li></a>
        <a href=""><li>Dzejoļi</li></a>
        <a href=""><li>Kontakti</li></a>
      </ul>
  </div>
</nav>

<?php
wp_head();
?>

