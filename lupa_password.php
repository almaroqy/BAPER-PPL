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
    <link rel="stylesheet" href="Front end/style/lupa_password.css" />
    <title>Baper!</title>
</head>

<body>
    <main>
        <section class="lupa-password">
            <div class="container form-lupa-password">
                <img class="logo" src="Front end/image/logo.png" alt="logo">
                <div class="margin">
                    Lupa Password
                </div>
                <div class="margin form-group">
                    <input class="form-control" type="email" name="email" placeholder="E-Mail">
                </div>
                <div class="margin button">
                    <button type="button" class="btn btn-dark">Kirim Kode OTP Ke Email saya</button>
                </div>
                <div class="margin form-group">
                    <ul class="list-unstyled">
                        <li>
                            <input class="form-control" type="text" name="otp" placeholder="Masukan Kode OTP">
                        </li>
                        <li>
                            <input class="form-control" type="password" name="password" placeholder="Password baru">
                        </li>
                        <li>
                            <input class="form-control" type="password" name="re-type" placeholder="Re-type Password">
                        </li>
                    </ul>
                    <div class="ganti-password">
                        <button type="button" class="btn btn-dark">Submit</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5b9f1690ea.js" crossorigin="anonymous"></script>
</body>

</html>