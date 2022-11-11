<!DOCTYPE html>
<html lang="en">
    <head>

    </head>
    <body>
<?php 
 $host='lucky.db.elephantsql.com';
 $user='wulgcjle';
 $password='tYwgRYgZoK9N3hdNkyU604UrbpEZ2OIl';
 $db_name='wulgcjle';
 $category = $_POST[category]
 echo $category
 $DBH = new PDO("pgsql:host=$host;dbname=$db_name;user=$user;password=$password");
 $STH = $DBH->prepare("INSERT INTO caregory (name) VALUES (:name)"); 
 $STH->bindParam(':name', $name);
 $STH->execute($category);
 $url = "https://db-project-six.vercel.app/api/add_category.php"
 header('Location: '.$url);
   ?>
   </body>
</html>