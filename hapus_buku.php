<?php
include("./db_login.php");
$id = $_GET['id'];
$query = $db->query('delete from buku where id_buku=' . $id);
if ($query) {
    $db->close();
    header('location: ./index_admin.php?berhasil=hps');
} else {
    die($query . $db->error);
    $db->close();
}
