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
            

            $json = file_get_contents('content.json');
            // Decode the JSON file
            $success = false;
            $settings = json_decode($json, true);
            if (isset($_POST) && $_POST != NULL) {
                foreach ($_POST as $key => $value) {
                    $settings[$key] = $_POST[$key];
                }
                $json = json_encode($settings);
                file_put_contents('content.json', $json);
                $success = true;
            }

            ?>


        <?php require_once 'header.php' ?>
        <?php 
            // Alert
            if ($success == true) {
                echo '
                    <div class="alert alert-success alert-dismissible fade show mt-3 mb-3" role="alert">
                        <strong>Изменения успешно сохранены</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                ';
            }
        ?>
        <form method="POST">
            <div class="mb-5">
                <div class="mb-3 mt-3">
                    <p class="h4">Об игре:</p>
                    <textarea class="form-control" rows="3" name="about_text"><?php echo $settings['about_text'] ?></textarea>
                </div>
                <div class="input-group mb-3 mt-3">
                    <span class="input-group-text">Количество игроков</span>
                    <input type="text" name="about_players" class="form-control" value="<?php echo $settings['about_players'] ?>" >
                </div>
                <div class="input-group mb-3 mt-3">
                    <span class="input-group-text">Длительность</span>
                    <input type="text" name="about_time" class="form-control" value="<?php echo $settings['about_time'] ?>" >
                </div>
                <div class="input-group mb-3 mt-3">
                    <span class="input-group-text">Возраст</span>
                    <input type="text" name="about_age" class="form-control" value="<?php echo $settings['about_age'] ?>" >
                </div>
            </div>
            <hr>
            <div class="mt-5 mb-5">
                <div class="mb-3 mt-5">
                    <p class="h4">Почему стоит сыграть:</p>
                    <textarea class="form-control" rows="5" name="why_text"><?php echo $settings['why_text'] ?></textarea>
                </div>
                
            </div>
            <hr>
            <div class="mt-5 mb-5">
                <div class="mb-3 mt-5">
                    <p class="h4">Сроки и доставка:</p>
                    <div class="input-group mb-3 mt-3">
                        <span class="input-group-text">Платная доставка</span>
                        <textarea class="form-control" rows="1" name="delivery"><?php echo $settings['delivery'] ?></textarea>
                    </div>
                    <div class="input-group mb-3 mt-3">
                        <span class="input-group-text">Бесплатная доставка</span>
                        <textarea class="form-control" rows="2" name="delivery_free"><?php echo $settings['delivery_free'] ?></textarea>
                    </div>
                </div>
                
            </div>
            <hr>
            <input class="btn btn-primary" type="submit" value="Сохранить">
        </form>

        <?php
        }
    ?>

    
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>


</body>

</html>