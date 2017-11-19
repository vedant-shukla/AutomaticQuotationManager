<?php

function getimage($company_id)
{
$conn = mysqli_connect("localhost","root","","chemistry_india");
	$sql = "select image_location from company where company_id = '".$company_id."' ";
	$result = mysqli_query($conn,$sql);
	
	while($row=mysqli_fetch_assoc($result)){
		
		return $row['image_location'];
	}		
	
	
	
}


?>