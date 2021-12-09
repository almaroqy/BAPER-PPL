<?php
$id = $_GET['id'];
 require_once('db_login.php');
 $kerr = $db->query("select * from buku WHERE id_buku = $id");
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
    <link rel="stylesheet" href="Front end/style/detail_buku.css" />
    <title>Baper!</title>
</head>

<body>
    <!-- NAVBAR -->
    <?php
    session_start();
    if ($_SESSION['kategori'] == 'admin') {
        include('nav_admin.php');  
    } else {
        include('nav_anggota.php');  
    }
    ?>

    <header>
        <div class="container" style="padding-top: 12%;">
            <div class="bg-inf">
                <div class="info-buku">
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="cover">
                                
                                <img width="300px" class="cover-buku" src="Front end/image/<?php
                                while($row = $kerr->fetch_object()){ echo $row->gambar_buku?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info">
                                <?php
                                echo '<h1>' . $row->judul . '</h1>';
                                echo '<p> Penulis : ' . $row->penulis . '</p>';
                                echo '<p> Tahun Terbit :' . $row->tahun_terbit . '</p>';
                                echo '<p> Jumlah Copy :' . $row->jumlah_copy . '</p>';
                                echo '<p> Letak Buku :' . $row->letak_buku . '</p>';
                                echo '<p> Kategori :' . $row->kategori . '</p>';
                                }?>
                            </div>
                        </div>
                    </div>
                    <div class="sinopsis">
                        Sinopsis :
                        <p class="sinopsis-text">
                            Menyandang status jomblo ternyata membuat Jono merasa semakin resah, sehingga dirinya memutuskan untuk
                            mengakhiri status tersebut secepatnya. Bersama Niko sahabatnya, Jono mulai melakukan berbagai upaya
                            untuk mendapatkan pacar. Hingga suatu hari calon pacar potensial berhasil didapatkannya dari dunia maya.
                        </p>
                        <p class="sinopsis-text">
                            Setelah berkenalan, Jono berharap bisa sampai ke tahap selanjutnya. Namun sayangnya, rencana tidak
                            berjalan mulus. Akankah Jono kembali harus menjalani status jomblonya? Atau mungkin akan muncul
                            keajaiban kenalan tersebut menjadi pacar pertamanya?
                        </p>
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