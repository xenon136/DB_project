<?php 
 $host='lucky.db.elephantsql.com';
 $user='wulgcjle';
 $password='tYwgRYgZoK9N3hdNkyU604UrbpEZ2OIl';
 $db_name='wulgcjle';
 $DBH = new PDO("pgsql:host=$host;dbname=$db_name;user=$user;password=$password");
 $q = "DELETE FROM product WHERE id=".$_POST["id"];
 $STH = $DBH->prepare($q); 
 $STH->execute();
 header('Location: https://db-project-six.vercel.app/api/index.php');
?> 