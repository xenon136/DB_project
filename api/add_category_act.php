<?php 
 $host='lucky.db.elephantsql.com';
 $user='wulgcjle';
 $password='tYwgRYgZoK9N3hdNkyU604UrbpEZ2OIl';
 $db_name='wulgcjle';
 $category = $_POST["category"]
 $DBH = new PDO("pgsql:host=$host;dbname=$db_name;user=$user;password=$password");
 $STH = $DBH->prepare("INSERT INTO category (name) VALUES (?)"); 
 $STH->execute($category);
 $url = "https://db-project-six.vercel.app/api/add_category.php"
 header('Location: '.$url);
   ?>