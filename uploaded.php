<!-- 
    16.11.2023
    Страница, загружающая данные с предидущей формы в файл
-->

<?php
    $file = './res/res-' . $_POST["name"] . "_" . $_POST["sur"] . "_" . $_POST["otch"];
    $current = $_POST["name"] . " " . $_POST["sur"] . " " . $_POST["otch"] . " " . $_POST["yo"] . " " . $_POST["gen"] . " "
     . $_POST["country"] . " " . $_POST["obr"] . " " . $_POST["lng"] . " " . $_POST["prof"] . " " . $_POST["phone"] . " " . $_POST["mail"] . "\n";
    file_put_contents($file, $current, FILE_APPEND | LOCK_EX); //  Запись в файл

    //  Загрузка фотографии
    $uploaddir = './photo/';
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        rename($uploadfile, "./photo/res-" . $_POST["name"] . "_" . $_POST["sur"] . "_" . $_POST["otch"] . '-photo');
    }

    echo '
        <head>
            <link rel="stylesheet" href="./style/upload.css">
        </head>

        <div class="panel">
            <h1>Ваше резюме успешно загружено!</h1> <br>
            <a href="start.php">Вернуться в начало</a>
        </div>
    ';
?>
