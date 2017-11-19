<?php
// Start the session
session_start();
?>

<?php
	include("connect.php");
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

        <style>
   
            
            .first{
                height:100px;
                   margin-right: auto;    
            }
            .btn1{
				align : right;
            }
            .dropdown1
            {  
				margin-top:10%;

                float:right; 
				width:150px;
                height: 40px;
                background-color: #286090;;
                color:white;
                border-radius: 5%;
            }
            .second{
                  height:100px;
                     background-color: #f8f8f8;
                     
            }
           
            
            .btn2{
                   margin-top: none;
                   float:right;
            }
            
           .btn3{
                   margin-top: none;
                   float:right;
            }
			.quotation
			{
				text-align:center;
				margin-top: 0.5%;
			}
            
            .fourth{
                 height:50px;
                   margin-left: auto;
                   margin-right: auto;
                     background-color:#286090;
                     color:white;
            }
            .fifth{
                 height:100px;
                   margin-left: auto;
                   margin-right: auto;
                    
            }
			.table_row
			{
				height:50%;
			}
            .sixth{
                 height:100px;
                   margin-left: auto;
                   margin-right: auto;
                     background-color: #f9f9f9;
            }
            .seventh{
                 
                   margin-left: auto;
                   margin-right: auto;
                   
            }
         .eigth{
                  height:100px;
                     background-color: #f8f8f8;
                     
            }
            .dropdown4{
                  position: relative;
               
                width:500px;
                height: 40px;
                background-color: #ffffff;
                color:black;
                margin-left: 55%;
                border-radius: 5%;
                
            }
            .ninth{
                
                  height:100px;
                     background-color: #ffffff;    
            }
              .dropdown5{
                  position: relative;
               
                width:500px;
                height: 40px;
                background-color: #ffffff;
                color:black;
                margin-left: 55%;
                border-radius: 5%;
                
            }
            .tenth{
                   height:100px;
                     background-color: #f8f8f8;
            }
              .dropdown6{
                  position: relative;
               
                width:500px;
                height: 40px;
                background-color: #ffffff;
                color:black;
                margin-left: 55%;
                border-radius: 5%;
                
            }
            .eleventh{
                height:100px;
                     background-color: #ffffff;
            }
              .dropdown7{
                  position: relative;
               
                width:500px;
                height: 40px;
                background-color: #ffffff;
                color:black;
                margin-left: 55%;
                border-radius: 5%;
                
            }
            .twelfth{
                   height:100px;
                     background-color: #f8f8f8;
            }
              .dropdown8{
                  position: relative;
               
                width:500px;
                height: 40px;
                background-color: #ffffff;
                color:black;
                margin-left: 55%;
                border-radius: 5%;
                
            }
            .thirteenth{
               
                     background-color: #ffffff;
            }
            hr{
                border:1px solid #286090;
            }
              #w{
                background-color:#000066;
                border:1px;;
                color:white;
                border-radius:0em;
                font-family: "Trebuchet MS", Helvetica, sans-serif;
                font-size: 30px;
            }
            table{
                border: 1px solid black;
               
            }
        </style>
        <script>
            	$(document).ready(function(){
					
					
					
					
				 var i=2;
                                    $('#myTable').on('click', 'a', function () {
                                   $(this).closest('tr').remove();
                                     });
                                     
				$("#add_row").click(function(){
                                $('#addr'+i).html("<td>"+ (i+1) +"</td><td><form><input type='text' name='product_name"+i+"'  placeholder='Product_name' class='form-control input-md'><input type=submit value='select product'  style='align:right;width:50%;font-size: 75%;'></form></td><td><form><input type='text' name='supplier_name"+i+"'  placeholder='Supplier_name' class='form-control input-md'><input type=submit value='select product'  style='align:right;width:50%;font-size: 75%;'></form></td><td><input  <input type='text' name='product_COA"+i+"' placeholder='Product_COA' class='form-control input-md'></td><td><input  name='mobile"+i+"' type='text' placeholder='Mobile' <input type='text' name='quantity"+i+"' placeholder='Quantity' class='form-control input-md'></td><td><input type='text' name='price' placeholder='Price' class='form-control input-md'/></td><td> <a href='#'><span name='btn"+i+"' placeholder='btn' class='glyphicon glyphicon-trash'></span> </a> </td>");
	                         
			
	                         $('#myTable').append('<tr id="addr'+(i+1)+'"></tr>');
				  i++; 
                                    });
									
					
									
									
									
									
			});
            </script>
			
			
		
			
    </head>
    <body onload = "check_this()">
        <div class="container" id ="container"style="margin-top:60px;border: 1px solid #f2f2f2;">
        <!---------------first section---------------->
              <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 first col-centered" id ="div1" class="div1" >
	
            <!----------------first logo--------------------->
	 <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 logo_1" id="logo_1" name = "logo_1" >
            
        </div>
				
				
             <!--------first dropdown---------------->
                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2" >
                    <select class="dropdown1" name = "dropdown1" id="dropdown1" onchange = "logo1_display(this.value)" >
                        <option value="" style="background-color: #ffffff;color:black" name="dropdown11" id="dropdown11">Select Company</option>
                        <option value="1 company1" style="background-color: #ffffff;color:black" name="dropdown11" id="dropdown11">1 company1</option>
                        <option value="2 company2" style="background-color: #ffffff;color:black" name="dropdown12" id="dropdown12">2 company2</option>
                        <option value="3 company3" style="background-color: #ffffff;color:black" name="dropdown13" id="dropdown13">3 company3</option>
                        <option value="4 company4" style="background-color: #ffffff;color:black" name="dropdown14" id="dropdown14">4 company4</option>
                    </select>
                </div>
            <!-----------first button----------------
                <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 btn1" >
               <button type="button" onclick ="display_logo1()" class="btn btn-default" name= "dropdown_btn1" id ="dropdown_btn1">Done</button>
                </div>
             -->  
            
                
			
		</div>	
        <!--------------------------------------------------------------->
            
        
            <!-----------second section------------------>
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 second col-centered" >
                
                <div class="row" style="">
            
             <div class="col-md-2 col-lg-1 col-sm-3 col-xs-3" style="margin-top:1%;">
                <span style="font-size: 125%; "><b>  Address:</b> </span>
            </div>
            <div class="col-md-5 col-lg-4 col-sm-6 col-xs-7" style="margin-top:1%;"> 
            <input type="text" class="form-control" id="address" name="address" style="height:50%;">
            
            </div>
             </div>
            </div>
			
			
			
        <!--------------------------------------------------------------->
        
		<?php
			
			if(isset($_SESSION['dropdown1_id']) && !empty($_SESSION['dropdown1_id']))
					{
						
						$sql2 = "select address from company where company_id = '".$_SESSION['dropdown1_id']."' ";
						$result = mysqli_query($conn,$sql2);
						$address = "";
						
						while($row=mysqli_fetch_assoc($result)){
							
							$address =  $row['address'];
						}	
						$_SESSION['address'] = $address;
				?>
					<script>
					 document.getElementById("address").value = "<?php echo $address; ?>";
					</script>
				
				<?php		
						
					}
		?>



	 
                
           
		   
    
				
				
         <!-------------------- fouth Quotation ------------------------------->
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 fourth col-centered" >
      <div class="quotation">  <span style="font-size: 200%;">Quotation</span></div>
    </div>
        
