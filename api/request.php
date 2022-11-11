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
 $con = pg_connect("host=$host dbname=$db_name user=$user password=$password")
   or die ("Could not connect to server\n");

 $query = 'SELECT * FROM country';
 $results = pg_query($con, $query) or die('Query failed: ' . pg_last_error());

 for($data=[];$row=pg_fetch_row($results);$data[]=$row) ;
    $results='';
    foreach($data as $elem) {
        $results.='<tr>';

        $results.='<td>'.$elem['id'].'</td>';
        $results.='<td>'.$elem['name'].'</td>';


        $results.='</tr>';
    }
    echo $results;


   ?>
</table>