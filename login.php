<?php
session_start();
require_once('db_login.php');

if (isset($_POST["login"])) {
  $valid = TRUE;

  //cek validasi email
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  if ($email == '') {
    $error_email = "Email is required";
    $valid = FALSE;
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error_email = "Invalid Email format";
    $valid = FALSE;
  }

  //cek validasi password
  $password = test_input($_POST['password']);
  if ($password == '') {
    $error_password = "Password is required";
    $valid = FALSE;
  }

  //cek validasi
  if ($valid) {
    //asign a query
    $query = "SELECT * FROM user WHERE email='" . $email . "' AND password='" . $password . "' ";
    //Execute the query
    $result = $db->query($query);
    if (!$result) {
      die("Could not query the database: <br />" . $db->error);
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
  <link rel="stylesheet" href="Front end/style/login.css" />
  <title>Baper!</title>
</head>

<body>
  <main>
    <section class="lupa-password">
      <div class="container form-lupa-password">
        <img class="logo" src="Front end/image/logo.png" alt="logo">
        <div class="margin">
          (Balai Perpustakaan)
        </div>
        <div class="silakan-masuk">
          Silakan Masuk
        </div>
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplate="off">
          <div class="margin form-group">
            <input class="form-control" type="text" id="email" name="email" placeholder="Email" value="<?php if (isset($email)) {
                                                                                                            echo $email;
                                                                                                          } ?>">
            <div class="text-danger" style="font-size: small; text-align: left;"><?php if (isset($error_email)) {
                                        echo $error_email;
                                      } ?></div>
          </div>
          <div class="margin form-group">
            <ul class="list-unstyled">
              <li>
                <input class="form-control" type="password" id="password" name="password" placeholder="Password">

                <div class="text-danger" style="font-size: small; text-align: left;"><?php if (isset($error_password)) {
                                            echo $error_password;
                                          } ?></div>
              </li>
            </ul>
            <div class="ganti-password">
              <button type="submit" name="login" class="btn btn-dark" value="submit">Login</button>
            </div>
            <div class="row">
              <div class="col">
                <div class=" text-start ">
                  <a href="signup.php" style="text-decoration: none;color:black;font-size:small">Daftar</a>
                </div>
              </div>
              <div class="col">
                <div class=" text-end ">
                  <a href="lupa_password.php" style="text-decoration: none;color:black;font-size:small">Lupa Password</a>
                </div>
              </div>
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