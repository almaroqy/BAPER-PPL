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
    <link rel="stylesheet" href="Front end/style/index_admin.css" />
    <title>Baper!</title>
</head>

<body>
    <?php
    include('nav_admin.php');
    ?>

    <header>
        <div class="container text-center" style="padding-top: 15%" ;>
            <div class="row">
                <div class="col">
                    <div class="hd-anggota">
                        <h1 style="font-size: 50px;">Anggota</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container color-white" style=" padding-left: 70%; width: 80%; ;">
            <div class="row">
                <div class="col">
                    <div class="tmb-book">
                        <a href="tambah_anggota.php" class="btn btn-success btn-xxl">Tambah Anggota</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center" style="padding-top: 2%;">
            <div class="row" style="padding-left: 5%; padding-right: 5%; width: 100%;">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Foto</th>
                                <th>Nama Lengkap</th>
                                <th>Tempat Tanggal Lahir</th>
                                <th>No. HP</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <img src="../baper-1/Front end/image/BukuDongeng.png" alt="" style="height: 90px;">
                                </td>
                                <td>Pop Ice 1</td>
                                <td>Fahmi</td>
                                <td>Fahmi Corp</td>
                                <td>12</td>
                                <td>
                                    <div class="actn">
                                        <a href="" class="btn btn-info btn-md">Edit</a>
                                        <a href="" class="btn btn-danger btn-md">Hapus</a>
                                        <a href="" class="btn btn-warning btn-md">Cetak Kartu</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <img src="../baper-1/Front end/image/BukuIlmu.png" alt="" style="height: 90px;">
                                </td>
                                <td>Pop Ice 1</td>
                                <td>Fahmi</td>
                                <td>Fahmi Corp</td>
                                <td>12</td>
                                <td>
                                    <div class="actn">
                                        <a href="" class="btn btn-info btn-md">Edit</a>
                                        <a href="" class="btn btn-danger btn-md">Hapus</a>
                                        <a href="" class="btn btn-warning btn-md">Cetak Kartu</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><img src="../baper-1/Front end/image/BukuHoror.png" alt="" style="height: 90px;"></td>
                                <td>Pop Ice 1</td>
                                <td>Fahmi</td>
                                <td>Fahmi Corp</td>
                                <td>12</td>
                                <td>
                                    <div class="actn">
                                        <a href="" class="btn btn-info btn-md">Edit</a>
                                        <a href="" class="btn btn-danger btn-md">Hapus</a>
                                        <a href="" class="btn btn-warning btn-md">Cetak Kartu</a>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <?php
    include('footer.php')
    ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5b9f1690ea.js" crossorigin="anonymous"></script>
</body>

</html>