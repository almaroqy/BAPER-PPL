<?php
include('./balikkelogin.php');

require_once('db_login.php');
if (isset($_POST['tambah'])) {
    $judul = $_POST["judul"];
    $penulis = $_POST["penulis"];
    $tahunterbit = $_POST["tahun-terbit"];
    $jumlahcopy = $_POST["jumlah-copy"];
    $stokada = $_POST['stokada'];
    // filter_input(INPUT_POST, 'hospital', FILTER_SANITIZE_STRING);

    $kategori = $_POST["kategori"];
    $letakbuku = $_POST["letak-buku"];
    $gambarbuku = $_FILES['foto']['name'];
    $path = $_FILES['foto']['tmp_name'];
    move_uploaded_file($path, './Front end/image/' . $gambar);;
    // if (empty($gambarbuku)) {
    //     // jika tak upload file
    //     $gambarbuku = 'book.png';
    // }
    $sql = "INSERT INTO buku (penulis,judul,jumlah_copy,kategori,letak_buku,tahun_terbit,gambar_buku,stok_tersedia) VALUES ('$penulis','$judul','$jumlahcopy','$kategori','$letakbuku','$tahunterbit','$gambarbuku','$jumlahcopy')";

    //Kondisi apakah berhasil atau tidak
    if (mysqli_query($db, $sql)) {
        header('Location: index_admin.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
        exit;
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
    <link rel="stylesheet" href="Front end/style/tambah_buku.css" />
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
                        <form action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" method="POST">
                            <div class="hd-tmb">
                                <div class="col">
                                    <h1>Tambah Buku</h1>
                                </div>
                            </div>
                            <div class="tmb" style="padding-left: 10%; padding-right: 10%;">
                                <div class="col">
                                    <input type="text" placeholder="Judul Buku" name="judul">
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="Penulis" name="penulis">
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="Tahun Terbit" name="tahun-terbit">
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="Jumlah Copy" name="jumlah-copy">
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="Kategori" name="kategori">
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="Letak Buku" name="letak-buku">
                                </div>
                                <div class="col">
                                    <p>Upload Cover Buku</p>
                                    <input type="file" name="foto">
                                </div>
                                <div class="col" style="padding-left: 120px;">
                                    <button type="submit" class="btn btn-dark" name="tambah">Tambah</button>
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