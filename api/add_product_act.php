<?php 
 $host='lucky.db.elephantsql.com';
 $user='wulgcjle';
 $password='tYwgRYgZoK9N3hdNkyU604UrbpEZ2OIl';
 $db_name='wulgcjle';
 $DBH = new PDO("pgsql:host=$host;dbname=$db_name;user=$user;password=$password");
 $STH = $DBH->prepare("INSERT INTO product (name, seller_id, color_id, company_id, category_id, price) VALUES (:name, :seller_id, :color_id, :company_id, :category_id, :price)"); 
 $STH->bindParam(':name', $_POST["name"]);
 $STH->bindValue(':seller_id', (int)$_POST["seller"], PDO::PARAM_INT);
 $STH->bindValue(':color_id', (int)$_POST["color"], PDO::PARAM_INT);
 $STH->bindValue(':company_id', (int)$_POST["company"], PDO::PARAM_INT);
 $STH->bindValue(':category_id', (int)$_POST["category"], PDO::PARAM_INT);
 $STH->bindValue(':price', (int)$_POST["price"], PDO::PARAM_INT);
 $STH->execute();
 header('Location: https://db-project-six.vercel.app/api/index.php');
?> 