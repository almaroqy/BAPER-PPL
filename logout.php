<?php
session_start();
if(isset($_SESSION['email'])){
  unset($_SESSION['email']);
  unset($_SESSION['username']);
  unset($_SESSION['kategori']);
  session_destroy();
}
header('Location: index.php');
?>
