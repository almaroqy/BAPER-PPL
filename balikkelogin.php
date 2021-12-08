<?php
session_start();
if (!isset($_SESSION['email']) || $_SESSION['kategori'] != 'admin') {
    header('Location: login.php');
}
