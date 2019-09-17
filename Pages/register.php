<?php 
    $page_title = "Login";
	include("header.inc");
    include("nav.inc");
  
 ?>
 <!-- start of main content -->
 <div id="main-content">
        <h2>Register</h2>
        <form method="post" action="process_register.php">
			<table>
            <tr>
				<td>Username</td><td><input type="text" name="username" /></td>
			</tr>
            <tr>
				<td>Password</td><td><input id="psw" type="password" name="password" /></td>
			</tr>
            <tr>
				<td>Firstname</td><td><input type="text" name="firstname" /></td>
			</tr>
			<tr>
				<td>Lastname</td><td><input type="text" name="lastname" /></td>
			</tr>
			<tr>
				<td>Email</td><td><input type="email" name="email" /></td>
			</tr>
			<tr>
				<td>&nbsp;</td><td><input type="submit" value = "Register" /></td>
			</tr>
			</table>
			<p>
				Already a member? <a href="login.php">Sign in</a>
			</p>
        </form>
 
 </div>
 <!-- end of main content -->
