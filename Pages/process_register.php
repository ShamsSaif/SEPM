<?php
	if(isset($_POST['username']))
        $username = $_POST['username'];
	if(isset($_POST['password']))
        $password = $_POST['password'];
	if(isset($_POST['firstname']))
        $firstname = $_POST['firstname'];
	if(isset($_POST['lastname']))
        $lastname = $_POST['lastname'];
	if(isset($_POST['email']))
        $email = $_POST['email'];
	$db = mysqli_connect("localhost", "root","", "sepm");
	$q = "insert into member values(null, '$username', SHA('$password'), '$firstname', '$lastname', '$email', now())";
	mysqli_query($db, $q) or die(mysqli_error($db));
	
	header("Location:index.php");
?>


