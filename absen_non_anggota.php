<?php
include('./balikkelogin.php');
include('./db_login.php');

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $hp = $_POST['hp'];
    $alamat = $_POST['alamat'];
    $tgl = 'current_date';
    $query = $db->query('insert into absennonanggota(nama,hp,alamat,tanggal) values("' . $nama . '","' . $hp . '","' . $alamat . '",' . $tgl . ')');
    if (!$query) {
        die($db->error);
    } else {
        header('./absen_non_anggota.php');
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
    <link rel="stylesheet" href="Front end/style/absen_non_anggota.css" />
    <title>Baper!</title>
</head>

<body>
    <?php
    include('nav_admin.php');
    ?>

    <header>
        <div class="container m-mid" style="padding-top: 12%;     ;">
            <div class="bg-tmb">
                <div class="tmb-buku">
                    <div class="row">
                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                            <div class="hd-tmb">
                                <div class="col">
                                    <h1>Absen Non-Anggota</h1>
                                </div>
                            </div>
                            <div class="tmb">
                                <div class="col">
                                    <p>Nama</p>
                                    <input name="nama" type="text">
                                </div>
                                <div class="col">
                                    <p>No. Hp</p>
                                    <input name="hp" type="text">
                                </div>
                                <div class="col">
                                    <p>Alamat</p>
                                    <input name="alamat" type="text">
                                </div>

                                <div class="col" style="padding-left: 90px;">
                                    <button type="submit" name="submit" class="btn btn-dark">Submit</button>
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