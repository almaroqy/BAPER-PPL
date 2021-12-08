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
    include('nav_anggota.php');
    ?>

    <header>
        <div class="container" style="padding-top: 12%;">
            <div class="bg-inf">
                <div class="info-buku">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="cover">
                                <img class="cover-buku" src="Front end/image/BukuDongeng.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="info">
                                <h1>
                                    Dongeng Anak Pop Ice
                                </h1>
                                <p>Penulis: Niko Jiko</p>
                                <p>Tahun Terbit : 2001</p>
                                <p>Jumlah Copy : 5</p>
                                <p>Kategori : Buku Cerita</p>
                                <p>Letak Buku : B-001</p>
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