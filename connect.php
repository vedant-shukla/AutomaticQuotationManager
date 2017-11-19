<?php
	$conn = mysqli_connect("localhost","root","","kavan_bhai");
	if(!$conn)
			{
				die("Connection ma locha 6");
			}
			else
			{
				echo "Connected"."<br>";
			}
?>
