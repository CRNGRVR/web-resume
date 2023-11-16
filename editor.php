<!-- 
    16.11.2023
    Страница заполнения резюме
    Просто форма, отправляемая на страницу upload.php
-->
<?php
    echo '
        <a href="start.php">Назад</a>
        <form action="uploaded.php" method="POST" enctype="multipart/form-data">
            <h1>Резюме</h1>
            Имя<br>
            <input type="text" name="name" id="name" value=""><br>
            Фамилия<br>
            <input type="text" name="sur" id="sur" value=""><br>
            Отчество<br>
            <input type="text" name="otch" id="otch" value=""><br>
            <br>Возраст<br><input type="text" name="yo" id="yo" value=""><br><br>
            Пол<br><input type="radio" name="gen" id="gen" value="M" checked>Муж
            <input type="radio" name="gen" id="gen" value="F">Жен<br><br>
            Гражданство<br>
            <select name="country" id="">
                <option value="Russia" selected>Россия</option>
                <option value="China">Китай</option>
                <option value="no">Не гражданин</option>
            </select><br><br>
            <input type="hidden" name="MAX_FILE_SIZE" value="9999999" /><br>
            Загрузить фотографию: <input name="userfile" type="file" /><br><br>
            Образование<br><select name="obr" id="">
                <option value="nke" selected>НКЕиВТ</option>
                <option value="vyz">Какой-то безымянный ВУЗ</option>
                <option value="no">Бедолага</option>
            </select><br><br>
            Знание иностранных языков<br>
            <input type="checkbox" name="lng[]" id="angl" value="angl" checked>Английский<br>
            <input type="checkbox" name="lng[]" id="fr" value="fr">Французский<br>
            <input type="checkbox" name="lng[]" id="de" value="de">Немецкий<br><br>
            Профиль<br>
            <select name="prof" id="">
                <option value="it" selected>Информационные технологии</option>
                <option value="managment">Управление</option>
                <option value="writer">Литература</option>
            </select><br><br>

            Номер телефона<br>
            <input type="text" name="phone" id="phone" value=""><br>
            Почта<br>
            <input type="text" name="mail" id="mail" value=""><br>
            <br><input type="submit" value="Загрузить резюме" id="but">
        </form>
    ';
?>
