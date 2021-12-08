<?php
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
    <link rel="stylesheet" href="Front end/style/peminjaman_scan.css" />
    <title>Baper!</title>
</head>

<body>
    <!-- NAVBAR -->
    <?php
    include('nav_admin.php');
    ?>
    <main>
        <section class="section-peminjaman-buku">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 btm-bor border">
                        <div class="judul-text">
                            <h1>
                                Peminjaman Buku
                            </h1>
                        </div>
                        <div class="input-id">
                            <form action="">
                                <div class="mb-3 anggota">
                                    <label for="idAnggota" class="form-label">Id Anggota</label>
                                    <input type="text" class="form-control" id="idAnggota">
                                </div>
                                <div class="mb-3 anggota">
                                    <label for="idBuku" class="form-label">Id Buku</label>
                                    <input type="text" class="form-control" id="idBuku">
                                </div>
                                <button type="submit" class="btn btn-dark ">Tambah</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 btm-bor border">
                        <h1>
                            Detail
                        </h1>
                        <form action="">
                            <div class="mb-3 dtl-anggota">
                                <label for="anggota" class="form-label">Anggota</label>
                                <input type="text" class="form-control" id="anggota">
                            </div>
                            <div class="mb-3 dtl-anggota ">
                                <label for="idBuku" class="form-label">Buku</label>
                                <input type="text" class="mb-1 form-control" id="idBuku">
                                <input type="text" class="mb-1 form-control" id="idBuku">
                                <input type="text" class="mb-1 form-control" id="idBuku">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="pjm">
                    <button type="submit" class="btn-dark text-center">Pinjam</button>
                </div>
            </div>
            </div>
        </section>
    </main>
    <?php
    include('footer.php')
    ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5b9f1690ea.js" crossorigin="anonymous"></script>

</body>

</html>