<!--------------------------------------------------------------->
     
     

<!--------------------  fifth Enter     Division ----------------------->
        
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 fifth col-centered" >
         <div class="row" style="margin-top:1.5%;">
            
             <div class="col-md-2 col-lg-1 col-sm-3 col-xs-3">
                <span style="font-size: 125%;margin-top:20px;"><b>  Division:</b> </span>
            </div>
            <div class="col-md-5 col-lg-3 col-sm-6 col-xs-7"> 
            <input type="text"  class="form-control" id="division" name="division" onblur="store_division_value(this.value)">
            <div id="txtHint" style="height:1000px;width:1000px"></div>
         </div>
    </div>
    </div>
	

<!----------------------------------------------------------------->
						
<!-------------------- sixth Customer Name ----------------------->
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 sixth col-centered" style="" >
        <div class="row" style="margin-top:1.5%;">
            
             <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
                <span style="font-size: 125%;margin-top:20px;"><b>Customer Name:</b> </span>
            </div>
       
        <!-- customer_name_text box    -->
            <div class="col-md-5 col-lg-3 col-sm-6 col-xs-7"> 
            <input type="text" class="form-control" id="customer_name" name="customer_name" onblur="store_customer_value(this.value)">
            </div>
        <!-------------------------------->
        
            <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3"></div>
        
        <!-- Date text box    -->
        
            <div class="col-md-2 col-lg-1 col-sm-3 col-xs-3">
                    <span style="font-size: 125%;"><b>Date:</b> </span>
            </div>

        <!-------------------------------->
        
            <div class="col-md-5 col-lg-3 col-sm-6 col-xs-7"> 
            <input type="date" class="form-control" id="date" name="date" onblur="store_date(this.value)">
            </div>
            
        </div>


    </div>


