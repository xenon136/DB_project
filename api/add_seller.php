<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

body {
    margin: 0;
    box-sizing: border-box;
  }

  .container {
    line-height: 150%;
  }

  .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px;
    background-color: #e9e9e9;
  }

  .header h1 {
    color: #222222;
    font-size: 30px;
    font-family: 'Pacifico', cursive;
  }

  .header .social a {
    padding: 0 5px;
    color: #222222;
  }

  .left {
    float: left;
    width: 180px;
    margin: 0;
    padding: 1em;
  }

  .content {
    margin-left: 190px;
    border-left: 1px solid #d4d4d4;
    padding: 1em;
    overflow: hidden;
  }

  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    font-family: sans-serif;
  }

  li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
  }

  li a.active {
    background-color: #84e4e2;
    color: white;
  }

  li a:hover:not(.active) {
    background-color: #29292a;
    color: white;
  }

  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    margin: 30px 0;
  }

  td,
  th {
    border: 1px solid #dddddd;
    padding: 8px;
  }

  tr:nth-child(1) {
    background-color: #84e4e2;
    color: white;
  }

  tr td i.fas {
    display: block;
    font-size: 35px;
    text-align: center;
  }

  .footer {
    padding: 55px 20px;
    background-color: #2e3550;
    color: white;
    text-align: center;
  }
  </style>
</head>

<body>
  <div class="container">
    <header class="header">
      <h1>Admin page</h1>
    </header>
    <aside class="left">
      <ul>
        <li><a href="index.php">Просмотр</a></li>
        <li><a href="add_product.php">Добавить товар</a></li>
        <li><a href="add_color.php">Добавить цвет</a></li>
        <li><a href="add_company.php">Добавить компанию</a></li>
        <li><a href="add_category.php">Добавить категорию</a></li>
        <li><a href="add_seller.php">Добавить продавца</a></li>
      </ul>
    </aside>
    <main class="content">
    <h2>Добавление продавца</h2>
      <p>На этой странице вы можете добавить продавца</p>
      <hr>
      <form name="sell_form" action="act/add_seller_act.php" method="post">
      <p>Продавец: <input type="text" name="name" /></p>
        <input name="input" type="submit" value="Отправить" /><br>
      </form>
    </main>
    </main>
    <br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br>
    <footer class="footer">&copy; Copyright Kondratev D.S.</footer>
  </div>
</body>

</html>