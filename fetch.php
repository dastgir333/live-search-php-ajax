<?php

include_once('config.php');

if(isset($_POST['query'])){

	$search = mysqli_real_escape_string($conn,$_POST['query']);

	$query ="
	SELECT * FROM tbl_customer
	WHERE CustomerName LIKE '%".$search."%'
	OR Address LIKE '%".$search."%'
	OR City LIKE '%".$search."%'
	OR PostalCode LIKE '%".$search."%'
	OR Country LIKE '%".$search."%'
	";


	
}else{

	$query="
	SELECT * FROM tbl_customer ORDER BY CustomerID
	";
}



?>

<table border="1" width="100%" style="border-collapse:collapse;background:white" >
	<thead>
		<tr>
		
		<th>CustomerID</th>
		<th>CustomerName</th>
		<th>Address</th>
		
		<th>City</th>
		<th>PostalCode</th>
		<th>Country</th>
		</tr>
	</thead>
	<tbody>

   <?php 
   
    $result = mysqli_query($conn,$query);
   if(mysqli_num_rows($result)>0){

   	while($row = mysqli_fetch_assoc($result)){?>

   		  <tr>
		
		<th><?php echo $row['CustomerID'];?></th>
		<th><?php echo $row['CustomerName'];?></th>
		<th><?php echo $row['Address'];?></th>
		
		<th><?php echo $row['City'];?></th>
		<th><?php echo $row['PostalCode'];?></th>
		<th><?php echo $row['Country'];?></th>
		</tr>


  


   



	



<?php
 	}
   }


?>


</tbody>

</table>







