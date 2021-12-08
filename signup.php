<?php
include('./db_login.php');

if (isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $pwd = $_POST['pwd1'];
    $email = $_POST['email'];
    $tlp = $_POST['tlp'];
    $tgl = $_POST['tgl'];
    $alamat = $_POST['alamat'];
    $gambar = $_FILES['gambar']['name'];
    $path = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($path, './Front end/image/' . $gambar);
    $query = 'select * from user where email ="' . $email . '"';
    $aw = $db->query($query);
    if ($aw) {
        if ($aw->num_rows > 0) {
            $berhasil = 0;
            $gagal = 'Email sudah terpakai, silahkan ganti yang lain';
        } else {
            if ($_FILES['gambar']['name'] == "") {
                // jika tak upload file
                $gambar = 'user.png';
            }
            $query = "insert into user (email,nama_user,password,gambar,hp,tanggal_lahir,alamat,tipe) values ('$email','$nama','$pwd','$gambar','$tlp','$tgl','$alamat','2')";
            $aw = $db->query($query);
            if (!$aw) {
                $gagal = ($db->error . $query);
                $berhasil = 0;
            }
            $berhasil = 1;
        }
    } else {

        die('Tak bisa mengkueri database: <br>' . $db->error . $query);
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
    <link rel="stylesheet" href="Front end/style/signup.css" />
    <title>Baper!</title>

</head>

<body>
    <main>
        <section class="lupa-password">
            <form enctype="multipart/form-data" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                <div class="container form-lupa-password">
                    <img class="logo" src="Front end/image/logo.png" alt="logo">
                    <div class="margin" style="font-weight: bolder;">
                        Registrasi Akun
                    </div>
                    <?php
                    if (isset($berhasil)) {
                        if ($berhasil == 1) {
                            echo '
                                <div class="alert alert-success alert-dismissible" id="berhasil">
                                    <h2>Sign Up Berhasil</h2>
                                    <p>Klik <a class="alert-link" href="./login.php">disini</a> untuk login</p>
                                    <button class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                                </div>';
                        } else {
                            echo '<div class="alert alert-danger alert-dismissible" id="gagal">
                                    <h2>Sign Up Gagal</h2>
                                    <p><? if (isset($gagal)) {
                                            echo $gagal;
                                        } ?></p>
                                        <button class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                                </div>';
                        }
                    }
                    ?>
                    <div class="margin form-group">
                        <input required class="form-control" type="email" name="email" placeholder="E-Mail">
                    </div>
                    <div class=" form-group">
                        <ul class="list-unstyled">
                            <li>
                                <input required class="form-control" type="password" name="pwd1" placeholder="Password">
                            </li>
                            <li>
                                <input required class="form-control" type="password" name="pwd2" placeholder="Re-type Password">
                            </li>
                            <p class="m-4" style="font-size: larger;font-weight:bold">
                                Data Diri
                            </p>

                            <li>
                                <input required class="form-control" type="text" name="nama" placeholder="Nama Lengkap">
                            </li>
                            <li>
                                <input required class="form-control" type="date" name="tgl" placeholder="Tanggal Lahir">
                            </li>
                            <li>
                                <input required class="form-control" type="number" name="tlp" placeholder="No Telepon">
                            </li>
                            <li>
                                <input required class="form-control" type="text" name="alamat" placeholder="Alamat">
                            </li>
                            <li class="mt-2">
                                <label for="" class="d-flex justify-start" style="font-family: 'Courier New', Courier, monospace;">Gambar diri</label>
                                <input class="d-flex justify-start mt-2" type="file" name="gambar">
                            </li>
                        </ul>
                        <div class="daftar">
                            <button type="submit" name="daftar" style="width: 100%;" class="btn btn-dark">Daftar</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5b9f1690ea.js" crossorigin="anonymous"></script>

</body>

</html>