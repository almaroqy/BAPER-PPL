<?php
include("./db_login.php");
$id = $_GET['id'];
$query = $db->query('delete from user where id_user=' . $id);
if ($query) {
    $db->close();
    header('location: ./anggota_admin.php?berhasil=hps');
} else {
    die($query . $db->error);
    $db->close();
}
