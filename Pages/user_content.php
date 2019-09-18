<!DOCTYPE html>
<?php 
    $page_title = "Profile";
    include("header.inc");
    include("nav.inc");
  
 ?>

<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
		
        header("Location:login.php");
        exit(0);
    }
    

?>


<body>
    <div id="user">
	<h2>Welcome <?php print $_SESSION['username']; ?>. This is your profile</h2>
	
	
<?php
	
    if(isset($_SESSION['username']))
	{
		
		$username = $_SESSION['username'];
		
		$db = mysqli_connect("localhost", "root","", "sepm")  or die(mysqli_error($db));
		
		$q = "SELECT * from member WHERE username='$username'";
		
		
		
		$results = mysqli_query($db,$q) or die(mysqli_error($db));
		
		
		// Form with updated data
		if ($db->connect_error) {
			die("ERROR: Unable to connect: " . $db->connect_error);
		}
		
		

		if ($result = $db->query($q)) {
    
		while ($row = $result->fetch_assoc()) {
			$user_id = $row["user_id"];
			$username = $row["username"];
			$password = $row["password"];
			$firstname = $row["firstname"];
			$lastname = $row["lastname"];
			$email = $row["email"];
			$reg_date = $row["reg_date"];
        
        
    }
    
    $result->free();
	}

$db->close();
		
        
		
  
    

?>


<?php
	} else die ("You need to specify a username!")
?>
	<form action="process_user_update.php" method="post">
	<div style="background-color:LightSteelBlue">
	<br></br> 
	<font color="DarkCyan"><b>User ID:</b></font> <input type="text" name = "UserID" value = "<?php echo $user_id; ?> " readonly/><br/>
	<br/>
	<font color="DarkCyan"><b>UserName:</b></font> <input type="text" name = "UserName" value = "<?php echo $username; ?> " readonly/><br/>
	<br/>
	<font color="DarkCyan"><b>Password:</b></font> <input type="text" name = "Password" value = "<?php echo $password; ?> " readonly/><br/>
	<br/>
	<font color="DarkCyan"><b>First Name:</b></font> <input type="text" name = "FirstName" value = "<?php echo $firstname; ?>"/><br/>
	<br/>
	<font color="DarkCyan"><b>Last Name:</b></font> <input type="text" name = "LastName" value = "<?php echo $lastname; ?>" /><br/>
	<br/>
	<font color="DarkCyan"><b>Email:</b></font> <input type="email" name = "Email" value = "<?php echo $email; ?> " readonly/><br/>
	<br/>
	<font color="DarkCyan"><b>RegDate:</b></font> <input type="text" name = "RegDate" value = "<?php echo $reg_date; ?> " readonly/><br/>
	<br/>
	
	<br/>
  
	</div> 
	<br></br>
	<input type="submit" value="UPDATE USER PROFILE"/>
	<br></br>
	</form>

	</div>
</body>


