<?php
include('./db_login.php');
include('./balikkelogin.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
};

if (isset($_POST['ubah'])) {
    $nama = $_POST['nama'];
    $tgl = $_POST['tgl'];
    $alamat = $_POST['alamat'];
    $gambar = $_FILES['foto']['name'];
    $path = $_FILES['foto']['tmp_name'];
    move_uploaded_file($path, './Front end/image/' . $gambar);;
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $hp = $_POST['hp'];
    if ($gambar != '') {
        $query = $db->query('update user set nama_user="' . $nama . '",tanggal_lahir="' . $tgl . '",alamat="' . $alamat . '",email="' . $email . '",password="' . $pwd . '",gambar="' . $gambar . '",hp="' . $hp . '" where id_user=' . $id);
    } else {
        $query = $db->query('update user set nama_user="' . $nama . '",tanggal_lahir="' . $tgl . '",alamat="' . $alamat . '",email="' . $email . '",password="' . $pwd . '",hp="' . $hp . '" where id_user = ' . $id);
    }
    echo $query;
    if (!$query) {
        die($query . $db->error);
    } else {
        $db->close();
        header('location: ./anggota_admin.php?berhasil=edit');
    }
} else {
    $query = $db->query('select * from user where id_user=' . $id);
    if (!$query) {
        die($db->error);
    } else {
        while ($row = $query->fetch_object()) {
            $nama = $row->nama_user;
            $tgl = $row->tanggal_lahir;
            $alamat = $row->alamat;
            $foto = $row->gambar;
            $email = $row->email;
            $pwd = $row->password;
            $hp = $row->hp;
        }
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
    <link rel="stylesheet" href="Front end/style/edit_anggota.css" />
    <title>Baper!</title>
</head>

<body>
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
                                    <h1>Edit Anggota</h1>
                                </div>
                            </div>
                            <div class="tmb" style="padding-left: 10%; padding-right: 10%;">
                                <div class="col">
                                    <input type="email" placeholder="Email" name="email" value="<?= $email ?>">
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="Password" name="pwd" value="<?= $pwd ?>">
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="Nama" name="nama" value="<?= $nama ?>">
                                </div>
                                <div class="col">
                                    <input type="date" placeholder="Tangal Lahir" name="tgl" value=<?= date('Y-m-d', strtotime($tgl))  ?>>
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="No HP" name="hp" value="<?= $hp ?>">
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="Alamat" name="alamat" value="<?= $alamat ?>">
                                </div>
                                <div class="col">
                                    <p>Upload Foto Anda</p>
                                    <input type="file" name="foto">
                                </div>
                                <div class="col" style="padding-left: 120px;">
                                    <button type="submit" name="ubah" class="btn btn-dark">Ubah</button>
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