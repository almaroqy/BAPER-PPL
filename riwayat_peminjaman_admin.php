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
    <link rel="stylesheet" href="Front end/style/riwayat_peminjaman_adm.css" />
    <title>Baper!</title>
</head>

<body>
    <?php
    include('nav_admin.php');
    ?>

    <main>
        <div class="container text-center" style="padding-top: 10%;">
            <div class="row">
                <div class="col-md-12 py-5">
                    <div class="table">
                        <div class="row" style="padding-left: 5%; padding-right: 5%;">
                            <div class="col-md-12">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID Transaksi</th>
                                            <th>Cover Buku</th>
                                            <th>Judul Buku</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Batas Pengembalian</th>
                                            <th>Peminjam</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <img src="../baper-1/Front end/image/BukuDongeng.png" alt="" style="height: 90px;">
                                            </td>
                                            <td>Pop Ice 1</td>
                                            <td>11-11-2021</td>
                                            <td>11-12-2021</td>
                                            <td>Fahmi</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <img src="../baper-1/Front end/image/BukuIlmu.png" alt="" style="height: 90px;">
                                            </td>
                                            <td>Pop Ice 1</td>
                                            <td>11-11-2021</td>
                                            <td>11-12-2021</td>
                                            <td>Fahmi</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <img src="../baper-1/Front end/image/BukuHoror.png" alt="" style="height: 90px;">
                                            </td>
                                            <td>Pop Ice 1</td>
                                            <td>11-11-2021</td>
                                            <td>11-12-2021</td>
                                            <td>Fahmi</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="Footer-menu mt-5 border-top" id="Section-footer">
        <div class="container" style="background-color: #2c2c2c;">
            <div class="footers pt-4 pb-4 pt-lg-5 pb-lg-5">
                <div class="row justify-content-center">
                    <div class="col-12 pt-3">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-3 mb-3">
                                <ul class="list-unstyled footer-link-list">
                                    <li><img class="mb-2 imglogobrand" src="Front end/image/Group 103.png" alt="imgLogo" /></li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mb-3 gradi">
                                <h5 class="mb-3 border-bottom pb-2">Information</h5>
                                <ul class="list-unstyled footer-link-list">
                                    <li><a class="text-decoration-none" href="#">Home</a></li>
                                    <li><a class="text-decoration-none" href="#">User</a></li>
                                    <li><a class="text-decoration-none" href="#">Perpustakaan</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mb-3 get-connected">
                                <h5 class="mb-3 pb-2 border-bottom">Contact</h5>
                                <ul class="list-unstyled footer-link-list">
                                    <li>
                                        1234 Sample Street <br />
                                        Austin Texas 78704
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mb-2 get-connected">
                                <h5 class="mb-3 pb-2 border-bottom">Social Media</h5>
                                <div class="icon">
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100 pt-3 pb-3 copyright border-top" id="footer-copyright">
            <div class="container text-white" style="background-color: #2c2c2c;">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-center my-1">&copy; 2021 | Perpustakann Baper</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5b9f1690ea.js" crossorigin="anonymous"></script>
</body>

</html>