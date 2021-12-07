<?php
if (isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $pwd = $_POST['pwd1'];
    $email = $_POST['email'];
    $tlp = $_POST['tlp'];
    $tmpt = $_POST['tmpt'];
    $tgl = $_POST['tgl'];
    $alamat = $_POST['alamat'];
    echo $alamat;
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
            <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                <div class="container form-lupa-password">
                    <img class="logo" src="Front end/image/logo.png" alt="logo">
                    <div class="margin">
                        Registrasi Akun
                    </div>
                    <div class="margin form-group">
                        <input class="form-control" type="email" name="email" placeholder="E-Mail">
                    </div>
                    <div class="margin form-group">
                        <ul class="list-unstyled">
                            <li>
                                <input class="form-control" type="password" name="pwd1" placeholder="Password">
                            </li>
                            <li>
                                <input class="form-control" type="password" name="pwd2" placeholder="Re-type Password">
                            </li>
                            <p class="data-diri">
                                Data Diri
                            </p>
                            <li>
                                <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap">
                            </li>
                            <li>
                                <input class="form-control" type="text" name="tmpt" placeholder="Tempat Lahir">
                            </li>
                            <li>
                                <input class="form-control" type="date" name="tgl" placeholder="Tanggal Lahir">
                            </li>
                            <li>
                                <input class="form-control" type="text" name="tlp" placeholder="No Telepon">
                            </li>
                            <li>
                                <input class="form-control" type="text" name="alamat" placeholder="Alamat">
                            </li>
                        </ul>
                        <div class="daftar">
                            <button type="submit" name="daftar" class="btn btn-dark">Daftar</button>
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