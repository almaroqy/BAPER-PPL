<?php
$id = $_GET['id'];
include './barcode.php';
echo bar128("$id");
