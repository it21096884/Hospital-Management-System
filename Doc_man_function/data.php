<?php
header('Content-Type:application/json');
  require'Configuration.php';

	  $query = "SELECT Affliction, @count_num := COUNT(Affliction) AS 'Count'
	            FROM treatment
	            WHERE  Month(Date) = '09' and Year(Date) = '2022'
	            GROUP BY Affliction
	            HAVING COUNT(Affliction) > 0";
				
	   $result = $con->query($query);
	   $data = array();
	   foreach($result as $row){
		   $data[] = $row;
	   }
	   
	   print json_encode($data);






?>

