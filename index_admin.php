<?php
include('./balikkelogin.php');
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
                    <form method="GET">
                        <input type="text" name="search_title" id="search_title" placeholder="Cari Buku" class="form-control" value="" onkeyup="forIndex()">
                    </form>
                </div>
            </div>
        </div>
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
                            require_once('db_login.php');
                            $query = "SELECT * FROM buku";
                            $data = mysqli_query($db, $query);
                            while ($row = $data->fetch_object()) {
                                echo '<tr>';
                                echo '<th>' . $row->id_buku . '</th>';
                                $image = $row->gambar_buku;
                                echo '<th>' . '<img src="Front end/image/' . $image . '" width="100">' . '</th>';
                                echo '<th>' . $row->penulis . '</th>';
                                echo '<th>' . $row->judul . '</th>';
                                echo '<th>' . $row->sinopsis . '</th>';
                                echo '<th>' . $row->jumlah_copy . '</th>';
                                echo '<th>' . $row->kategori . '</th>';
                                echo '<th>' . $row->letak_buku . '</th>';
                                echo '<th>' . $row->tahun_terbit . '</th>';
                                echo '</tr>';
                            }
                            ?>
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