<html>

  <table>
    <tr>
        <th>id</th>
        <th>name</th>

    </tr>
  </table>

   <?php 
 $host='lucky.db.elephantsql.com';
 $user='wulgcjle';
 $password='tYwgRYgZoK9N3hdNkyU604UrbpEZ2OIl';
 $db_name='wulgcjle';
 $con = pg_connect("host=$host dbname=$db_name user=$user password=$password")
   or die ("Could not connect to server\n");

 $query = 'SELECT * FROM country';
 $results = pg_query($con, $query) or die('Query failed: ' . pg_last_error());

 echo results

 /*for($data=[];$row=pg_fetch_row($results);$data[]=$row) ;
    $result='';
    foreach($data as $elem) {
        $result.='<tr>';

        $result.='<td>'.$elem['id'].'</td>';
        $result.='<td>'.$elem['name'].'</td>';


        $result.='</tr>';
    }
    echo $result;*/


   ?>

</html>