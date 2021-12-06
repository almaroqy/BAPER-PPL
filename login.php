<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
  <?php
  session_start(); //inisialisasi session
  require_once('db_login.php');

  //cek apakah user sudah submit form
  if (isset($_POST["submit"])) {
    $valid = TRUE; //flag validasi

    //cek validasi nama
    $nama = test_input($_POST['nama']);
    if ($nama == '') {
      $error_nama = "Name is required";
      $valid = FALSE;
    }

    //cek validasi password
    $password = md5($_POST['password']);
    if ($password == '') {
      $error_password = "Password is required";
      $valid = FALSE;
    }

    //cek validasi
    if ($valid) {
      //asign a query
      $query = " SELECT * FROM anggota WHERE nama='" . $nama . "' AND password='" . $password . "' ";
      $query2 = " SELECT * FROM petugas WHERE nama='" . $nama . "' AND password='" . $password . "' ";
      //excute the query
      $result = $db->query($query);
      $result2 = $db->query($query2);
      if (!$result && !$result2) {
        die("Could not query the database: <br />" . $db->error);
      } else if ($result->num_rows > 0) {
        $_SESSION['username'] = $nama;
        $_SESSION['user'] = 'anggota';
        header('Location: index.php');
        exit;
      } else if ($result2->num_rows > 0) {  //login gagal
        $_SESSION['username'] = $nama;
        $_SESSION['user'] = 'admin';
        header('Location: index2.php');
        exit;
      } else {
        echo '<div class="alert alert-danger"> Combination of name and password incorrect. </div>';
      }
      //close db connection
      $db->close();
    }
  }
  ?>
  <form method="POST" autocomplete="on" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="container">
      <div class="row content">
        <h3 class="signin-text mb-3"> Sign In</h3>

        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="nama" class="form-control" id="nama" name="nama" size="30" value="">
          <div class="text-danger"><?php if (isset($error_nama)) echo $error_nama; ?></div>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" size="30" value="">
          <div class="text-danger"><?php if (isset($error_password)) echo $error_password; ?></div>
        </div>
        <button type="submit" class="btn btn-primary" name="submit" value="submit">Login</button>
      </div>
    </div>
    </div>
  </form>
</body>

</html>