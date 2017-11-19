<?php
include("connect.php")
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

<style>
.heading
{
	font-size:40px;	
	color: black;
}
.hr
{
	border: 1px solid #800000;
	width:40%;
	margin: 0 auto;
}
.between
{
	height:10%;
}
.login
{
	height:50%;
	width:40%;
    padding-top:3%;
	margin:auto;
	background-color:white;
	box-shadow: 0 0 2px #000
}
.username, .password
{
	margin-left:15%;
	font-size:20px;
	font-color:black;
}

.user, .pass,.btn
{
	width:50%;
	margin-left:15%;
}
.btn
{
	
}


</style>

<body>


<div class="container">

<form action="#" method="post">

<div class= "heading text-center"> Login </div>
<hr class="hr">

<div class="between"></div>

<div class="login">
<div class="username ">Username</div>

<input type="text" class="form-control user" name="username" id="username" required >
<br>
<div class="password ">Password</div>

<input type="password" class="form-control pass" name="password" id="password" required >
<br>
<button type = "submit"  class= "btn btn-primary" name="login" id="login" >Login</button>
</form>

</div>
</div>
</body>
<?php

if(isset($_POST['login']))
{
$sql1 = "SELECT username,password from employee_record WHERE username = '".$_POST['username']."' AND password = '".$_POST['password']."' ";
  $pass =  mysqli_query($conn,$sql1);
  
  if(mysqli_num_rows($pass)>0)
  {
	  header('LOCATION: before_quotation.php');
  }
 else
 {
	 
	 echo "<script type='text/javascript'>var x = confirm('Please Enter Correct User-Name n Password')</script>" ;
  }
}
?>	

</html>