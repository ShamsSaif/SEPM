<?php 
    $page_title="Home";
	include("header.inc");
    include("nav.inc");
  
 ?>
 
 <h2>List of Staff</h2>
 <?php 


    $db = mysqli_connect("localhost", "root","", "sepm")  or die(mysqli_error($db));
	$q = "SELECT * from staff";
	$results = mysqli_query($db, $q) or die(mysqli_error($db));
	
    echo "<table border='1'>";
	echo "<tr><td>staff_id</td><td>username</td><td>password</td><td>firstname</td><td>lastname</td><td>email</td><td>position</td><td>reg_date</td></tr>";
    while($row = mysqli_fetch_array($results)){
		echo "<tr><td>{$row['staff_id']}</td><td>{$row['username']}</td><td>{$row['password']}</td><td>{$row['firstname']}</td><td>{$row['lastname']}</td><td>{$row['email']}</td><td>{$row['position']}</td><td>{$row['reg_date']}</td></tr>";
		
		
    }
	echo"</table>";
 
?>

 <h2>List of User</h2>
 <?php 


    $db = mysqli_connect("localhost", "root","", "sepm")  or die(mysqli_error($db));
	$q = "SELECT * from member";
	$results = mysqli_query($db, $q) or die(mysqli_error($db));
	
    echo "<table border='1'>";
	echo "<tr><td>user_id</td><td>username</td><td>password</td><td>firstname</td><td>lastname</td><td>email</td><td>reg_date</td></tr>";
    while($row = mysqli_fetch_array($results)){
		echo "<tr><td>{$row['user_id']}</td><td>{$row['username']}</td><td>{$row['password']}</td><td>{$row['firstname']}</td><td>{$row['lastname']}</td><td>{$row['email']}</td><td>{$row['reg_date']}</td></tr>";
		
		
    }
	echo"</table>";
 
 ?>
 