<!----------------------------------------------------------------->   



<!-------------------- seventh Product Activation ------------------------------->
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 seventh col-centered" style="">
        <span style="font-size: 200%;margin-top: 50px;">Product Addition:</span>
<!-- button to take you to product selection page -->		
			
        
        <br>
        <br>

<!------------  product table starts here ------------------------------->

  	 <table id="myTable" class="table-bordered">
    <tr style="height:50px;">
                        <th class="text-center">
							Sr_no.
						</th>
						<th class="text-center">
							CAS No
						</th>
						<th class="text-center">
							Product Name
						</th>
                                                <th class="text-center">
							Supplier Name
						</th>
						<th class="text-center">
							Product COA
						</th>
						<th class="text-center">
							Quantity
						</th>
                                                <th class="text-center">
							Price
						</th>
    </tr>
		
		<tr style="height:120px;">
		
			<td class = "text-center">
				1
			</td>
		
			<td class = "text-center">
				<input type="text" class= "form-control" name="cas_no_1" id="cas_no_1" >
			</td>
			
			<td class = "text-center" style="padding-top:23px;">
				<input type="text" class= "form-control" name="product_1" id="product_1">
				<button class="btn-default" name="select_product_1"  id= "select_product_1"  onclick = "select_product_1()">Select</button>
			</td>
			
			<td class = "text-center" style="padding-top:23px;">
				<input type="text" class= "form-control" name="supplier_1" id="supplier_1">
				<button class="btn-default" name="select_supplier_1"  id= "select_supplier_1" onclick = "select_supplier_1()">Select</button>
			</td>
			
			<td class = "text-center" style="padding-top:23px;"	>
				<input type="text" class= "form-control" name="coa_no_1" id="coa_no_1">
				<button class="btn-default" name="upload_1"  id= "upload_1">Upload	</button>
			</td>
			
			<td class = "text-center">
				<input type="text" class= "form-control" name="quantity_1" id="quantity_1" onblur = "store_quantity_1(this.value)">
			</td>
			
			<td class = "text-center">
				<input type="text" class= "form-control" name="price_1" id="price_1"  onblur = "store_price_1(this.value)">
			</td>
		
		</tr>
		
		<!-- Second Row -->
		
		<tr style="height:120px;">
		
			<td class = "text-center">
				1
			</td>
		
			<td class = "text-center">
				<input type="text" class= "form-control" name="cas_no_2" id="cas_no_2">
			</td>
			
			<td class = "text-center" style="padding-top:23px;">
				<input type="text" class= "form-control" name="product_2" id="product_2">
				<button class="btn-default" name="select_product_2"  id= "select_product_2" onclick = "select_product_2()">Select</button>
			</td>
			
			<td class = "text-center" style="padding-top:23px;">
				<input type="text" class= "form-control" name="supplier_2" id="supplier_2">
				<button class="btn-default" name="select_supplier_2"  id= "select_supplier_2" onclick="select_supplier_2()">Select</button>
			</td>
			
			<td class = "text-center" style="padding-top:23px;">
				<input type="text" class= "form-control" name="coa_no_2" id="coa_no_2">
				<button class="btn-default" name="upload_2"  id= "upload_1">Upload	</button>
			</td>
			
			<td class = "text-center">
				<input type="text" class= "form-control" name="quantity_2" id="quantity_2" onblur = "store_quantity_2(this.value)">
			</td>
			
			<td class = "text-center">
				<input type="text" class= "form-control" name="price_2" id="price_2" onblur = "store_price_2(this.value)">
			</td>
		
		</tr>
	
	
	
    
