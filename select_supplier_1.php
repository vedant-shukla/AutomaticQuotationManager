<?php
session_start();
?>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="stylesheet" href="main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
       <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

</head>
<body>
		<div class = 'container' >
		
			  <div class='well' style="margin-top:5%;">Select Supplier</div>
		<form action="quotation_form_1.php" method = "POST">


<?php

if(isset($_SESSION['cas_no_1']) && !empty($_SESSION['cas_no_1']))
{
	
	
		$cas_no = $_SESSION['cas_no_1'];
		$conn = mysqli_connect("localhost","root","","chemistry_india");
		$sql = "select supplier from product where COA_no = '".$cas_no."' ";
		$result = mysqli_query($conn,$sql);
		
		while($row=mysqli_fetch_assoc($result)){
		
				$suppliers = $row['supplier'];
				echo $suppliers."<br>";
				$arr = explode(",",$suppliers);
				
		
		}

		echo $arr[0]."<br>";
		echo $arr[1]."<br>";
		$n = sizeof($arr);
		echo "size of arr: ".$n."<br>";
		$name  = array();
		
		// finding  the names of the suplliers and store it in array
		
		for($j=0; $j < $n; $j++)
		{
				
			$sql1 = "select name from supplier where id = '".$arr[$j]."' ";
			$result1 = mysqli_query($conn,$sql1);
				while($row=mysqli_fetch_assoc($result1))
				{
					$name[$j] = $row['name'];
					echo $name[$j]."<br>";
						
				}
		}
				
		//echo $name[0];
		
		echo "
			  <br>
			  <br>
			  <br>
			  <table class='table-bordered'>
			  <thead>
				<th></th>
				<th class='text-center'>
				  SR.NO
				</th>
				
				<th class='text-center'>
				  Supplier No
				</th>
				
				<th class='text-center'>
				  Supplier Name
				</th>
				
			 </thead>
			 <tbody>
			  ";
			  
			
			

			for( $i=0;$i<$n;$i++ )
			{
				echo "
				
					<tr>
						<td><input type='radio' name='radio_button_1' value = '".$name[$i]."' ></td>
						<td class='text-center'>".$i."</td>
						<td class='text-center'>".$arr[$i]."</td>
						<td class='text-center'>".$name[$i]."</td>
						
					</tr>	
				";
			}
		
		
		echo	"</tbody>
		</table>
		<br>
			 <br>
			 <button type ='submit' class = 'btn-primary'>Done</button>
			 </form>
			 
		
		</div>	
		";
		
		
		
	}
	
	else
	{
		die("Please Select Product First");
	}

?>


</form>
</body>
</html>
