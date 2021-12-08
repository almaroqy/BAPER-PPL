<?php
include('./db_login.php');
include('./balikkelogin.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
};

if (isset($_POST['edit'])) {
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahunterbit = $_POST['tahun-terbit'];
    $jumlahcopy = $_POST['copybuku'];
    $stokada = $_POST['stokada'];
    $kategori = $_POST["kategori"];
    $letakbuku = $_POST["letak-buku"];
    $gambarbuku = $_FILES['gambar-buku']['name'];
    $path = $_FILES['gambar-buku']['tmp_name'];
    move_uploaded_file($path, './Front end/image/' . $gambarbuku);
    if ($gambarbuku != '') {
        
        $query = $db->query('UPDATE buku SET penulis="'.$penulis.'",judul="'.$judul.'",jumlah_copy="'.$jumlahcopy.'",kategori="'.$kategori.'",letak_buku="'.$letakbuku.'",tahun_terbit="'.$tahunterbit.'",gambar_buku="'.$gambarbuku.'",stok_tersedia='.$stokada.' WHERE id_buku=' . $id);
    } else {
        $query = $db->query('UPDATE buku SET penulis="'.$penulis.'",judul="'.$judul.'",jumlah_copy="'.$jumlahcopy.'",kategori="'.$kategori.'",letak_buku="'.$letakbuku.'",tahun_terbit="'.$tahunterbit.'",gambar_buku="'.$gambarbuku.'",stok_tersedia='.$stokada.' WHERE id_buku=' . $id);
    }
    echo $query;
    if (!$query) {
        die($query . $db->error);
    } else {
        $db->close();
        header('location: ./index_admin.php?berhasil=edit');
    }
} else {
    echo $id;
    $query = $db->query('select * from buku where id_buku=' . $id);
    if (!$query) {
        die($db->error);
    } else {
        while ($row = $query->fetch_object()) {
            $judul = $row->judul;
            $penulis = $row->penulis;
            $tahunterbit = $row->tahun_terbit;
            $jumlahcopy = $row->jumlah_copy;
            $stokada = $row->stok_tersedia;
            $kategori = $row->kategori;
            $letakbuku = $row->letak_buku;
            $gambarbuku = $row->gambar_buku;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- FONT AWESOME -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@300&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="Front end/style/edit_buku.css" />
    <title>Baper!</title>
</head>

<body>
    <?php
    include('nav_admin.php');
    ?>

    <header>
        <div class="container" style="padding-top: 12%; padding-left: 29%;">
            <div class="bg-tmb">
                <div class="tmb-buku">
                    <div class="row">
                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                            <div class="hd-tmb">
                                <div class="col">
                                    <h1>Edit Buku</h1>
                                </div>
                            </div>
                            <div class="tmb" style="padding-left: 10%; padding-right: 10%;">
                                <div class="col">
                                    <input type="text" placeholder="Judul Buku" name="judul" value="<?= $judul?>">
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="Penulis" name="penulis" value="<?= $penulis?>">
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="Tahun Terbit" name="tahun-terbit" value="<?= $tahunterbit?>">
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="Kategori" name="kategori" value="<?= $kategori?>">
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="Letak Buku" name="letak-buku" value="<?= $letakbuku?>">
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="Jumlah Copy" name="copybuku" value="<?= $jumlahcopy?>">
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="Stok Tersedia" name="stokada" value="<?= $stokada?>">
                                </div>
                                <div class="col">
                                    <p>Upload Cover Buku</p>
                                    <input type="file" name="gambar-buku">
                                </div>
                                <div class="col" style="padding-left: 120px;">
                                    <button type="submit" name="edit" class="btn btn-dark">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?php
    include('footer.php')
    ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5b9f1690ea.js" crossorigin="anonymous"></script>

</body>

</html>