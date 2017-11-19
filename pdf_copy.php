<?php

session_start();
//require_once('PHPMailer-master/class.phpmailer.php');
?>

<html>

<?php
$a = "PDF ";
$location1="";
$location2="";
$location3="";

$conn = mysqli_connect("localhost","root","","chemistry_india");
	if(isset($_SESSION['dropdown1_id']) && !empty($_SESSION['dropdown1_id']))
	{	
	$sql = "select image_location from company where company_id = '".$_SESSION['dropdown1_id']."' ";
	$result = mysqli_query($conn,$sql);
	$location1 ="";
	
	while($row=mysqli_fetch_assoc($result)){
		
		$location1 =  $row['image_location'];
		}
	
	}
	
	
$html = '<html>
			
			<body>
			<div class ="main_logo"><img src = "'.$location1.'" height = 100px width=200px></div>
			<br>
			
			';
			if(isset($_SESSION['dropdown1_id']) && !empty($_SESSION['dropdown1_id']))
	{
		$html_a = '	<div class ="address">'.$_SESSION['address'].'</div>
			
			<hr class="hr">';
			$html = $html.$html_a;
	}		
			
			
		$html_b = '	
			
			<br>
			<div class="quotation"><div class="quotation_label">Quotation</div></div>
			<br>
			
			<div class = "division"><span class="division_label">DIVISION:</span> <span class="division_value">'.$_SESSION["division_value"].'</span>
			</div>
			
			
			<div class = "customer_name"><span class="customer_label">Customer Name:</span> <span class="customer_value">'.$_SESSION['customer_name'].'</span>
			
			<span class="mid_cust">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</span>
			<span class="date_label">Date:</span> <span class="date_value">'.$_SESSION['date'].'</span>
			</div>
			
			
			<table class="table" >
			
			';
			
			$html = $html.$html_b;
			
			if(isset($_SESSION['cas_no_1']) && !empty($_SESSION['cas_no_1']) &&  isset($_SESSION['supplier_1']) && !empty($_SESSION['supplier_1'])) 
			{
				$html1 = ' <tr class = "row1">	
							<td>Sr.NO</td>
							<td>Product Name</td>
							<td>Product COA </td>
							<td>Supplier Name</td>
							<td>Quantity</td>
							<td>Price</td>
							</tr>
							<br>
							<tr>
							<td>1</td>
							<td>'.$_SESSION["product_name_1"].'</td>
							<td>PFA</td>
							<td>'.$_SESSION["supplier_1"].'</td>
							<td>'.$_SESSION['quantity_1'].'</td>
							<td>'.$_SESSION['price_1'].'</td>
							
							
							</tr>
							
							'; 
			}

			$html = $html.$html1;
			
			if(isset($_SESSION['cas_no_2']) && !empty($_SESSION['cas_no_2']) &&  isset($_SESSION['supplier_2']) && !empty($_SESSION['supplier_2'])) 
			{
				$html2 = '<tr class="row2">
							<td>1</td>
							<td>'.$_SESSION["product_name_2"].'</td>
							<td>PFA</td>
							<td>'.$_SESSION["supplier_2"].'</td>
							<td>'.$_SESSION['quantity_2'].'</td>
							<td>'.$_SESSION['price_2'].'</td>
							
							
							</tr>
							
							'; 
			
			}
			
	$html = $html.$html2;	
	$html = $html.'</table>';

		if(isset($_SESSION['dropdown4_value']) && !empty($_SESSION['dropdown4_value']))
		{
			$html4 = '   <hr class="hr">
						<br><br>
						<div class="payment">
						<span class="payment_terms_label">Payment Terms:</span>
						<span class="mid">aaaaaa/span>
						<span class="payment_terms_value">'.$_SESSION['dropdown4_value'].'</span>
						</div>
						
					
					';
				$html = $html.$html4;
		}
		
		if(isset($_SESSION['dropdown5_value']) && !empty($_SESSION['dropdown5_value']))
		{
			$html5 = '	<br><br>
						<div class="packing_details">
						<span class="packing_details_label">Packing Details:</span>
						<span class="mid">aaaaaaaa</span>
						<span class="packing_details_value">'.$_SESSION['dropdown5_value'].'</span>
						</div>
					
					';
				$html = $html.$html5;
				
		}
		
		if(isset($_SESSION['dropdown6_value']) && !empty($_SESSION['dropdown6_value']))
		{
			$html6 = '	<br><br>
						<div class="shipping_shedule">
						<span class="shipping_shedule_label">Shipping Schedule:</span>
						<span class="mid">aaaaa</span>
						<span class="shipping_shedule_value">'.$_SESSION['dropdown6_value'].'</span>
						</div>
					
					';
				$html = $html.$html6;
				
		}
		
		if(isset($_SESSION['dropdown7_value']) && !empty($_SESSION['dropdown7_value']))
		{
			$html7 = '	<br><br>
						<div class="modeof_transport">
						<span class="modeof_transport_label">Mode of Transport:</span>
						<span class="mid">aaaaa</span>	
						<span class="modeof_transport_value">'.$_SESSION['dropdown7_value'].'</span>
						</div>
					
					';
				$html = $html.$html7;
				
		}
		
		if(isset($_SESSION['dropdown8_value']) && !empty($_SESSION['dropdown8_value']))
		{
			$html8 = '	<br><br>
						<div class="validity">
						<span class="validity_label">Validity:</span>
						<span class="mid">aaaaaaaaaaaaaaaaa</span>
						<span class="validity_value">'.$_SESSION['dropdown8_value'].'</span>
						</div>
					
					';
				$html = $html.$html8;
				
		}
		
		
		if(isset($_SESSION['remarks']) && !empty($_SESSION['remarks']))
		{
			$html8 = '	<br><br>
						<div class="validity">
						<span class="remarks_label">Remarks:</span>
						<span class="mid">aaaaaaaaaaaaaaa</span>
						<span class="remarks_value">'.$_SESSION['remarks'].'</span>
						</div>
						
					';
				$html = $html.$html8;
				
		}
		
		$html9 = '<hr>
				  <span class = "note">*Note: The standard clauses can be insertes as per marketting division policy and customer requirements</span>	
				  <hr>
				  	';
		
		$html = $html.$html9;
			
	$html = $html.'</table>';	
	$html = $html.'</body></html>';

		
include("mpdf60/mpdf.php");
$mpdf=new mPDF('c');
$mpdf->SetDisplayMode('fullpage');
 
// LOAD a stylesheet
$stylesheet = file_get_contents('pdf_copy.css');
$mpdf->WriteHTML($stylesheet,1); // The parameter 1 tells that this is css/style only and no body/html/text
 
$mpdf->WriteHTML($html);
$mpdf->Output();


?>


</html>