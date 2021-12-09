<?php
$id = $_GET['id'];
require_once('db_login.php');
include('./balikkelogin.php');
$kerr = $db->query("select * from user WHERE id_user = $id");
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
    <link rel="stylesheet" href="Front end/style/cetak_kartu.css" />
    <title>Baper!</title>

    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="jquery-barcode.js"></script>
</head>

<body>

    <header>
        <div class="container text-center" style="padding-top: 12%; width: 500px; height: 80%;border: solid 1px black;padding:20pt">
            <table>
                <td>
                    <div class="cover">
                        <img width="100px" class="cover-buku" src="Front end/image/<?php while ($row = $kerr->fetch_object()) {
                                                                                        echo $row->gambar ?>">

                    </div>
                    <div class="pt-2 d-flex justify-content-center">

                        <?php

                                                                                        require 'vendor/autoload.php';
                                                                                        $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
                                                                                        echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode('081231723897', $generator::TYPE_CODE_128)) . '">';; ?>
                    </div>
                    <div id="demo"><?= $row->id_user ?></div>

                </td>
                <td>
                    <div class="row ms-2">
                        <div class="col-md-12">
                            <div class="info">
                            <?php
                                                                                        echo '<h1>' . $row->nama_user . '</h1>';
                                                                                        echo '<hr style="color:black;">';
                                                                                        echo '<p> Tanggal Lahir : ' . $row->tanggal_lahir . '</p>';
                                                                                        echo '<p> alamat : ' . $row->alamat . '</p>';
                                                                                        echo '<p> email : ' . $row->email . '</p>';
                                                                                    } ?>
                            </div>
                        </div>
                    </div>
                </td>
            </table>
        </div>

        </div>
        </div>
        </div>
    </header>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5b9f1690ea.js" crossorigin="anonymous"></script>
</body>

</html>