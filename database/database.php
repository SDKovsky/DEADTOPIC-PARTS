<?php
// Подключение к базе данных
$servername = "sql112.infinityfree.com";
$database = "if0_35487845_auto_parts_shop";
$username = "if0_35487845";
$password = "23KRrEvaTS";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
echo "Соединение установлено<br><br>";

// Выполнение запросов к базе данных
// ...

// Закрытие соединения
$conn->close();
// Perform the database query and display the results
$sql = "SELECT id, name, description, categories, manufacturer, model, part_number, price FROM mar_products";
$result = $conn->query($sql);
?>