</table>
<p>
    <input type="button" value="Insert row" id="add_row">
</p>
        
			
    
    </div>
	
	<!-- php code for product selection   ------  will put this in a file--->
	<?php		
	
	
		if(isset($_POST['check_list1']) && !empty($_POST['check_list1']))
		{
			
					$arr = explode(" ",$_POST['check_list1']);
					
					$cas_no_1 = $arr[0];
					$_SESSION['cas_no_1'] = $arr[0];
					echo "Session cas_no: ". $_SESSION['cas_no_1'];
					$product_name_1 = $arr[1];
					$_SESSION['product_name_1'] = $arr[1];
			
			?>		
				<script>
					
					document.getElementById("cas_no_1").value = "<?php echo $cas_no_1 ?>";
					document.getElementById("product_1").value = "<?php echo $product_name_1 ?>";
					
					
				</script>		
				
	<?php
		
		
		}
	


	?>
	
	<!--  For 2nd Product Selection -->
	
	<?php		
	
	
		if(isset($_POST['check_list2']) && !empty($_POST['check_list2']))
		{
			
					$arr2 = explode(" ",$_POST['check_list2']);
					
					$cas_no_2 = $arr2[0];
					$_SESSION['cas_no_2'] = $arr2[0];
					echo "Session cas_no2: ". $_SESSION['cas_no_2'];
					$product_name_2 = $arr2[1];
					$_SESSION['product_name_2'] = $arr2[1];
			
			?>		
				<script>
					
					document.getElementById("cas_no_2").value = "<?php echo $cas_no_2 ?>";
					document.getElementById("product_2").value = "<?php echo $product_name_2 ?>";
					
					
				</script>		
				
	<?php
		
		
		}
	


	?>
	
	
	
	<!-- for supplier_1   -->

	
	<?php		
	
	
		if(isset($_POST['radio_button_1']) && !empty($_POST['radio_button_1']))
		{
			$supplier_name = $_POST['radio_button_1'];
			$_SESSION['supplier_1'] =  $supplier_name;
			
		?>	
			
			<script>
					
					document.getElementById("supplier_1").value = "<?php echo $supplier_name ?>";
					
					
				</script>
			
	
	<?php
		}
	?>
	
	<!-- for supplier_2   -->
	
	<?php		
	
	
		if(isset($_POST['radio_button_2']) && !empty($_POST['radio_button_2']))
		{
			$supplier_name2 = $_POST['radio_button_2'];
			$_SESSION['supplier_2'] =  $supplier_name2;
			
		?>	
			
			<script>
					
					document.getElementById("supplier_2").value = "<?php echo $supplier_name2 ?>";
					
					
				</script>
			
	
	<?php
		}
	?>
	
	
	
	<!------>
