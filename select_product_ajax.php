




<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chemistry_india";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);


$csa = $_REQUEST['q'];
echo $csa;


$sql = "select * from product where COA_no = '".$csa."' ";

$result = mysqli_query($conn, $sql);

 <table class="table table-striped">
        <tr>
            <th></th>
        <th>COA_No.</th>
        <th>Name</th>
        <th>Supplier</th>
        </tr>
        
        <tr id="demo">
            
        </tr>
    </table>



while($row = mysqli_fetch_assoc($result))
{
    echo '
        <tr>
        <td><input type="checkbox" name="searched" value ="'.$row["COA_no"].'"></td>
            <td>'.$row['COA_no'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['supplier'].'</td>
        </tr>';
     
}