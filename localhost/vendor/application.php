<?php
session_start();
require_once 'connect.php';
if(!$_SESSION['row']){
    header('Location: /');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Авторизация и регистрация</title>
</head>
<body>
<form action="application_querry.php" method="post" enctype="multipart/form-data">
    <h2>Подача заявки</h2>
    <input type="text"name="report_name" placeholder="Название доклада" required>
    <textarea name="short_info" placeholder="Краткая информация о докладчике (местро работы/учёбы, должность, достижения)" required></textarea>
    <div>
        <input name="choose" type="radio" value="Защита информации" required>
        <label for="contactChoice1">Защита информации</label>
        <input type="radio" name="choose" value="Искусственный интеллект" required>
        <label for="contactChoice2">Искусственный интеллект</label>
        <input type="radio" name="choose" value="Управление производственными и техническими процессами" required>
        <label for="contactChoice3">Управление производственными и техническими процессами</label>
    </div>
    <textarea name="description" placeholder="Краткое описание доклада" required></textarea>
    <input type="file" name="text_file" required>
    <label for="file">Добавить текст с выступлением (doc, docx, pdf, размер не более 10Мб)</label>
    <input type="file" name="presentation_file" required>
    <label for="file">Добавить файл с презентацией (ppt, pptx, pdf, размер не более 30Мб)</label>
    <button type="submit" >Отправить заявку</button>
    <?php
    if($_SESSION['message']){
        echo '<p class="msg">' . $_SESSION['message'] . '</p>';
    }
    unset($_SESSION['message']);
    ?>
</form>
</body>
</html>