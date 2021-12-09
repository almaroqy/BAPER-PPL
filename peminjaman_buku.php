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
    } else {
        $query = "SELECT id_user from user where id_user=" . $idAnggota;
        $hasil = $db->query($query);
        if (!$hasil) {
            die($db->error);
        } elseif (mysqli_num_rows($hasil) == 0) {
            $error_idAnggota = "ID anggota tidak ditemukan";
            $valid = FALSE;
        }
    }

    $idBuku = isset($_GET['idBuku']) ? $_GET['idBuku'] : '';
    if ($idBuku == '') {
        $error_idBuku = "ID buku harus diisi";
        $valid = FALSE;
    } else {
        $query = "SELECT judul, stok_tersedia from buku where id_buku=" . $idBuku;
        $hasil = $db->query($query);
        if (!$hasil) {
            die($db->error);
        } else {
            while ($row = $hasil->fetch_object()) {
                $judulBuku = $row->judul;
                $jumlahBuku = $row->stok_tersedia;
            }
            if (!isset($judulBuku)) {
                $error_idBuku = "ID buku tidak ditemukan";
                $valid = FALSE;
            } elseif ($jumlahBuku == 0) {
                $error_idBuku = "Stok buku habis";
                $valid = FALSE;
            }
        }
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

        if ($idBuku1 == '') {
            $idBuku1 = $idBuku;
            $jumlahBuku1 = $jumlahBuku;
        } elseif ($idBuku2 == '') {
            $idBuku2 = $idBuku;
            $jumlahBuku2 = $jumlahBuku;
        } elseif ($idBuku3 == '') {
            $idBuku3 = $idBuku;
            $jumlahBuku3 = $jumlahBuku;
        } else {
            $error_idBuku4 = "Max 3 buku dalam 1 sesi peminjaman";
            $valid = FALSE;
        }
    }
}

if (isset($_GET["submit"])) {
    $idAnggota = isset($_GET['idAnggota']) ? $_GET['idAnggota'] : '';
    $idBuku1 = isset($_GET['idBuku1']) ? $_GET['idBuku1'] : '';
    $idBuku2 = isset($_GET['idBuku2']) ? $_GET['idBuku2'] : '';
    $idBuku3 = isset($_GET['idBuku3']) ? $_GET['idBuku3'] : '';

    if ($idBuku1 != '') {
        $query1 = " INSERT INTO pinjam_buku (id_buku, id_peminjam, status, tanggal_pinjam, batas_pinjam) VALUES (" . $idBuku1 . "," .
            $idAnggota . ", 'meminjam', current_date, date_add(current_date, INTERVAL 7 DAY))";
        $result1 = $db->query($query1);
        if (!$result1) {
            die("Could not query the database: <br />" . $db->error . '<br>Query1:' . $query1);
        } else {
            echo '<div class="alert alert-success alert-dismissible ms-5 me-5 mt-3 text-center d-flex justify-content-center" style="position: fixed; z-index:1; left: 30%" id="berhasil" >
                                        <h4>Peminjaman buku berhasil ditambahkan</h4>
                                        <button class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                                    </div>';
        }

        $query1b = "SELECT stok_tersedia from buku where id_buku=" . $idBuku1;
        $result1b = $db->query($query1b);
        if (!$result1b) {
            die($db->error);
        } else {
            $row = $result1b->fetch_object();
        }

        $query1c = "UPDATE buku SET stok_tersedia = " . ($row->stok_tersedia - 1) . " where id_buku = " . $idBuku1;
        $result1c = $db->query($query1c);
    }
    if ($idBuku2 != '') {
        $query2 = " INSERT INTO pinjam_buku (id_buku, id_peminjam, status, tanggal_pinjam, batas_pinjam) VALUES (" . $idBuku2 . "," .
            $idAnggota . ", 'meminjam', current_date, date_add(current_date, INTERVAL 7 DAY))";
        $result2 = $db->query($query2);
        if (!$result2) {
            die("Could not query the database: <br />" . $db->error . '<br>Query2:' . $query2);
        }

        $query2b = "SELECT stok_tersedia from buku where id_buku=" . $idBuku2;
        $result2b = $db->query($query2b);
        if (!$result2b) {
            die($db->error);
        } else {
            $row = $result2b->fetch_object();
        }

        $query2c = "UPDATE buku SET stok_tersedia = " . ($row->stok_tersedia - 1) . " where id_buku = " . $idBuku2;
        $result2c = $db->query($query2c);
    }
    if ($idBuku3 != '') {
        $query3 = " INSERT INTO pinjam_buku (id_buku, id_peminjam, status, tanggal_pinjam, batas_pinjam) VALUES (" . $idBuku3 . "," .
            $idAnggota . ", 'meminjam', current_date, date_add(current_date, INTERVAL 7 DAY))";
        $result3 = $db->query($query3);
        if (!$result3) {
            die("Could not query the database: <br />" . $db->error . '<br>Query3:' . $query3);
        }

        $query3b = "SELECT stok_tersedia from buku where id_buku=" . $idBuku3;
        $result3b = $db->query($query3b);
        if (!$result3b) {
            die($db->error);
        } else {
            $row = $result3b->fetch_object();
        }

        $query3c = "UPDATE buku SET stok_tersedia = " . ($row->stok_tersedia - 1) . " where id_buku = " . $idBuku3;
        $result3c = $db->query($query3c);
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
                                    <input type="text" class="form-control" id="idAnggota" name="idAnggota" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" value="<?php if (isset($idAnggota)) echo $idAnggota; ?>">
                                    <div class="text-danger">
                                        <?php if (isset($error_idAnggota)) echo $error_idAnggota; ?>
                                    </div>
                                </div>
                                <div class="mb-3 anggota">
                                    <label for="idBuku" class="form-label">Id Buku</label>
                                    <input type="text" class="form-control" id="idBuku" name="idBuku" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                                    <div class="text-danger">
                                        <?php if (isset($error_idBuku)) echo $error_idBuku; ?>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-dark" name="tambah" id="tambah" value="submit">Tambah</button>
                            </div>
                        </div>
                        <div class="col-lg-6 btm-bor border">
                            <h1>
                                Detail
                            </h1>

                            <div class="mb-3 dtl-anggota">
                                <label for="anggota" class="form-label">Anggota</label>
                                <input type="text" class="form-control" id="anggota" readonly="readonly" value="<?php if (isset($namaAnggota)) echo $namaAnggota ?>">
                            </div>
                            <div class="mb-3 dtl-anggota ">
                                <label for="idBuku" class="form-label">Buku</label>
                                <input type="text" class="mb-1 form-control" id="idBuku1" name="idBuku1" readonly="readonly" value="<?php if (isset($idBuku1)) echo $idBuku1 ?>">
                                <input type="text" class="mb-1 form-control" id="idBuku2" name="idBuku2" readonly="readonly" value="<?php if (isset($idBuku2)) echo $idBuku2 ?>">
                                <input type="text" class="mb-1 form-control" id="idBuku3" name="idBuku3" readonly="readonly" value="<?php if (isset($idBuku3)) echo $idBuku3 ?>">
                                <div class="text-danger">
                                    <?php if (isset($error_idBuku4)) echo $error_idBuku4; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pjm">
                        <button type="submit" class="btn-dark text-center" name="submit" id="submit" value="submit">Pinjam</button>
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