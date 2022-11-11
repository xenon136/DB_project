<html>

  <table>
    <tr>
        <th>id</th>
        <th>name</th>

    </tr>

   <?php 
 $host='lucky.db.elephantsql.com';
 $user='wulgcjle';
 $password='tYwgRYgZoK9N3hdNkyU604UrbpEZ2OIl';
 $db_name='wulgcjle';
 $DBH = new PDO("pgsql:host=$host;dbname=$db_name;user=$user;password=$password");
 $query = 'SELECT * FROM country';
 $STH = $myPDO->query($query);
 $STH->setFetchMode(PDO::FETCH_ASSOC);  
 while($row = $STH->fetch()) {  
  echo $row['id'] . "\n";  
  echo $row['country_name'] . "\n";  
}


   ?>
</table>
</html>