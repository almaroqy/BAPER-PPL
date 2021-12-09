<?php
include('./balikkelogin.php');
include('./db_login.php');

if (isset($_GET['submit'])) {
    $idangg = $_GET['idanggota'];
    $nama = $db->query('select nama_user from user where id_user=' . $idangg);
    if (!$nama) {
        die($db->error);
    } else {
        if (mysqli_num_rows($nama) == 0) {
            $berhasil = 0;
        } else {
            while ($row = $nama->fetch_object()) {
                $namanya = $row->nama_user;
            }
            $query = $db->query('insert into absenanggota(id_anggota,tanggal)values(' . $idangg . ',current_date)');
            if (!$query) {
                die($db->error);
            } else {
                $berhasil = 1;
            }
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
    <link rel="stylesheet" href="Front end/style/absen_anggota.css" />
    <title>Baper!</title>
</head>

<body>
    <?php
    include('nav_admin.php');
    ?>
    <main>


        <section class="section-contoh">

            <div class="container">
                <center>
                    <div class="title-header mb-5">
                        <h2>Absen Anggota</h2>
                    </div>
                    <?php if (isset($berhasil)) {
                        if ($berhasil == 1) {
                            echo '
                        <div class="alert alert-success alert-dismissible ms-5 me-5 mt-3 text-center d-flex justify-content-center" role="alert" id="berhasil"  >
                        <div class="col">
                            <div class="row">
                                <h4> ' . $namanya . '   </h4>
                            </div>
                            <div class="row">
                                <p>Berhasil Login</p>
                            </div>
                        </div>   
                            <button class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                        </div>';
                        } else {
                            echo '
                        <div class="alert alert-danger alert-dismissible ms-5 me-5 mt-3 text-center d-flex justify-content-center" role="alert" id="berhasil"  >
                        <div class="col">
                            <div class="row">
                                <h4> Anggota tidak ada </h4>
                            </div>
                            <div class="row">
                                <p>Gagal Login</p>
                            </div>
                        </div>   
                            <button class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                        </div>';
                        }
                    }; ?>

                    <form id="absen" action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
                        <div class="mb-3">
                            <input type="text" id="idanggota" name="idanggota" class="form-control" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                        </div>
                        <button type="submit" id="submit" name="submit" class="btn btn-dark btn-submit mt-3">SUBMIT</button>
                    </form>
                    <div class="bukan-anggota mt-3">
                        <a class="" href="absen_non_anggota.php">Bukan Anggota</a>
                    </div>
                </center>
            </div>
        </section>
    </main>
    <?php
    include('footer.php')
    ?>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/5b9f1690ea.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>

</body>

</html>