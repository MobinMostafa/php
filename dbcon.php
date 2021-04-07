<?php

$server = "localhost";
$user = "root";
$password ="";
$db = "signup";

$con = mysqli_connect($server,$user,$password,$db);

if($con){

	?>

	<script>
		alert("connection successfully");
	</script>

	<?php
} else{
		?>

	<script>
		alert("connection error");
	</script>

	<?php
}

?>