<!-- 
    16.11.2023
    Отображение данных из файла, выбранного на предидущей форме
    Должно было быть красиво оформлено, но не судьба
-->
<?php
    echo '<a href="list.php">Назад</a><br>';
    var_dump($_GET["file"]);
    $file = file_get_contents('./res/' . $_GET["file"], false);
    $data = explode(" ", $file);

    //  Показать соответствующую резюме фотографию, если такая имеется
    if (file_exists('./photo/' . $_GET["file"] . '-photo')) {
        echo '
            <img src="' . './photo/' . $_GET["file"] . '-photo' . '" width="200" height="200">
        ';
    }

    echo '
        <h1>' . $data[0] . ' ' . $data[1] . ' ' . $data[2] . '</h1><br>
        <h3>Возраст: ' . $data[3] . ' лет, пол: ' . $data[4] . '</h3><br>
        Гражданство: ' . $data[5] . '<br>
        Образование: ' . $data[6] . '<br>

        <h2>Связаться</h2><br>
        Телефон: ' . $data[9] . ',<br>
        Почта:   ' . $data[10] . '
    ';
?>
