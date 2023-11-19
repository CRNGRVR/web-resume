<!-- 
    16.11.2023
    Отображение данных из файла, выбранного на предыдущей форме
-->

<?php
    $file = file_get_contents('./res/' . $_GET["file"], false);
    $data = explode(" ", $file);

    echo '
        <head>
            <link rel="stylesheet" href="./style/resview.css">
        </head>

        <div class="panel">
            <a href="list.php">Назад</a><br>
    ';

    //  Показать соответствующую резюме фотографию, если такая имеется
    if (file_exists('./photo/' . $_GET["file"] . '-photo')) {
        echo '
            <img src="' . './photo/' . $_GET["file"] . '-photo' . '" width="200" height="200">
        ';
    }

    echo '
            <h1>' . $data[0] . ' ' . $data[1] . ' ' . $data[2] . '</h1><br>
            <h3>Возраст: ' . $data[3] . ' лет, пол: ' . $data[4] . '</h3><br>
            <div class="text">Гражданство: ' . $data[5] . '</div><br>
            <div class="text">Образование: ' . $data[6] . '</div><br>
            <h2>Связаться</h2><br>
            <div class="text">Телефон: ' . $data[9] . ',</div><br>
            <div class="text">Почта:   ' . $data[10] . '</div>
        </div>
    ';
?>
