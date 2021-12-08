<?php
include('./db_login.php');
if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $tgl = $_POST['tgl'];
    $alamat = $_POST['alamat'];
    $gambar = $_FILES['foto']['name'];
    $path = $_FILES['foto']['tmp_name'];
    move_uploaded_file($path, './Front end/image/' . $gambar);;
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $hp = $_POST['hp'];
    if ($gambar == "") {
        // jika tak upload file
        $gambar = 'user.png';
    }
    $query = $db->query('INSERT INTO user(nama_user,email,password,tanggal_lahir,alamat,tipe,gambar,hp) values("' . $nama . '","' . $email . '","' . md5($pwd) . '","' . $tgl . '","' . $alamat . '", "2", "' . $gambar . '","' . $hp . '")');
    if (!$query) {
        die($db->error . $query);
    } else {
        $db->close();
        header('location: ./anggota_admin.php?berhasil=tmbh');
    }
}



include('./balikkelogin.php');

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
    <link rel="stylesheet" href="Front end/style/tambah_anggota.css" />
    <title>Baper!</title>
</head>

<body>
    <!-- NAVBAR -->
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
                                    <h1>Tambah Anggota</h1>
                                </div>
                            </div>

                            <div class="tmb" style="padding-left: 10%; padding-right: 10%;">
                                <div class="col">
                                    <input type="email" required name="email" placeholder="Email">
                                </div>
                                <div class="col">
                                    <input type="text" required name="pwd" placeholder="Password">
                                </div>
                                <div class="col">
                                    <input type="text" required name="nama" placeholder="Nama">
                                </div>
                                <div class="col">
                                    <input type="date" required name="tgl" placeholder="Tangal Lahir">
                                </div>
                                <div class="col">
                                    <input type="text" required name="hp" placeholder="No HP">
                                </div>
                                <div class="col">
                                    <input type="text" required name="alamat" placeholder="Alamat">
                                </div>
                                <div class="col">
                                    <p>Upload Foto Anda</p>
                                    <input type="file" name="foto">
                                </div>
                                <div class="col" style="padding-left: 120px;">
                                    <button type="submit" name="tambah" class="btn btn-dark">Tambah</button>
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