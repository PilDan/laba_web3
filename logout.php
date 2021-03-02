<?php
  require "db.php"; //использую RedBeanphp
  unset($_SESSION['logged_user']);
  header('Location: glav.php');
?>