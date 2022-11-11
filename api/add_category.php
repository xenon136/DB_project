<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
  <div class="container">
    <header class="header">
      <h1>Admin page</h1>
    </header>
    <aside class="left">
      <ul>
        <li><a href="add_product.php">Добавить товар</a></li>
        <li><a href="add_color.php">Добавить цвет</a></li>
        <li><a href="add_company.php">Добавить компанию</a></li>
        <li><a href="index.php">Просмотр</a></li>
      </ul>
    </aside>
    <main class="content">
      <h2>Добавление категорий</h2>
      <p>На этой странице можно увидеть значения из базы данных</p>
      <hr><br>
      <h2>Страны</h2>
      
      <form>
        <label>Цвет: <input type="text" name="text"></label><br>
        <input type="submit" value="Submit" /><br>
      </form>
    </main>
    <footer class="footer">&copy; Copyright Kondratev D.S.</footer>
  </div>
</body>

</html>