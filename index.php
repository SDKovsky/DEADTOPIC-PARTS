<!DOCTYPE html>
<html>
<head>
    <title>Пример подключения к базе данных</title>
</head>
<body>
    <h1>Пример подключения к базе данных</h1>

    <?php
    // Подключение к базе данных
    $servername = "sql112.byetcluster.com";
    $database = "if0_35487845_auto_parts_shop";
    $username = "if0_35487845";
    $password = "23KRrEvaTS";
    

    $conn = new mysqli($servername, $username, $password, $database);
  //кириллица
    $conn->set_charset('utf8');

    // Проверка соединения
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }
    echo "Соединение установлено<br><br>";

    // Выполнение запросов к базе данных
    // ...

    // Закрытие соединения
    $conn->close();
    ?>

    <div>
      <?php 
          foreach($result as $item) {
              echo "<p <b>ID: ".$item["id"]."</b><br>Название: ".$item["name"]."<br>Описание: ".$item["description"]."<br>Категория: ".$item["categories"]."<br>Производитель: ".$item["manufacturer"]."<br>Модель: ".$item["model"]."<br>Номер модели: ".$item["part_number"]."<br>Цена: ".$item["price"]."</p>";
          }
      ?>
        <!-- Ваш HTML-код -->
    </div>
</body>
</html>