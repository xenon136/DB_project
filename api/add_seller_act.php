<?php 
 $host='lucky.db.elephantsql.com';
 $user='wulgcjle';
 $password='tYwgRYgZoK9N3hdNkyU604UrbpEZ2OIl';
 $db_name='wulgcjle';
 $name = $_POST["name"];
 $DBH = new PDO("pgsql:host=$host;dbname=$db_name;user=$user;password=$password");
 $STH = $DBH->prepare("INSERT INTO seller (name) VALUES (:name)"); 
 $STH->bindParam(':name', $name);
 $STH->execute();
 header('Location: https://db-project-six.vercel.app/api/index.php');
?> 