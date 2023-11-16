<!-- 
    16.11.2023
    Список файлов резюме и ссылки, чтобы посмотреть их в форме
-->
<?php
    echo '<a href="start.php">Назад</a><br>';

    $files = array_diff(scandir('./res/'), [".", ".."]);
    var_dump($files);
    foreach($files as $key => $value) {
        echo '<a href="resview.php?file=' . $value . '">' . $value . '</a>' . "<br>";
    }
?>
