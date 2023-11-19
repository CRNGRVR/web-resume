<!-- 
    16.11.2023
    Страница заполнения резюме
    Просто форма, отправляемая на страницу upload.php
-->

<?php
    echo '
        <head>
            <link rel="stylesheet" href="./style/editor.css">
        </head>

        <div class="panel">
            <a href="start.php">Назад</a>
            <form action="uploaded.php" method="POST" enctype="multipart/form-data">
                <h1>Резюме</h1>
                <div class="text">Имя</div>
                <input type="text" name="name" id="name" value=""><br><br>
                <div class="text">Фамилия</div>
                <input type="text" name="sur" id="sur" value=""><br><br>
                <div class="text">Отчество</div>
                <input type="text" name="otch" id="otch" value=""><br><br>
                <div class="text">Возраст</div>
                <input type="text" name="yo" id="yo" value=""><br><br><br>
                <div class="text">Пол</div>
                <input type="radio" name="gen" id="gen" value="M" checked>Муж
                <input type="radio" name="gen" id="gen" value="F">Жен<br><br>
                <div class="text">Гражданство</div>
                <select name="country" id="">
                    <option value="Russia" selected>Россия</option>
                    <option value="China">Китай</option>
                    <option value="no">Не гражданин</option>
                </select><br><br>
                <input type="hidden" name="MAX_FILE_SIZE" value="9999999" /><br>
                <div class="text">Загрузить фотографию:</div>
                <input name="userfile" type="file" /><br><br>
                <div class="text">Образование<br>
                <select name="obr" id="">
                    <option value="nke" selected>НКЕиВТ</option>
                    <option value="vyz">Какой-то безымянный ВУЗ</option>
                    <option value="no">Бедолага</option>
                </select><br><br>
                <div class="text">Знание иностранных языков</div>
                    <input type="checkbox" name="lng[]" id="angl" value="angl" checked>Английский<br>
                    <input type="checkbox" name="lng[]" id="fr" value="fr">Французский<br>
                    <input type="checkbox" name="lng[]" id="de" value="de">Немецкий<br><br>
                <div class="text">Профиль</div>
                <select name="prof" id="">
                    <option value="it" selected>Информационные технологии</option>
                    <option value="managment">Управление</option>
                    <option value="writer">Литература</option>
                </select><br><br>
                <div class="text">Номер телефона</div>
                <input type="text" name="phone" id="phone" value=""><br><br>
                <div class="text">Почта</div>
                <input type="text" name="mail" id="mail" value=""><br>
                <br><input type="submit" value="Загрузить резюме" id="but">
            </form>
        </div>
    ';
?>
