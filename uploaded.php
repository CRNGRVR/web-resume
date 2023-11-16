<!-- 
    16.11.2023
    Страница, загружающая данные с предидущей формы в файл
-->
<?php
    var_dump($_POST["name"]);
    var_dump($_POST["sur"]);
    var_dump($_POST["otch"]);
    var_dump($_POST["yo"]);
    var_dump($_POST["gen"]);
    var_dump($_POST["country"]);
    var_dump($_POST["obr"]);
    var_dump($_POST["lng"]);
    var_dump($_POST["prof"]);
    var_dump($_POST["phone"]);
    var_dump($_POST["mail"]);

    $file = './res/res-' . $_POST["name"] . "_" . $_POST["sur"] . "_" . $_POST["otch"];
    $current = $_POST["name"] . " " . $_POST["sur"] . " " . $_POST["otch"] . " " . $_POST["yo"] . " " . $_POST["gen"] . " "
     . $_POST["country"] . " " . $_POST["obr"] . " " . $_POST["lng"] . " " . $_POST["prof"] . " " . $_POST["phone"] . " " . $_POST["mail"] . "\n";
    file_put_contents($file, $current, FILE_APPEND | LOCK_EX); //  Запись в файл

    //  Загрузка фотографии
    $uploaddir = './photo/';
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        rename($uploadfile, "./photo/res-" . $_POST["name"] . "_" . $_POST["sur"] . "_" . $_POST["otch"] . '-photo');
        echo "Файл корректен и был успешно загружен.\n";
    } else {
        echo "Фотография не загружена.\n";
    }

    echo '
        Резюме загружено. <br>
        <a href="start.php">Вернуться в начало</a>
    ';
?>
