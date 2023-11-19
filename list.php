<!-- 
    16.11.2023
    Список файлов резюме и ссылки, чтобы посмотреть их в форме
-->

<?php
    $files = array_diff(scandir('./res/'), [".", ".."]);

    echo '
        <head>
            <link rel="stylesheet" href="./style/list.css">
        </head>

        <div class="panel">
            <a href="start.php">Назад</a><br>
            <h1>Список резюме</h1>
    ';

    foreach($files as $key => $value) {
        //  Для красивого отображения в списке имена файлов преобразовываются
        $str_without_prefix = str_replace("res-", "", $value);
        $str_without_prefix_and_underline = str_replace("_", " ", $str_without_prefix);
        echo '<a href="resview.php?file=' . $value . '">' . $str_without_prefix_and_underline . '</a>' . "<br>";
    }

    echo '
        </div>
    ';
?>
