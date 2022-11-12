<?php 
 $host='lucky.db.elephantsql.com';
 $user='wulgcjle';
 $password='tYwgRYgZoK9N3hdNkyU604UrbpEZ2OIl';
 $db_name='wulgcjle';
 $DBH = new PDO("pgsql:host=$host;dbname=$db_name;user=$user;password=$password");
 $STH = $DBH->prepare("INSERT INTO product (name, seller_id, color_id, company_id, category_id, price) VALUES (:name, :seller_id, :color_id, :company_id, :category_id, :price)"); 
 $STH->bindParam(':name', $_POST["name"]);
 $STH->bindParam(':seller_id', (int)$_POST["seller"]);
 $STH->bindParam(':color_id', (int)$_POST["color"]);
 $STH->bindParam(':company_id', (int)$_POST["company"]);
 $STH->bindParam(':category_id', (int)$_POST["category"]);
 $STH->bindParam(':price', (int)$_POST["price"]);
 $STH->execute();
 header('Location: https://db-project-six.vercel.app/api/index.php');
?> 