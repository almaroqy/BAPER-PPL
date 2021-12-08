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
    <link rel="stylesheet" href="Front end/style/riwayat_absen_non.css" />
    <title>Baper!</title>
</head>

<body>
    <!-- NAVBAR -->
    <?php
    include('nav_admin.php');
    ?>
    <main>
        <div class="container text-center" style="padding-top: 15%; ">
            <div class="row">
                <div class="col-md-12">
                    <div class="bg-table">
                        <div class="table-abs">
                            <h1 style="font-size: 50px;">Riwayat Non Absen Anggota</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center" style="padding-top: 1%; overflow-y:scroll; height: 400px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th rules="cols">No</th>
                                    <th>Tanggal</th>
                                    <th>Nama</th>
                                    <th>No. HP</th>
                                    <th>Alamat</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>15/09/2021</td>
                                    <td>Fauzan</td>
                                    <td>085836945623</td>
                                    <td>jl. Berbatu dan berlubang karna kurang dana</td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>15/09/2021</td>
                                    <td>Udin</td>
                                    <td>085836945623</td>
                                    <td>jl. Berbatu dan berlubang karna kurang dana</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>15/09/2021</td>
                                    <td>Amir</td>
                                    <td>085836945623</td>
                                    <td>jl. Berbatu dan berlubang karna kurang dana</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>15/09/2021</td>
                                    <td>Aser</td>
                                    <td>085836945623</td>
                                    <td>jl. Berbatu dan berlubang karna kurang dana</td>

                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>15/09/2021</td>
                                    <td>Yudi</td>
                                    <td>085836945623</td>
                                    <td>jl. Berbatu dan berlubang karna kurang dana</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>15/09/2021</td>
                                    <td>Yudi</td>
                                    <td>085836945623</td>
                                    <td>jl. Berbatu dan berlubang karna kurang dana</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>15/09/2021</td>
                                    <td>Yudi</td>
                                    <td>085836945623</td>
                                    <td>jl. Berbatu dan berlubang karna kurang dana</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>15/09/2021</td>
                                    <td>Yudi</td>
                                    <td>085836945623</td>
                                    <td>jl. Berbatu dan berlubang karna kurang dana</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>15/09/2021</td>
                                    <td>Yudi</td>
                                    <td>085836945623</td>
                                    <td>jl. Berbatu dan berlubang karna kurang dana</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>15/09/2021</td>
                                    <td>Yudi</td>
                                    <td>085836945623</td>
                                    <td>jl. Berbatu dan berlubang karna kurang dana</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>15/09/2021</td>
                                    <td>Yudi</td>
                                    <td>085836945623</td>
                                    <td>jl. Berbatu dan berlubang karna kurang dana</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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