<!--------------------------------------------------------------->

  <!-----------eight section------------------>
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 eigth col-centered" >
                
                <div class="row" style="">
            
             <div class="col-md-2 col-lg-1 col-sm-3 col-xs-3" style="margin-top:1%;">
                <span style="font-size: 125%; "><b>  Payment Terms:</b> </span>
            </div>
            <div class="col-md-5 col-lg-3 col-sm-6 col-xs-7" style="margin-top:1%;"> 
                
            <select class="dropdown4"  name = "dropdown4" id="dropdown4" onchange = "dropdown4_display(this.value)">
						 <option  style="background-color: #ffffff;color:black" >Select</option>
                         <option value="company1" style="background-color: #ffffff;color:black" name="dropdown21" id="dropdown21">The 1st Option</option>
                        <option value="company2" style="background-color: #ffffff;color:black" name="dropdown22" id="dropdown22">The 2nd Option</option>
                        <option value="company3" style="background-color: #ffffff;color:black" name="dropdown23" id="dropdown23">The 3rd Option</option>
                        <option value="company4" style="background-color: #ffffff;color:black" name="dropdown24" id="dropdown24">The 4th Option</option>
                    </select>
            </div>
             </div>
            </div>
        <!--------------------------------------------------------------->
        
          <!-----------ninth section------------------>
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 ninth col-centered" >
                
                <div class="row" style="">
            
             <div class="col-md-2 col-lg-1 col-sm-3 col-xs-3" style="margin-top:1%;">
                <span style="font-size: 125%; "><b>  Packing Details:</b> </span>
            </div>
            <div class="col-md-5 col-lg-3 col-sm-6 col-xs-7" style="margin-top:1%;"> 
            <select class="dropdown5" name = "dropdown5" id="dropdown5" onchange = "dropdown5_display(this.value)">
						<option  style="background-color: #ffffff;color:black" >Select</option>
                        <option value="company1" style="background-color: #ffffff;color:black" name="dropdown21" id="dropdown21">The 1st Option</option>
                        <option value="company2" style="background-color: #ffffff;color:black" name="dropdown22" id="dropdown22">The 2nd Option</option>
                        <option value="company3" style="background-color: #ffffff;color:black" name="dropdown23" id="dropdown23">The 3rd Option</option>
                        <option value="company4" style="background-color: #ffffff;color:black" name="dropdown24" id="dropdown24">The 4th Option</option>
                    </select>
            </div>
             </div>
            </div>
        <!--------------------------------------------------------------->
          <!-----------tenth section------------------>
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 tenth col-centered" >
                
                <div class="row" style="">
            
             <div class="col-md-2 col-lg-1 col-sm-3 col-xs-3" style="margin-top:1%;">
                <span style="font-size: 125%; "><b>  Shipping Schedule:</b> </span>
            </div>
            <div class="col-md-5 col-lg-3 col-sm-6 col-xs-7" style="margin-top:1%;"> 
           <select class="dropdown6" name = "dropdown6" id="dropdown6" onchange = "dropdown6_display(this.value)">
						<option  style="background-color: #ffffff;color:black" >Select</option>
                        <option value="company1" style="background-color: #ffffff;color:black" name="dropdown21" id="dropdown21">The 1st Option</option>
                        <option value="company2" style="background-color: #ffffff;color:black" name="dropdown22" id="dropdown22">The 2nd Option</option>
                        <option value="company3" style="background-color: #ffffff;color:black" name="dropdown23" id="dropdown23">The 3rd Option</option>
                        <option value="company4" style="background-color: #ffffff;color:black" name="dropdown24" id="dropdown24">The 4th Option</option>
                    </select>
            </div>
             </div>
            </div>
        <!--------------------------------------------------------------->
          <!-----------eleventh section------------------>
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 eleventh col-centered" >
                
                <div class="row" style="">
            
             <div class="col-md-2 col-lg-1 col-sm-3 col-xs-3" style="margin-top:1%;">
                <span style="font-size: 125%; "><b>  Mode of Transport:</b> </span>
            </div>
            <div class="col-md-5 col-lg-3 col-sm-6 col-xs-7" style="margin-top:1%;"> 
           <select class="dropdown7" name = "dropdown7" id="dropdown7" onchange = "dropdown7_display(this.value)">
						<option  style="background-color: #ffffff;color:black" >Select</option>
                        <option value= "company1" style="background-color: #ffffff;color:black" name="dropdown21" id="dropdown21">The 1st Option</option>
                        <option value="company2" style="background-color: #ffffff;color:black" name="dropdown22" id="dropdown22">The 2nd Option</option>
                        <option value="company3" style="background-color: #ffffff;color:black" name="dropdown23" id="dropdown23">The 3rd Option</option>
                        <option value="company4" style="background-color: #ffffff;color:black" name="dropdown24" id="dropdown24">The 4th Option</option>
                    </select> 
            </div>
             </div>
            </div>
        <!--------------------------------------------------------------->
          <!-----------twelfth section------------------>
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 twelfth col-centered" >
                
                <div class="row" style="">
            
             <div class="col-md-2 col-lg-1 col-sm-3 col-xs-3" style="margin-top:1%;">
                <span style="font-size: 125%; "><b>  Validity:</b> </span>
            </div>
            <div class="col-md-5 col-lg-3 col-sm-6 col-xs-7" style="margin-top:1%;"> 
           <select class="dropdown8" name = "dropdown8" id="dropdown8" onchange = "dropdown8_display(this.value)" >
						<option  style="background-color: #ffffff;color:black" >Select</option>
                        <option value="company1" style="background-color: #ffffff;color:black" name="dropdown21" id="dropdown21">The 1st Option</option>
                        <option value="company2" style="background-color: #ffffff;color:black" name="dropdown22" id="dropdown22">The 2nd Option</option>
                        <option value="company3" style="background-color: #ffffff;color:black" name="dropdown23" id="dropdown23">The 3rd Option</option>
                        <option value="company4" style="background-color: #ffffff;color:black" name="dropdown24" id="dropdown24">The 4th Option</option>
                    </select> 
            </div>
             </div>
            </div>
        <!--------------------------------------------------------------->
          <!-----------thirteen section------------------>
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 thirteenth col-centered" >
                
                <div class="row" style="">
            
             <div class="col-md-2 col-lg-1 col-sm-3 col-xs-3" style="margin-top:1%;">
                <span style="font-size: 125%; "><b>  Remarks*:</b> </span>
            </div>
            <div class="col-md-5 col-lg-3 col-sm-6 col-xs-7" style="margin-top:1%;"> 
            <input type="text" class="form-control" id="remarks" name="remarks" style="width:180%;height: 15%;" onblur = "store_remarks(this.value)">
            
            </div>
             </div>
            </div>
        <!--------------------------------------------------------------->
        <!-----------------fourteenth submit section--------------------->
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 fourteenth col-centered">
           <div class="col-md-2 col-lg-1 col-sm-3 col-xs-3" style="margin-top:1%;margin-left: 50%;"> 
        <button  align="center" class = " btn btn-warning" onclick="preview()">Preview</button>
           </div>
        <div>
            
        </div>

        
        </div>
		
		<!-- php code to check the reload option on reload------------------------------------------------>     
				
			<?php include("onload_again.php"); ?>
	<!------------------- php code ends here    ------------------------------------------------>     
				
		
	<!--- Javascript and PHP Start Here ---->	
		<script>
		var location;
			function logo1_display(company)
			{
				
				company = company + " d1";
				
				var  xhttp = new XMLHttpRequest();
				  xhttp.onreadystatechange = function() {
					if (xhttp.readyState == 4 && xhttp.status == 200) {
					  
					  
					  //document.getElementById("logo_1").innerHTML = xhttp.responseText;
					  document.getElementById("logo_1").innerHTML = "<img src ='"+xhttp.responseText+"' height='69' width='500px' style='padding-top:3%;margin-left:32%;' >";
					}
				  };
				  xhttp.open("GET", "get_company_logo.php?q="+company, true);
				  xhttp.send();
				//document.getElementById("logo_1").innerHTML = "";				
				
			}
			
			function logo2_display(company)
			{
				//alert(company);
				company = company + " d2";
				var  xhttp = new XMLHttpRequest();
				  xhttp.onreadystatechange = function() {
					if (xhttp.readyState == 4 && xhttp.status == 200) {
					  
					  
					  //document.getElementById("logo_1").innerHTML = xhttp.responseText;
					  document.getElementById("logo_2").innerHTML = "<img src ='"+xhttp.responseText+"' height='50' width='250' style='padding-top:3%;' >";
					}
				  };
				  xhttp.open("GET", "get_company_logo.php?q="+company, true);
				  xhttp.send();
				//document.getElementById("logo_1").innerHTML = "";				
				
			}
		
			
			function logo3_display(company)
			{
				//alert(company);
				company = company + " d3";
				var  xhttp = new XMLHttpRequest();
				  xhttp.onreadystatechange = function() {
					if (xhttp.readyState == 4 && xhttp.status == 200) {
					  
					  
					  //document.getElementById("logo_1").innerHTML = xhttp.responseText;
					  document.getElementById("logo_3").innerHTML = "<img src ='"+xhttp.responseText+"' height='50' width='250' style='padding-top:3%;' >";
					}
				  };
				  xhttp.open("GET", "get_company_logo.php?q="+company, true);
				  xhttp.send();
				//document.getElementById("logo_1").innerHTML = "";				
				
			}
			
			function dropdown4_display(str)
			{
				//alert("4");
				str = str + " d4";
				var  xhttp = new XMLHttpRequest();
				  xhttp.onreadystatechange = function() {
					if (xhttp.readyState == 4 && xhttp.status == 200) {
					  
					  
					  document.getElementById("txtHint").innerHTML = xhttp.responseText;
					}
				  };
				  xhttp.open("GET", "get_company_logo.php?q="+str, true);
				  xhttp.send();			
				
			}
			
			function dropdown5_display(str)
			{
				//alert("5");
				str = str + " d5";
				var  xhttp = new XMLHttpRequest();
				  xhttp.onreadystatechange = function() {
					if (xhttp.readyState == 4 && xhttp.status == 200) {
					  
					  
					  document.getElementById("txtHint").innerHTML = xhttp.responseText;
					}
				  };
				  xhttp.open("GET", "get_company_logo.php?q="+str, true);
				  xhttp.send();			
				
			}
			
			function dropdown6_display(str)
			{
				//alert("6");
				str = str + " d6";
				
				var  xhttp = new XMLHttpRequest();
				  xhttp.onreadystatechange = function() {
					if (xhttp.readyState == 4 && xhttp.status == 200) {
					  
					  
					  document.getElementById("txtHint").innerHTML = xhttp.responseText;
					}
				  };
				  xhttp.open("GET", "get_company_logo.php?q="+str, true);
				  xhttp.send();			
				
			}
			
			function dropdown7_display(str)
			{
				//alert("7");
				str = str + " d7";
				var  xhttp = new XMLHttpRequest();
				  xhttp.onreadystatechange = function() {
					if (xhttp.readyState == 4 && xhttp.status == 200) {
					  
					  
					  document.getElementById("txtHint").innerHTML = xhttp.responseText;
					}
				  };
				  xhttp.open("GET", "get_company_logo.php?q="+str, true);
				  xhttp.send();			
				
			}
			
			function dropdown8_display(str)
			{
				
				str = str + " d8";
				//alert("8");
				var  xhttp = new XMLHttpRequest();
				  xhttp.onreadystatechange = function() {
					if (xhttp.readyState == 4 && xhttp.status == 200) {
					  
					  
					  document.getElementById("txtHint").innerHTML = xhttp.responseText;
					}
				  };
				  xhttp.open("GET", "get_company_logo.php?q="+str, true);
				  xhttp.send();			
				
			}
			
			
			function store_division_value(str)
			{
				
				var  xhttp = new XMLHttpRequest();
				  xhttp.onreadystatechange = function() {
					if (xhttp.readyState == 4 && xhttp.status == 200) {
					  
					  
					  document.getElementById("txtHint").innerHTML = xhttp.responseText;
					}
				  };
				  xhttp.open("GET", "store_division_value.php?q="+str, true);
				  xhttp.send();			
				
			}
			
			
			function store_customer_value(str)
			{
				
				var  xhttp = new XMLHttpRequest();
				  xhttp.onreadystatechange = function() {
					if (xhttp.readyState == 4 && xhttp.status == 200) {
					  
					  
					  document.getElementById("txtHint").innerHTML = xhttp.responseText;
					}
				  };
				  xhttp.open("GET", "store_customer_value.php?q="+str, true);
				  xhttp.send();			
				
			}
			
			function store_date(str)
			{
				
				var  xhttp = new XMLHttpRequest();
				  xhttp.onreadystatechange = function() {
					if (xhttp.readyState == 4 && xhttp.status == 200) {
					  
					  
					  document.getElementById("txtHint").innerHTML = xhttp.responseText;
					}
				  };
				  xhttp.open("GET", "store_date.php?q="+str, true);
				  xhttp.send();			
				
			}
			
			
			
			
			
			function select_product_1()
			{
				
				var xhttp;
				  xhttp = new XMLHttpRequest();
						  
						  xhttp.onreadystatechange = function() {
							
							if (xhttp.readyState == 4 && xhttp.status == 200) {
								
							  document.getElementById("txtHint").innerHTML = xhttp.responseText;
							  location.href="select_product.php?q=";
								}
						  };
						  xhttp.open("GET", "gethint.php?q=", true);
						  xhttp.send();   
				
				
				
				
			}
			
			
			function select_product_2()
			{
			
				location.href="select_product_2.php?q=";
			
				
			}
			
			
			function select_supplier_1()
			{
				location.href="select_supplier_1.php";
			}
			
			function select_supplier_2()
			{
				location.href="select_supplier_2.php";
			}
			
			function store_quantity_1(str)
			{
				
				var xhttp;
				  xhttp = new XMLHttpRequest();
						  
						  xhttp.onreadystatechange = function() {
							
							if (xhttp.readyState == 4 && xhttp.status == 200) {
								
							  document.getElementById("txtHint").innerHTML = xhttp.responseText;
							 // location.href="select_product.php?q=";
								}
						  };
						  xhttp.open("GET", "store_quantity_1.php?q="+str, true);
						  xhttp.send();   
				
				
			}
			
			function store_quantity_2(str)
			{
				
				var xhttp;
				  xhttp = new XMLHttpRequest();
						  
						  xhttp.onreadystatechange = function() {
							
							if (xhttp.readyState == 4 && xhttp.status == 200) {
								
							  document.getElementById("txtHint").innerHTML = xhttp.responseText;
							 // location.href="select_product.php?q=";
								}
						  };
						  xhttp.open("GET", "store_quantity_2.php?q="+str, true);
						  xhttp.send();   
				
				
				
				
			}
			
			
			
			function store_price_1(str)
			{
				var xhttp;
				  xhttp = new XMLHttpRequest();
						  
						  xhttp.onreadystatechange = function() {
							
							if (xhttp.readyState == 4 && xhttp.status == 200) {
								
							  document.getElementById("txtHint").innerHTML = xhttp.responseText;
							 // location.href="select_product.php?q=";
								}
						  };
						  xhttp.open("GET", "store_price_1.php?q="+str, true);
						  xhttp.send();   
				
				
				
			}
			
			
			function store_price_2(str)
			{
				var xhttp;
				  xhttp = new XMLHttpRequest();
						  
						  xhttp.onreadystatechange = function() {
							
							if (xhttp.readyState == 4 && xhttp.status == 200) {
								
							  document.getElementById("txtHint").innerHTML = xhttp.responseText;
							 // location.href="select_product.php?q=";
								}
						  };
						  xhttp.open("GET", "store_price_2.php?q="+str, true);
						  xhttp.send();   
				
				
				
			}
			
			
			function store_remarks(str)
			{
				
				var xhttp;
				  xhttp = new XMLHttpRequest();
						  
						  xhttp.onreadystatechange = function() {
							
							if (xhttp.readyState == 4 && xhttp.status == 200) {
								
							  document.getElementById("txtHint").innerHTML = xhttp.responseText;
							 // location.href="select_product.php?q=";
								}
						  };
						  xhttp.open("GET", "store_remarks.php?q="+str, true);
						  xhttp.send();   
				
				
			}
			
			function preview()
			{
				location.href = "pdf_copy.php";
				
			}
				
				

			
			
		</script>
	


	
		
		
		
		
		
    </body>
    
</html>

