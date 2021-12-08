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
    <link rel="stylesheet" href="Front end/style/riwayat.css" />
    <title>Baper!</title>
</head>

<body>
    <!-- NAVBAR -->
    <?php
    session_start();
    if (!isset($_SESSION['email']) || $_SESSION['kategori'] != 'user') {
        header('Location: login.php');
    }
    include('nav_anggota.php');
    ?>
    <main>
        <div class="container text-center" style="padding-top: 10%;">
            <div class="row">
                <div class="col-md-12 py-5">
                    <div class="bg-table">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="background-color:#C4C4C4; text-align: left;">Daftar Buku Yang Sedang Dipinjam</th>
                                </tr>
                            </thead>
                        </table>
                        <div class="table">
                            <div class="row" style="padding-left: 5%; padding-right: 5%;">
                                <div class="col-md-12">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID Transaksi</th>
                                                <th>Cover Buku</th>
                                                <th>Judul Buku</th>
                                                <th>Tanggal Pinjam</th>
                                                <th>Batas Pengembalian</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            require_once('db_login.php');
                                            $query = "SELECT id_pinjam, gambar_buku, judul, tanggal_pinjam, batas_pinjam
                                                        FROM pinjam_buku JOIN buku ON pinjam_buku.id_buku = buku.id_buku
                                                        JOIN user ON pinjam_buku.id_peminjam = user.id_user
                                                        WHERE nama_user='".$_SESSION['username']."' AND ISNULL(tanggal_kembali)";
                                            $result = mysqli_query($db, $query);
                                            while ($row = $result->fetch_object()) {
                                                echo '<tr>';
                                                echo '<th>' . $row->id_pinjam . '</th>';
                                                $image = $row->gambar_buku;
                                                echo '<th>' . '<img src="Front end/image/' . $image . '" width="100">' . '</th>';
                                                echo '<th>' . $row->judul . '</th>';
                                                echo '<th>' . $row->tanggal_pinjam . '</th>';
                                                echo '<th>' . $row->batas_pinjam . '</th>';
                                                echo '</tr>';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 py-5">
                    <div class="bg-table">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="background-color:#C4C4C4; text-align: left;">Riwayat Peminjaman</th>
                                </tr>
                            </thead>
                        </table>
                        <div class="table">
                            <div class="row" style="padding-left: 5%; padding-right: 5%;">
                                <div class="col-md-12">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID Transaksi</th>
                                                <th>Cover Buku</th>
                                                <th>Judul Buku</th>
                                                <th>Tanggal Pinjam</th>
                                                <th>Tanggal Kembali</th>
                                                <th>Batas Pengembalian</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            require_once('db_login.php');
                                            $query = "SELECT id_pinjam, gambar_buku, judul, tanggal_pinjam, tanggal_kembali, batas_pinjam
                                                        FROM pinjam_buku JOIN buku ON pinjam_buku.id_buku = buku.id_buku
                                                        JOIN user ON pinjam_buku.id_peminjam = user.id_user
                                                        WHERE nama_user='".$_SESSION['username']."' && tanggal_kembali IS NOT NULL
                                                        ORDER BY id_pinjam DESC, tanggal_kembali DESC";
                                            $result = mysqli_query($db, $query);
                                            while ($row = $result->fetch_object()) {
                                                echo '<tr>';
                                                echo '<th>' . $row->id_pinjam . '</th>';
                                                $image = $row->gambar_buku;
                                                echo '<th>' . '<img src="Front end/image/' . $image . '" width="100">' . '</th>';
                                                echo '<th>' . $row->judul . '</th>';
                                                echo '<th>' . $row->tanggal_pinjam . '</th>';
                                                echo '<th>' . $row->tanggal_kembali . '</th>';
                                                echo '<th>' . $row->batas_pinjam . '</th>';
                                                echo '</tr>';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
    include('footer.php')
    ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5b9f1690ea.js" crossorigin="anonymous"></script>
</body>

</html>