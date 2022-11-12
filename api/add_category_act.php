<?php 
 $host='lucky.db.elephantsql.com';
 $user='wulgcjle';
 $password='tYwgRYgZoK9N3hdNkyU604UrbpEZ2OIl';
 $db_name='wulgcjle';
 $category = $_POST["name"];
 echo $category;
 $DBH = new PDO("pgsql:host=$host;dbname=$db_name;user=$user;password=$password");
 $STH = $DBH->prepare("INSERT INTO caregory (name) VALUES (:name)"); 
 $STH->bindParam(':name', $category);
 $STH->execute();
 header('Location: https://db-project-six.vercel.app/api/index.php');
?>