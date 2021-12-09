<?php
include('./balikkelogin.php');
include('./db_login.php');
$query = "select * from buku";
$kerr = $db->query($query);
?>


<!DOCTYPE html>

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
    <link rel="stylesheet" href="Front end/style/index_admin.css" />
    <title>Baper!</title>
</head>

<body>
    <?php
    include('nav_admin.php');
    ?>
    <main>
        <div class="container" style="padding-top: 13%; ">
            <div class="row">
                <div class="col">

                </div>
            </div>
        </div>
        <?php
        if (isset($_GET['berhasil'])) {
            if ($_GET['berhasil'] == 'tmbh') {
                echo '
                    <div class="alert alert-success alert-dismissible ms-5 me-5 mt-3 text-center d-flex justify-content-center" id="berhasil"  >
                        <h4>Berhasil Menambah Buku</h4>
                    </div>';
            }
            if ($_GET['berhasil'] == 'edit') {
                echo '
                    <div class="alert alert-success alert-dismissible ms-5 me-5 mt-3 text-center d-flex justify-content-center" id="berhasil" >
                        <h4>Berhasil Merubah Buku</h4>
                        <button class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                    </div>';
            }
            if ($_GET['berhasil'] == 'hps') {
                echo '
                    <div class="alert alert-success alert-dismissible ms-5 me-5 mt-3 text-center d-flex justify-content-center" id="berhasil" >
                        <h4>Berhasil Hapus Buku</h4>
                    </div>';
            }
        } ?>
        <div class="container color-white" style="padding-top: 1%; ">
            <div class="row">
                <div class="col">
                    <div class="tmb-book" style="padding-left: 80% ;">
                        <a href="tambah_buku.php" class="btn btn-success btn-xxl">Tambah Buku</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center" style="padding-top: 3%;">
            <div class="row" style="padding-left: 5%; padding-right: 5%; width: 100%;">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Foto</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Stok</th>
                                <th>Stok Tersedia</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!$kerr) {
                                die($db->error);
                            } else {
                                while ($row = $kerr->fetch_object()) {
                                    echo '<th>' . $row->id_buku . '</th>';
                                    $image = $row->gambar_buku;
                                    echo '<th>' . '<img src="./Front end/image/' . $image . '" width="100">' . '</th>';
                                    echo '<th>' . $row->judul . '</th>';
                                    echo '<th>' . $row->penulis . '</th>';
                                    echo '<th>' . $row->tahun_terbit . '</th>';
                                    echo '<th>' . $row->jumlah_copy . '</th>';
                                    echo '<th>' . $row->stok_tersedia . '</th>';
                                    echo '<td>
                                    <div class="actn">
                                        <a href="./edit_buku.php?id=' . $row->id_buku . '" class="btn btn-info btn-md">Edit</a>
                                        <a href="./hapus_buku.php?id=' . $row->id_buku . '" class="btn btn-danger btn-md">Hapus</a>
                                    </div>
                                </td>
                            </tr>';
                                }
                            } ?>
                        </tbody>
                    </table>
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
    <script src="ajax.js"></script>
</body>

</html>