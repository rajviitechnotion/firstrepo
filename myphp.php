<html>

<body>

	<?php
	/* $name = $email = $number = $comment = $gender = "";
if($_SERVER["REQUEST_METHOD"=="POST"]){
	$name = $_POST["name"];
	$email = $_POST["email"];
	$number = $_POST["number"];
	$comment = $_POST["comment"];
	$gender = $_POST["gender"];
} */
	echo "<span style='color:red'> " . $_POST["name"] . "</span>";
	echo "<br/>";
	echo $_POST["email"];
	echo "<br/>";
	if ($_POST["pass"] == 123) {
		echo "True";
	}
	echo "<br/>";
	echo $_REQUEST["number"];
	echo "<br/>";
	echo $_POST["comment"];
	echo "<br/>";
	echo $_POST["gender"];
	echo "<br/>";
	if (isset($_REQUEST['check1'])) {
		echo $_REQUEST["check1"] . "<br>";
	}
	echo $_REQUEST["check2"] . "<br>";
	echo $_REQUEST["check3"];

	//$new_date = date('d-m-Y', strtotime($_REQUEST["d"]));
	//echo $new_date . "<br>";
	//
	if (isset($_REQUEST["city"])) {
		foreach ($_REQUEST["city"] as $place) {
			echo $place . "<br>";
		}
	}
	echo "<br/>";
	/*Welcome <?php echo $_POST["fname"]; ?><br>
Your email address is: <?php echo $_POST["lname"]; ?> */
	// fsfs
	?>
</body>

</html>