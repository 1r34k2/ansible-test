<?php

//phpinfo();

$link = mysqli_connect('mysql', 'root', 'root');
if (!$link) {
    die('Ошибка соединения: ' . mysqli_error());
}
echo 'Соединение к БД успешно!';
mysqli_close($link);