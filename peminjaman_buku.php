<?php
include('./balikkelogin.php');
require_once('db_login.php');
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
    <link rel="stylesheet" href="Front end/style/peminjaman_scan.css" />
    <title>Baper!</title>
</head>
<?php
if (isset($_GET["tambah"])) {
    $valid = TRUE; //flag validasi

    $idAnggota = isset($_GET['idAnggota']) ? $_GET['idAnggota'] : '';
    if ($idAnggota == '') {
        $error_idAnggota = "ID anggota harus diisi";
        $valid = FALSE;
    }

    $idBuku = isset($_GET['idBuku']) ? $_GET['idBuku'] : '';
    if ($idBuku == '') {
        $error_idBuku = "ID buku harus diisi";
        $valid = FALSE;
    }

    $idBuku1 = isset($_GET['idBuku1']) ? $_GET['idBuku1'] : '';
    $idBuku2 = isset($_GET['idBuku2']) ? $_GET['idBuku2'] : '';
    $idBuku3 = isset($_GET['idBuku3']) ? $_GET['idBuku3'] : '';

    if ($valid) {
        $queryNamaAnggota = "SELECT nama_user FROM user WHERE id_user=" . $idAnggota;
        $hasil = $db->query($queryNamaAnggota);
        if (!$hasil) {
            die($db->error);
        } else {
            while ($row = $hasil->fetch_object()) {
                $namaAnggota = $row->nama_user;
            }
        }
        /*
        $queryCekBuku = "SELECT judul, jumlah_copy from buku where id_buku=" . $idBuku;
        $hasil = $db->query($queryCekBuku);
        if (!$hasil) {
            die($db->error);
        } else {
            $brs = $hasil->fetch_object();
            if ($brs->jumlah_copy == 0) {
                die('Stok buku '. $brs->judul .' habis!');
            }
        }
        */
        if ($idBuku1 == '') {
            $idBuku1 = $idBuku;
        } elseif ($idBuku2 == '') {
            $idBuku2 = $idBuku;
        } elseif ($idBuku3 == '') {
            $idBuku3 = $idBuku;
        } else {
            $error_idBuku4 = "Max 3 buku dalam 1 sesi peminjaman";
            $valid = FALSE;
        }
    }
}

if (isset($_POST["submit"])) {
    if ($idBuku1 != '') {
        $query1 = " INSERT INTO pinjam_buku (id_buku, id_peminjam, status, tanggal_pinjam) VALUES (" . $idBuku1 . "," .
            $idAnggota . "'jomblo', current_date)";
        $result1 = $db->query($query1);
    } elseif ($idBuku2 != '') {
        $query2 = " INSERT INTO pinjam_buku (id_buku, id_peminjam, status, tanggal_pinjam) VALUES (" . $idBuku2 . "," .
            $idAnggota . "'jomblo', current_date)";
        $result2 = $db->query($query2);
    } elseif ($idBuku3 != '') {
        $query3 = " INSERT INTO pinjam_buku (id_buku, id_peminjam, status, tanggal_pinjam) VALUES (" . $idBuku3 . "," .
            $idAnggota . "'jomblo', current_date)";
        $result3 = $db->query($query3);
    }

    if (!$result1 || !$result2 || !$result3) {
        die("Could not the query the database: <br />" . $db->error . '<br>Query:' . $query);
    } else {
        echo '<div class="alert alert-success">Peminjaman berhasil ditambahkan.</div>';
    }
}
?>

<body>
    <!-- NAVBAR -->
    <?php
    include('nav_admin.php');
    ?>
    <main>
        <section class="section-peminjaman-buku">
            <div class="container">
                <form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
                    <div class="row">
                        <div class="col-lg-6 btm-bor border">
                            <div class="judul-text">
                                <h1>
                                    Peminjaman Buku
                                </h1>
                            </div>
                            <div class="input-id">
                                <div class="mb-3 anggota">
                                    <label for="idAnggota" class="form-label">Id Anggota</label>
                                    <input type="text" class="form-control" id="idAnggota" name="idAnggota" value="<?php if (isset($idAnggota)) echo $idAnggota; ?>">
                                    <div class="text-danger">
                                        <?php if (isset($error_idAnggota)) echo $error_idAnggota; ?>
                                    </div>
                                </div>
                                <div class="mb-3 anggota">
                                    <label for="idBuku" class="form-label">Id Buku</label>
                                    <input type="text" class="form-control" id="idBuku" name="idBuku">
                                    <div class="text-danger">
                                        <?php if (isset($error_idBuku)) echo $error_idBuku; ?>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-dark" name="tambah" value="submit">Tambah</button>
                            </div>
                        </div>
                        <div class="col-lg-6 btm-bor border">
                            <h1>
                                Detail
                            </h1>
                            <div class="mb-3 dtl-anggota">
                                <label for="anggota" class="form-label">Anggota</label>
                                <input type="text" class="form-control" id="anggota" value="<?php if (isset($namaAnggota)) echo $namaAnggota ?>">
                            </div>
                            <div class="mb-3 dtl-anggota ">
                                <label for="idBuku" class="form-label">Buku</label>
                                <input type="text" class="mb-1 form-control" id="idBuku1" name="idBuku1" value="<?php if (isset($idBuku1)) echo $idBuku1 ?>">
                                <input type="text" class="mb-1 form-control" id="idBuku2" name="idBuku2" value="<?php if (isset($idBuku2)) echo $idBuku2 ?>">
                                <input type="text" class="mb-1 form-control" id="idBuku3" name="idBuku3" value="<?php if (isset($idBuku3)) echo $idBuku3 ?>">
                                <div class="text-danger">
                                    <?php if (isset($error_idBuku4)) echo $error_idBuku4; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pjm">
                        <button type="submit" class="btn-dark text-center" name="submit" value="submit">Pinjam</button>
                    </div>
                </form>
            </div>
            </div>
        </section>
    </main>
    <?php
    include('footer.php')
    ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5b9f1690ea.js" crossorigin="anonymous"></script>

</body>

</html>