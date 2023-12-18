<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>ORDER</title>
  <link href="../css/style.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css2?family=Tilt+Warp&display=swap" rel="stylesheet">
</head>

<body>

  <nav>

    <div class='logo'>
      <li><b class="container">DEADTOPIC PARTS</b></li>
    </div>

      <div class='menu'>
          <a class="my-button"style='color: red' href="index.html">HOME</a>
          <a class="my-button" href="product.php">PRODUCT</a>
          <a class="my-button" href="order.php">ORDER</a>
          <a class="my-button" href="contacts.php">CONTACTS</a>
      </div>
  </nav>

  <?php 
            foreach($result as $item) {
                echo "<p style=color: white; font-family: 'Tilt Warp', sans-serif; font-size: 25px; <br>Название: ".$item["name"]."<br>Описание: ".$item["description"]."<br>Категория: ".$item["categories"]."<br>Производитель: ".$item["manufacturer"]."<br>Модель: ".$item["model"]."<br>Номер модели: ".$item["part_number"]."<br>Цена: ".$item["price"]."</p>";
            }
        ?>

  <!--
  This script places a badge on your repl's full-browser view back to your repl's cover
  page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
  teal, blue, blurple, magenta, pink!
  -->
</body>
