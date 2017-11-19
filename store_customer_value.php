<?php
session_start();
?>


<?php

$remarks = $_REQUEST['q'];
$_SESSION['customer_name'] = $remarks;
echo " ";



?>