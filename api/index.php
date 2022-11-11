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
        <li><a href="add_category.php">Добавить категорию</a></li>
      </ul>
    </aside>
    <main class="content">
      <h2>Таблицы значений</h2>
      <p>На этой странице можно увидеть значения из базы данных</p>
      <hr><br>
      <h2>Страны</h2>
      <table>
        <tr>
          <th>Название</th>
        </tr>
        <?php 
          $host='lucky.db.elephantsql.com';
          $user='wulgcjle';
          $password='tYwgRYgZoK9N3hdNkyU604UrbpEZ2OIl';
          $db_name='wulgcjle';
          $DBH = new PDO("pgsql:host=$host;dbname=$db_name;user=$user;password=$password");
          $query = 'SELECT * FROM country';
          $STH = $DBH->query($query);
          $STH->setFetchMode(PDO::FETCH_ASSOC);  
          while($row = $STH->fetch()) {  
            echo "<tr><td>".$row['country_name'] . "</td></tr>";  
          }
          ?>
      </table>
      <hr><br>
      <h2>Цвета</h2>
      <table>
        <tr>
          <th>Название</th>
        </tr>
        <?php 
          $DBH = new PDO("pgsql:host=$host;dbname=$db_name;user=$user;password=$password");
          $query = 'SELECT * FROM color';
          $STH = $DBH->query($query);
          $STH->setFetchMode(PDO::FETCH_ASSOC);  
          while($row = $STH->fetch()) {  
            echo "<tr><td>".$row['name'] . "</td></tr>";  
          }
          ?>
      </table>
    </main>
    <footer class="footer">&copy; Copyright Kondratev D.S.</footer>
  </div>
</body>

</html>