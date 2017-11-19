

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <style>
            table{
                
            }
            .first{
                margin-top: 50px;  
            }
            .second{
               
            }
            /* enable absolute positioning */
.inner-addon { 
    position: relative; 
}

/* style icon */
.inner-addon .glyphicon {
  position: absolute;
  padding: 10px;
  pointer-events: none;
}

/* align icon */
.left-addon .glyphicon  { left:  0px;}
.right-addon .glyphicon { right: 0px;}

/* add padding  */
.left-addon input  { padding-left:  30px; }
.right-addon input { padding-right: 30px; }
        </style>
    </head>
<body>
<div class="container">
    <!------------------search section----------------->
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 first col-centered" >
                
   <form action = "quotation_form_1.php" method = "POST">
             

            <div class="input-group" style="width:700px;height:100px;" >
         <input type="text" class="col-md-6 col-lg-6 col-sm-6 col-xs-6 first col-centered" id="value" name="value" style="height:30px"  >
         
         <button type="button" class="col-md-2 col-lg-2 col-sm-2 col-xs-2 first col-centered" onclick="search()" style="height:30px">Search</button>
                </div>
            
            </div>


	




<script>
function search() {
    var x = document.getElementById("value").value;
   
    
    
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
        
      document.getElementById("demo").innerHTML = xhttp.responseText;
        
    }
  };
  xhttp.open("GET", "select_product_ajax.php?q="+x, true);
  xhttp.send();
   
}
</script>
    
    
    
   
     <!-----------------display section-------------------------------------->
   
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 second col-centered">
       
        <?php
        echo "<br><br><br>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chemistry_india";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT COA_no,name,supplier FROM product";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
     // output data of each row      
         echo '<table class="table table-striped">
    <tr>
    <th></th>
        <th>COA_No.</th>
        <th>Name</th>
        <th>Supplier</th>
    </tr>';
while ($row = mysqli_fetch_array($result)) {
    echo '
        <tr>
        <td><input type="radio" name= "check_list1" value = "'.$row['COA_no']. " ".$row['name'].       '"></td>
            <td>'.$row['COA_no'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['supplier'].'</td>
        </tr>';

}
echo '
</table>';
     }
 else {
     echo "0 results";
}

?>

        
          </div>
     
     <!-------------------------------------------->
     
     <!----------------button---------------------->
	 
		 <div align="center" >
		 <input type="submit" value="done">
		 </div>
	 </form>	
</div>           
</body>
</html>