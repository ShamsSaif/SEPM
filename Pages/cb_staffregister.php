<html>
<head>
<title>Staff Register</title>
</head>
<body>

<div style="background-color:DarkSlateGray">
      <br></br>
      <font color="DarkCyan"><h2>Register Staff Record</h2></font>
      <br></br>
 

  <form action="cb_insertdatastaff.php" method="post">
  <div style="background-color:LightSteelBlue">
  <br></br>
  <font color="DarkCyan"><b>Staff ID:</b></font> <input type="text" name = "staff_id" Required /><br/>
  <br/>
  <font color="DarkCyan"><b>User Name:</b></font> <input type="text" name = "username" Required /><br/>
  <br/>
  <font color="DarkCyan"><b>Password:</b></font> <input type="text" name = "password" Required /><br/>
  <br/>
  <font color="DarkCyan"><b>First Name:</b></font> <input type="text" name = "firstname" Required /><br/>
  <br/>
  <font color="DarkCyan"><b>Last Name:</b></font> <input type="text" name = "lastname" Required /><br/>
  <br/>
  <font color="DarkCyan"><b>Email:</b></font> <input type="email" name = "email" Required /><br/>
  <br/>
  
  
  <font color="DarkCyan"><b>Position:</b></font> <input type="text" name = "position" Required pattern="Manager|Staff"/><br/>
  <br/>
  <br></br>
  <input type="submit" value="ADD STAFF RECORD"/>
  <br></br>
  </form>
  
 </body>
</html>