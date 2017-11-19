

<?php
	$conn = mysqli_connect("localhost","root","","chemistry_india");
	if(!$conn)
			{
				die("Connection ma locha 6");
			}
			else
			{
				echo "Connected"."<br>";
			}
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
                width:150px;
                height: 40px;
                background-color: #286090;;
                color:white;
                margin-left:50%;
                border-radius: 5%;
            }
            .second{
                  height:100px;
                     background-color: #f8f8f8;
                     
            }
           
            .third1,.third2{
                 height:100px;
                   margin-top: 1%;
                   
            }
            .btn2{
                   margin-top: none;
                   float:right;
            }
            .dropdown2
            {
                position: relative;
               
                width:150px;
                height: 40px;
                background-color: #286090;;
                color:white;
                margin-left: 55%;
                border-radius: 5%;
            }
           .btn3{
                   margin-top: none;
                   float:right;
            }
            .dropdown3
            {
                position: relative;
               
                width:150px;
                height: 40px;
                background-color: #286090;
                color:white;
                margin-left: 55%;
                border-radius: 5%;
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
    <body>
        <div class="container" style="margin-top:60px;border: 1px solid #f2f2f2;">
        <!---------------first section---------------->
              <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 first col-centered" id ="div1" class="div1" >
	
            <!----------------first logo--------------------->
	 <div class="col-md-8 col-lg-8 col-sm-8 col-xs-8 logo_1" id="logo_1" name = "logo_1" >
            
        </div>
				
				
                <!--------first dropdown---------------->
                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3" >
                    <select class="dropdown1" name = "dropdown1" id="dropdown1" >
                        <option value="1 company1" style="background-color: #ffffff;color:black" name="dropdown11" id="dropdown11">1 company1</option>
                        <option value="2 company2" style="background-color: #ffffff;color:black" name="dropdown12" id="dropdown12">2 company2</option>
                        <option value="3 company3" style="background-color: #ffffff;color:black" name="dropdown13" id="dropdown13">3 company3</option>
                        <option value="4 company4" style="background-color: #ffffff;color:black" name="dropdown14" id="dropdown14">4 company4</option>
                    </select>
                </div>
                <!-----------first button------------------>
                <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 btn1" >
               <button type="button" onclick ="display_logo1()" class="btn btn-default" name= "dropdown_btn1" id ="dropdown_btn1">Done</button>
                </div>
                
            
                
			
		</div>	
        <!--------------------------------------------------------------->
            
        
            <!-----------second section------------------>
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 second col-centered" >
                
                <div class="row" style="">
            
             <div class="col-md-2 col-lg-1 col-sm-3 col-xs-3" style="margin-top:1%;">
                <span style="font-size: 125%; "><b>  Address:</b> </span>
            </div>
            <div class="col-md-5 col-lg-3 col-sm-6 col-xs-7" style="margin-top:1%;"> 
            <input type="text" class="form-control" id="address" name="address" style="width:500px;">
            
            </div>
             </div>
            </div>
        <!--------------------------------------------------------------->
        
        
         <!-----------third section------------------>
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 third col-centered">
            <div class="row">
                
                 <!-----------third-first section------------------>
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 third1 col-centered" style="border-right:2px solid #286090;">
                   
                         <!--------second dropdown-------------->
                          <div class="otherlogo1"  >
                  <select class="dropdown2" >
                        <option value="company1" style="background-color: #ffffff;color:black" name="dropdown21" id="dropdown21">The 1st Option</option>
                        <option value="company2" style="background-color: #ffffff;color:black" name="dropdown22" id="dropdown22">The 2nd Option</option>
                        <option value="company3" style="background-color: #ffffff;color:black" name="dropdown23" id="dropdown23">The 3rd Option</option>
                        <option value="company4" style="background-color: #ffffff;color:black" name="dropdown24" id="dropdown24">The 4th Option</option>
                    </select>

                         <!-----------second button------------------>
                         <div class="btn2">
               <button type="button" class="btn btn-default">Done</button>
                </div>
                </div>  
                
                
                </div>
            
                  <!-----------third-second section------------------>
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 third2 col-centered">
                    
                     <!--------third dropdown-------------->
                     <div class="otherlogo2"  >
                    <select class="dropdown3" >
                        <option value="company1" style="background-color: #ffffff;color:black" name="dropdown31" id="dropdown31">The 1st Option</option>
                        <option value="company2" style="background-color: #ffffff;color:black" name="dropdown32" id="dropdown32">The 2nd Option</option>
                        <option value="company3" style="background-color: #ffffff;color:black" name="dropdown33" id="dropdown33">The 3rd Option</option>
                        <option value="company4" style="background-color: #ffffff;color:black" name="dropdown34" id="dropdown34">The 4th Option</option>
                    </select>

                          <!-----------third button------------------>
                         <div class="btn3">
               <button type="button" class="btn btn-default">Done</button>
                </div>
                </div>  
                
                
                </div>
                  
            </div>
            </div>
           <!---------------------------------------------------------------> 
         
         
         <!-------------------- fouth Quotation ------------------------------->
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 fourth col-centered" >
        <span style="font-size: 200%;margin:auto;">Quotation</span>
    </div>
        
<!--------------------------------------------------------------->
     
     

<!--------------------  fifth Enter     Division ----------------------->
        
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 fifth col-centered" >
         <div class="row" style="margin-top:1.5%;">
            
             <div class="col-md-2 col-lg-1 col-sm-3 col-xs-3">
                <span style="font-size: 125%;margin-top:20px;"><b>  Division:</b> </span>
            </div>
            <div class="col-md-5 col-lg-3 col-sm-6 col-xs-7"> 
            <input type="text" class="form-control" id="division" name="division">
            
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
            <input type="text" class="form-control" id="customer_name" name="customer_name">
            </div>
        <!-------------------------------->
        
            <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3"></div>
        
        <!-- Date text box    -->
        
            <div class="col-md-2 col-lg-1 col-sm-3 col-xs-3">
                    <span style="font-size: 125%;"><b>Date:</b> </span>
            </div>

        <!-------------------------------->
        
            <div class="col-md-5 col-lg-3 col-sm-6 col-xs-7"> 
            <input type="date" class="form-control" id="date" name="date">
            </div>
            
        </div>


    </div>


<!----------------------------------------------------------------->   



<!-------------------- seventh Product Activation ------------------------------->
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 seventh col-centered" style="">
        <span style="font-size: 200%;margin-top: 50px;">Product Addition:</span>
    
        
        <br>
        <br>

<!------------  product table starts here ------------------------------->

  	 <table id="myTable" class="table">
    <tr>
                                               <th class="text-center">
							Sr_no.
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
    
    <tr id='addr0'>
						<td>
						1
                                                </td>
						<td>
                                                 <form>

						<input type="text" name='product_name'  placeholder='Product_name' class="form-control"/>
                                             <input type=submit value="select product"  style="align:right;width:50%;font-size: 75%;">
                                                 </form>
                                                 </td>
                                                <td>
                                                           <form>
                                                <input type="text" name='supplier_name'  placeholder='Supplier_name' class="form-control"/>
						
						 <input type=submit value="select supplier"  style="align:right;width:50%;font-size: 75%;">
                                                 </form>
						</td>
						<td>
						<input type="text" name='product_COA' placeholder='Product_COA' class="form-control"/>
						</td>
						<td>
						<input type="text" name='quantity' placeholder='Quantity' class="form-control"/>
						</td>
                                                <td>
						<input type="text" name='price' placeholder='Price' class="form-control"/>
						</td>
                                                 <td>
                                                <a href="#">
                                                <span class="glyphicon glyphicon-trash"></span>
                                                </a>
                                                 </td>
    </tr>
    
     <tr id='addr1'>
						<td>
						2
                                                </td>
						<td>
                                                 <form>

						<input type="text" name='product_name'  placeholder='Product_name' class="form-control"/>
                                             <input type=submit value="select product"  style="align:right;width:50%;font-size: 75%;">
                                                 </form>
                                                 </td>
                                                <td>
                                                           <form>
                                                <input type="text" name='supplier_name'  placeholder='Supplier_name' class="form-control"/>
						
						 <input type=submit value="select supplier"  style="align:right;width:50%;font-size: 75%;">
                                                 </form>
						</td>
						<td>
						<input type="text" name='product_COA' placeholder='Product_COA' class="form-control"/>
						</td>
						<td>
						<input type="text" name='quantity' placeholder='Quantity' class="form-control"/>
						</td>
                                                <td>
						<input type="text" name='price' placeholder='Price' class="form-control"/>
						</td>
                                                 <td>
                                                <a href="#">
                                                <span class="glyphicon glyphicon-trash"></span>
                                                </a>
                                                 </td>
    </tr>
       <tr id='addr2'>
						
    </tr>
    
    
</table>
<p>
    <input type="button" value="Insert row" id="add_row">
</p>
        
        
    
    </div>

<!--------------------------------------------------------------->

  <!-----------eight section------------------>
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 eigth col-centered" >
                
                <div class="row" style="">
            
             <div class="col-md-2 col-lg-1 col-sm-3 col-xs-3" style="margin-top:1%;">
                <span style="font-size: 125%; "><b>  Payment Terms:</b> </span>
            </div>
            <div class="col-md-5 col-lg-3 col-sm-6 col-xs-7" style="margin-top:1%;"> 
                
            <select class="dropdown4" >
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
            <select class="dropdown5" >
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
           <select class="dropdown6" >
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
           <select class="dropdown7" >
                        <option value="company1" style="background-color: #ffffff;color:black" name="dropdown21" id="dropdown21">The 1st Option</option>
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
           <select class="dropdown8" >
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
            <input type="text" class="form-control" id="address" name="address" style="width:500px;height: 100px;">
            
            </div>
             </div>
            </div>
        <!--------------------------------------------------------------->
        <!-----------------fourteenth submit section--------------------->
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 fourteenth col-centered">
           <div class="col-md-2 col-lg-1 col-sm-3 col-xs-3" style="margin-top:1%;margin-left: 50%;"> 
        <input type="submit" value="Preview" align="center" style="width:150px;height:50px;">
           </div>
        <div>
            
        </div>

        
        </div>
		
		
	<!--- Javascript and PHP Start Here ---->	
		<script>
			
		
		
		</script>
	


	
		
		
		
		
		
    </body>
    
</html>