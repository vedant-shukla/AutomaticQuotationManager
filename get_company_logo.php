<html>
<?php
// Start the session
session_start();
include("connect.php");
?>

<?php 



$company = $_REQUEST["q"];
//echo $company;
$arr = explode(" ",$company);
 
$company_id = $arr[0];
if(isset($arr[2])){
		$dropdown = $arr[2];
}
$dropdown_id = $arr[1];

// Setting session variables :
	if(isset($dropdown))
	{	
		 if($dropdown == "d1")
		 {
			 $_SESSION['dropdown1_id'] = $company_id;
		 }
		 
		 if($dropdown == "d2")
		 {
			 $_SESSION['dropdown2_id'] = $company_id;
		 }
		 
		 if($dropdown == "d3")
		 {
			 $_SESSION['dropdown3_id'] = $company_id;
		 }
	}	 
		 if($dropdown_id == "d4")
		 {
			 $_SESSION['dropdown4_value'] = $company_id;
		 }
		 
		 if($dropdown_id == "d5")
		 {
			 $_SESSION['dropdown5_value'] = $company_id;
		 }
		 
		 if($dropdown_id == "d6")
		 {
			 $_SESSION['dropdown6_value'] = $company_id;
		 }
		 
		 if($dropdown_id == "d7")
		 {
			 $_SESSION['dropdown7_value'] = $company_id;
		 }
		 
		 if($dropdown_id == "d8")
		 {
			 $_SESSION['dropdown8_value'] = $company_id;
		 }
//echo $company_id;

	if(isset($_SESSION['dropdown1_id']) && !empty($_SESSION['dropdown1_id']))
					{
						
						$sql2 = "select address from company where company_id = '".$_SESSION['dropdown1_id']."' ";
						$result = mysqli_query($conn,$sql2);
						$address = "";
						
						while($row=mysqli_fetch_assoc($result)){
							
							$address =  $row['address'];
						}	
						$_SESSION['address'] = $address;
						//echo "address";
				?>
					<script>
					 document.getElementById("address").value = "<?php echo $address; ?>";
					</script>
				
				<?php		
						
					}
		

	$conn = mysqli_connect("localhost","root","","chemistry_india");
	$sql = "select image_location from company where company_id = '".$company_id."' ";
	$result = mysqli_query($conn,$sql);
	
	while($row=mysqli_fetch_assoc($result)){
		
		echo $row['image_location'];
	}	


?>

</html>