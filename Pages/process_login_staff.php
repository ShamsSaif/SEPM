<?php
	if(isset($_POST['username'])) $username = $_POST['username'];
	if(isset($_POST['password'])) $password = $_POST['password'];
	
	$db = mysqli_connect("localhost", "root","", "sepm")  or die(mysqli_error($db));
	$q = "select * from staff where username='$username' and password=SHA('$password')";
	$results = mysqli_query($db, $q) or die(mysqli_error($db));
    
    if(mysqli_num_rows($results) > 0)
    {
        session_start();
        $_SESSION['username'] = $username;
        header("Location:staff_content.php");
        exit(0);
        
    } else
    {
		
		header("Location:error_login.php");

        exit(0);
    }
	
	header("Location:register.php");
?>