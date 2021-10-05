<?php
require_once 'config.php'; ?> 
 
 <?php
   const USER_PROFILE = "user_profile";
   if (isset($_COOKIE[USER_PROFILE]))
      $theme = $_COOKIE[USER_PROFILE];
   else
      $theme = 0;
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $theme = $_POST["lst_theme"];
      $expiration = time() + 60 * 60;
      setcookie(USER_PROFILE, $theme, $expiration);
   } ?>
<?php
require_once 'views/_layout.php'; ?>