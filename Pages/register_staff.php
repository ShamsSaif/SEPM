<?php 
    $page_title = "Staff Register";
	include("header.inc");
    include("nav.inc");
  
 ?>
<div id="main-content">
        <h2>Register as a New Staff</h2>
        <form method="post" action="process_register_staff.php">
			<table>
			 
            <tr>
				<td>Username </td><td><input type="text" name="username" /></td>
			</tr>
            <tr>
				<td>Password </td><td><input id="psw" type="password" name="password" /></td>
			</tr>
            <tr>
				<td>Firstname </td><td><input type="text" name="firstname" /></td>
			</tr>
			<tr>
				<td>Lastname </td><td><input type="text" name="lastname" /></td>
			</tr>
			<tr>
				<td>Email </td><td><input type="email" name="email" /></td>
			</tr>
			<tr>
				<td>Position </td><td><input type="text" name="position" /></td>
			</tr>
			<tr>
				<td>&nbsp;</td><td><input type="submit" value = "Register" /></td>
			</tr>
			</table>
			<p>
				Already a member? <a href="login_staff.php">Sign in</a>
			</p>
        </form>
 
 </div>