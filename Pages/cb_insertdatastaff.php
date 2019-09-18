<html>
<head>
<title>PHP Test</title>
</head>
<body>

<!-- 
// Add Staff Records
  <form action="insert.php" method="post">
  Staff ID: <input type="text" name = "StaffID" /><br/>
  <br/>
  First Name: <input type="text" name = "FirstName" /><br/>
  <br/>
  Last Name: <input type="text" name = "LastName" /><br/>
  <br/>
  Create Date: <input type="text" name = "CreateDate" /><br/>
  <br/>
  Join Date: <input type="text" name = "JoinDate" /><br/>
  <br/>
  Termination Date: <input type="text" name = "TerminationDate" /><br/>
  <br/>
  Position: <input type="text" name = "Position" /><br/>
  <br/>
  <input type="submit" />
  </form>
 -->
  
<?php 

//echo '<p>Staff Details</p>'; 

$user = "root";
$pass = "";
$db = "sepm";

 $dbconn = new mysqli("localhost", $user, $pass, $db);
  
  if ($dbconn->connect_error) {
    die("ERROR: Unable to connect: " . $dbconn->connect_error);
  } 
  
  // Insert Data to Database
  
  $staff_id = $dbconn->real_escape_string($_POST['staff_id']);
  $username = $dbconn->real_escape_string($_POST['username']);
  $password = $dbconn->real_escape_string($_POST['password']);
  
  $firstname = $dbconn->real_escape_string($_POST['firstname']);
  $lastname = $dbconn->real_escape_string($_POST['lastname']);
  $email = $dbconn->real_escape_string($_POST['email']);
  $position = $dbconn->real_escape_string($_POST['position']);
  
  /*if (is_null($_POST['TerminationDate'])){
      $TerminationDate=NULL;
  }
  else
  {
      $TerminationDate = $dbconn->real_escape_string($_POST['TerminationDate']);
  }
  */
  $Position = $dbconn->real_escape_string($_POST['Position']);

  $query = "INSERT INTO staff (staff_id, username, password, ,firstname, lastname, position, reg_date)
            VALUES ('{$staff_id}','{$username}','{$password}','{$firstname}','{$lastname}','{$position}'";
  
  //$dbconn->query($query);
  if(mysqli_query($dbconn, $query)){
      echo "New Staff details has added successfully.";
  } else{
      echo "Error Message: executation failed $query. " . mysqli_error($dbconn);
  }
    
  $dbconn->close();

?>
  
 </body>
</html>