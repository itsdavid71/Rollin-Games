<!doctype html>
<html lang="ru">

<head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Админ-панель | RollinGames</title>
</head>

<body>


<div class="container">


<?php

    if(isset($_POST['password'])) {
        if (md5($_POST['password']) === 'b9ad1820c35e061c9da163d1986ebdc9') {
            $check = 'Hajsk@7sh1k&912nsjx71hs7123621bs6@3Jsah6';
            setcookie("login", md5($check));
            header('Location: index.php');
        }
    }
    if(!isset($_COOKIE['login'])) { ?>
        <div class="row align-items-center mt-5 justify-content-center" style="min-height: 90vh;">
            <div class="col align-self-center">
                <form class="w-50" style="margin: 0 auto;" method="POST">

                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Введите пароль" id="exampleInputPassword1">
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Войти</button>
                </form>
            </div>
        </div>

    <?php
        } else {
            require_once 'header.php';
            require_once 'settings.php';
        }
    ?>



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</div>

</body>

</html>