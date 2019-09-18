<?php
	if(isset($_POST['username']))
        $username = $_POST['username'];
	if(isset($_POST['firstname']))
        $firstname = $_POST['firstname'];
	if(isset($_POST['lastname']))
        $lastname = $_POST['lastname'];
	if(isset($_POST['email']))
        $email = $_POST['email'];
	if(isset($_POST['pick_location']))
        $pick_location = $_POST['pick_location'];
	if(isset($_POST['pick_time']))
        $pick_time = $_POST['pick_time'];
	if(isset($_POST['deliver_location']))
        $deliver_location = $_POST['deliver_location'];
	if(isset($_POST['deliver_location']))
        $deliver_location = $_POST['deliver_location'];
	$db = mysqli_connect("localhost", "root","", "sepm");
	$q = "insert into orders values(null, '$username', '$firstname', '$lastname', '$email', '$pick_location', '$pick_time', '$deliver_location', '$deliver_time', now())";
	mysqli_query($db, $q) or die(mysqli_error($db));
	
	header("Location:index.php");
?>