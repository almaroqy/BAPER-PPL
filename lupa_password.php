<?php
session_start();
require_once('db_login.php');

if (isset($_POST["submit"])){
    $valid = true;
    $hp = $_POST['hp'];
    $password = $_POST['password'];
    $konfirmasi_password = $_POST['konfirmasi_password'];

    if ($password == '' or $konfirmasi_password == ''){
        $error_password = "Password is required";
    }elseif ($konfirmasi_password != $password){
        $error_konfirmasi_password = "Password does not match";
    }

    if ($valid){
        $query = $db->query('UPDATE user set password = "'.md5($password).'" where hp=' . $hp);
    }
    $result = $db->query($query);

    if (!$result) {
        die($result . $db->error);
    } else {
        if ($result->num_rows > 0) { //login berhasil
          $row = $result->fetch_object();
          $_SESSION['email'] = $email;
          $_SESSION['username'] = $row->nama_user;
          if ($row->tipe == 1) {
            $_SESSION['kategori'] = 'admin';
            header('Location:index_admin.php');
          } else {
            $_SESSION['kategori'] = 'user';
            header('Location:index.php');
          }
        } else {
          $error_password = "Combination email and password are not correct.";
        }
      }
      $db->close();
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
    <link rel="stylesheet" href="Front end/style/lupa_password.css" />
    <title>Baper!</title>
</head>

<body>
    <main>
        <section class="lupa-password">
            <div class="container form-lupa-password">
                <img class="logo" src="Front end/image/logo.png" alt="logo">
                <div class="margin">
                    Lupa Password
                </div>
                
                <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <div class="margin form-group">
                        <input class="form-control" type="text" name="konf_telp" placeholder="Masukan nomor telepon anda" required>
                        <div class="text-danger" style="font-size: small; text-align: left;"><?php if (isset($error_telp)) {
                                                                                            echo $error_telp;
                                                                                        } ?></div>
                    </div>
                    <br> <br>
                    <div class="margin form-group">
                        <ul class="list-unstyled">
                            <li>
                                <input class="form-control" type="password" name="password" placeholder="Password baru" required>
                                <div class="text-danger" style="font-size: small; text-align: left;"><?php if (isset($error_password)) {
                                                                                            echo $error_password;
                                                                                        } ?></div>
                            </li>
                            <li>
                                <input class="form-control" type="password" name="re-type" placeholder="Re-type Password" required>
                                <div class="text-danger" style="font-size: small; text-align: left;"><?php if (isset($error_konfirmasi_password)) {
                                                                                            echo $error_konfirmasi_password;
                                                                                        } ?></div>
                            </li>
                        </ul>
                        <div class="ganti-password">
                            <button type="button" name = "submit" class="btn btn-dark">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5b9f1690ea.js" crossorigin="anonymous"></script>
</body>

</html>