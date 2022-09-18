

<?php

$json = file_get_contents('settings.json');
// Decode the JSON file
$success = false;
$error = false;
$settings = json_decode($json, true);
if (isset($_POST['content']) && $_POST != NULL ) {
    foreach ($_POST as $key => $value) {
        $settings[$key] = $_POST[$key];
    }
    if (isset($_FILES['rules']) && $_FILES['rules']['size'] != 0) {

        if($_FILES['rules']['type']=="application/pdf") {
            if(isset($_FILES) && $_FILES['rules']['error'] == 0){ // Проверяем, загрузил ли пользователь файл
                $uploaddir = '../uploads'; // Директория для размещения файла
                if (!is_dir($uploaddir)) {
                    mkdir($uploaddir, 0777, true);
                }
                move_uploaded_file($_FILES['rules']['tmp_name'], $uploaddir.'/rules.pdf' ); 
                $settings['rules'] = 'rules.pdf';

            }
        } else {
            $error = '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Файл не загружен!</strong> Допустимый формат - PDF.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }

    }
    
    $json = json_encode($settings);
    file_put_contents('settings.json', $json);
    $success = true;  
}
?>

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
            if ($error != 0) echo $error;
        ?>
        <form method="POST" enctype="multipart/form-data">
            <div class="input-group mb-3 mt-3">
                <span class="input-group-text">E-mail</span>
                <input type="text" name="email" class="form-control" value="<?php echo $settings['email'] ?>" >
            </div>
            <div class="input-group mb-3 mt-3">
                <span class="input-group-text">Title</span>
                <input type="text" name="title" class="form-control" value="<?php echo $settings['title'] ?>" >
            </div>
            <div class="input-group mb-3 mt-3">
                <span class="input-group-text">Description</span>
                <input type="text" name="description" class="form-control" value="<?php echo $settings['description'] ?>" >
            </div>
            <div class="input-group mb-3 mt-3">
                <span class="input-group-text">Copyright</span>
                <input type="text" name="copyright" class="form-control" value="<?php echo $settings['copyright'] ?>" >
            </div>
            <div class="input-group mb-3 mt-3">
                <span class="input-group-text">Зачеркнутая цена</span>
                <input type="text" name="price" class="form-control" value="<?php echo $settings['price'] ?>" >
            </div>
            <div class="input-group mb-3 mt-3">
                <span class="input-group-text">Красная цена</span>
                <input type="text" name="price_red" class="form-control" value="<?php echo $settings['price_red'] ?>" >
            </div>
            <div class="input-group mb-3 mt-3">
                <span class="input-group-text">Ссылка</span>
                <input type="text" name="link" class="form-control" value="<?php echo $settings['link'] ?>" >
            </div>
            <div class="input-group mb-3 mt-3">
                <span class="input-group-text">Предаказ</span>
                <input type="date" name="pre_order" class="form-control" value="<?php echo $settings['pre_order'] ?>" >
            </div>
            <div class="input-group mb-3 mt-3">
                <span class="input-group-text">Правила (PDF)</span>
                <input type="file" name="rules" class="form-control">
            </div>
            <div class="input-group mb-3 mt-3">
                <span class="input-group-text">VK</span>
                <input type="text" name="vk" class="form-control" value="<?php echo $settings['vk'] ?>" >
            </div>
            <div class="input-group mb-3 mt-3">
                <span class="input-group-text">Instagram</span>
                <input type="text" name="inst" class="form-control" value="<?php echo $settings['inst'] ?>" >
            </div>
            <div class="input-group mb-3 mt-3">
                <span class="input-group-text">Facebook</span>
                <input type="text" name="fb" class="form-control" value="<?php echo $settings['fb'] ?>" >
            </div>
            <input type="hidden" value="1" name="content">
            <input class="btn btn-primary" type="submit" value="Сохранить">
        </form>


