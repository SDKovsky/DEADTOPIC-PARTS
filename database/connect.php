<?php

    // Отображать ошибки PHP, если будут
    error_reporting(E_ALL);
    ini_set('display_errors', 1);


     // параметры подключения к БД 
     $servername = "sql112.byetcluster.com";
     $database = "if0_35487845_auto_parts_shop";
     $username = "if0_35487845";
     $password = "23KRrEvaTS";

    // Создаем соединение (объект $conn)
    $conn = mysqli_connect($servername, $username, $password, $database);
    $conn->set_charset('utf8');

    // Проверяем соединение
    if (!$conn) {
        die("*- " . mysqli_connect_error());
    }
    echo "*<br><br>";


    // метод query выполняет запрос и результат записывает в переменную
    $result = $conn->query("SELECT id, name, description, categories, manufacturer, model, part_number, price FROM mar_products");

    //цикл по массиву строк, которые вернул запрос
    foreach($result as $item) {
        //var_dump($item); // функция var_dump выводит содержимое переменной на экран
        //echo "<br><br>";
    }

    mysqli_close($conn); // закрываем соединение с БД

?>