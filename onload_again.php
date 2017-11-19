<?php 
					if(isset($_SESSION['dropdown1_id']) && !empty($_SESSION['dropdown1_id']))
					{
						require("onload_get_logo.php");
						//echo "dropdown 1 is selected ".$_SESSION['dropdown1_id']."<br>" ;
						$location1 = getimage($_SESSION['dropdown1_id']);
						//echo "$location1"."<br>";
						
					?>	
						
						<script>
							
							document.getElementById("logo_1").innerHTML = "<img src ='<?php echo $location1;?>' height='50' width='250' style='padding-top:3%;' >";
						</script>
						
						
						
						
						
						
					<?php }
					if(isset($_SESSION['dropdown2_id']) && !empty($_SESSION['dropdown2_id']))
					{
						
						//echo "dropdown 2 is selected ".$_SESSION['dropdown2_id']."<br>" ;
						$location2 = getimage($_SESSION['dropdown2_id']);
						//echo "$location2"."<br>";
					?>	
						
						<script>
							
							document.getElementById("logo_2").innerHTML = "<img src ='<?php echo $location2;?>' height='50' width='100' style='padding-top:3%;' >";
						</script>
						
						
						
						
						
						
					<?php }
						
					
					if(isset($_SESSION['dropdown3_id']) && !empty($_SESSION['dropdown3_id']))
					{
						
						//echo "dropdown 3 is selected ".$_SESSION['dropdown3_id']."<br>" ;
						$location3 = getimage($_SESSION['dropdown3_id']);
						//echo "$location3"."<br>";
					?>	
						
						<script>
							
							document.getElementById("logo_3").innerHTML = "<img src ='<?php echo $location3;?>' height='50' width='250' style='padding-top:3%;' >";
						</script>
						
						
						
						
						
						
					<?php }
	//////////////////////// setting the value for division field /////////////	
				
					
				?>
				
				<?php 
						
					
					if(isset($_SESSION['division_value']) && !empty($_SESSION['division_value']))
					{
							//echo "division :".$_SESSION['division_value']."<br>";
					?>		
							<script>
							
							document.getElementById("division").value = "<?php echo $_SESSION['division_value'] ?>";
							</script>
				<?php	}
			//////// setting the value of customer name ////////
			
					if(isset($_SESSION['customer_name']) && !empty($_SESSION['customer_name']))
					{
							//echo "customer_name :".$_SESSION['customer_name']."<br>";
					?>
							<script>
							document.getElementById("customer_name").value = "<?php echo $_SESSION['customer_name'] ?>";
							</script>
				<?php	}
			
				//////////// setting the value of  data
					if(isset($_SESSION['date']) && !empty($_SESSION['date']))
					{
							//echo "date :".$_SESSION['date']."<br>";
					?>		
							<script>
							document.getElementById("date").value = "<?php echo $_SESSION['date'] ?>";
							</script>
			<?php		}

			/////// setting the value of payment terms
			
					if(isset($_SESSION['dropdown4_value']) && !empty($_SESSION['dropdown4_value']))
					{
								//echo "dropdown4_value :".$_SESSION['dropdown4_value']."<br>";
					?>
							<script>
							document.getElementById("dropdown4").value = "<?php echo $_SESSION['dropdown4_value'] ?>";
							</script>
		<?php
					}
				/////// setting the value of payment terms
					
					
					if(isset($_SESSION['dropdown5_value']) && !empty($_SESSION['dropdown5_value']))
					{
							//echo "dropdown4_value :".$_SESSION['dropdown5_value']."<br>";
					?>
							<script>
							document.getElementById("dropdown5").value = "<?php echo $_SESSION['dropdown5_value'] ?>";
							</script>
		<?php
					}
					/////// setting the value of packing details
					
					if(isset($_SESSION['dropdown6_value']) && !empty($_SESSION['dropdown6_value']))
					{
							//echo "dropdown6_value :".$_SESSION['dropdown6_value']."<br>";
					?>
							<script>
							document.getElementById("dropdown6").value = "<?php echo $_SESSION['dropdown6_value'] ?>";
							</script>
		<?php
					}
						/////// setting the value of shipping schedule	
						if(isset($_SESSION['dropdown7_value']) && !empty($_SESSION['dropdown7_value']))
					{
							//echo "dropdown7value :".$_SESSION['dropdown7_value']."<br>";
					?>
							<script>
							document.getElementById("dropdown7").value = "<?php echo $_SESSION['dropdown7_value'] ?>";
							</script>
				<?php
					}
				//		/////// setting the value of mode of transport
					 if(isset($_SESSION['dropdown8_value']) && !empty($_SESSION['dropdown8_value']))
					{
							//echo "dropdown8value :".$_SESSION['dropdown8_value']."<br>";
					?>
							<script>
							document.getElementById("dropdown8").value = "<?php echo $_SESSION['dropdown8_value'] ?>";
							</script>
				<?php
					}
					
					/// setting the values for product and supplier
						if(isset($_SESSION['cas_no_1']) && !empty($_SESSION['cas_no_1']))
						{
							//echo "cas_no_1: ".$_SESSION['cas_no_1']."<br>";
							//echo "product_name : ".$_SESSION['product_name_1']."<br>";
							
						?>	
						<script>
							
								document.getElementById("cas_no_1").value = "<?php echo $_SESSION['cas_no_1'] ?>";
								document.getElementById("product_1").value = "<?php echo $_SESSION['product_name_1'] ?>";
					
					
					</script>		
						
						
					<?php	}
					
					// setting for supplier_1
						if(isset($_SESSION['supplier_1']) && !empty($_SESSION['supplier_1']))
						{
							//echo "supplier_1: ".$_SESSION['supplier_1']."<br>";
							
							
						?>	
						<script>
							
								document.getElementById("supplier_1").value = "<?php echo $_SESSION['supplier_1'] ?>";
								
					
					
						</script>		
						
						
					<?php	}
					
					
					// for product 2
						if(isset($_SESSION['cas_no_2']) && !empty($_SESSION['cas_no_2']))
						{
							//echo "cas_no_2: ".$_SESSION['cas_no_2']."<br>";
							//echo "product_name2 : ".$_SESSION['product_name_2']."<br>";
							
						?>	
						<script>
							
								document.getElementById("cas_no_2").value = "<?php echo $_SESSION['cas_no_2'] ?>";
								document.getElementById("product_2").value = "<?php echo $_SESSION['product_name_2'] ?>";
					
					
					</script>		
						
						
					<?php	}
					
						// setting for supplier_2
						if(isset($_SESSION['supplier_2']) && !empty($_SESSION['supplier_2']))
						{
							//echo "supplier_2: ".$_SESSION['supplier_2']."<br>";
							
							
						?>	
						<script>
							
								document.getElementById("supplier_2").value = "<?php echo $_SESSION['supplier_2'] ?>";
								
					
					
						</script>		
						
						
					<?php	}
						
						if(isset($_SESSION['quantity_1']) && !empty($_SESSION['quantity_1']))
						{
							//echo "quantity_1: ".$_SESSION['quantity_1']."<br>";
							
							
						?>	
						<script>
							
								document.getElementById("quantity_1").value = "<?php echo $_SESSION['quantity_1'] ?>";
								
					
					
						</script>		
						
						
					<?php	}
					
					/// setting the value of quantity_2
					
					if(isset($_SESSION['quantity_2']) && !empty($_SESSION['quantity_2']))
						{
							//echo "quantity_2: ".$_SESSION['quantity_2']."<br>";
							
							
						?>	
						<script>
							
								document.getElementById("quantity_2").value = "<?php echo $_SESSION['quantity_2'] ?>";
								
					
					
						</script>		
						
						
					<?php	}
						
						/// setting the value of price_1
					
					if(isset($_SESSION['price_1']) && !empty($_SESSION['price_1']))
						{
							//echo "price_1: ".$_SESSION['price_1']."<br>";
							
							
						?>	
						<script>
							
								document.getElementById("price_1").value = "<?php echo $_SESSION['price_1'] ?>";
								
					
					
						</script>		
						
						
					<?php	}
						
						/// setting the value of price_2
					
					if(isset($_SESSION['price_2']) && !empty($_SESSION['price_2']))
						{
							//echo "price_2: ".$_SESSION['price_2']."<br>";
							
							
						?>	
						<script>
							
								document.getElementById("price_2").value = "<?php echo $_SESSION['price_2'] ?>";
								
					
					
						</script>		
						
						
					<?php	}
						
						/// setting the value of price_2
					
					if(isset($_SESSION['remarks']) && !empty($_SESSION['remarks']))
						{
							//echo "remarks: ".$_SESSION['remarks']."<br>";
							
							
						?>	
						<script>
							
								document.getElementById("remarks").value = "<?php echo $_SESSION['remarks'] ?>";
								
					
					
						</script>		
						
						
					<?php	}
					
					?>
					
					