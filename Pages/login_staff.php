<?php 
    $page_title = "Login_Staff";
	include("header.inc");
    include("nav.inc");
  
 ?>
 <!-- start of main content -->
<div id="main-content">
    <h2>Login as Staff</h2>
    <form method="post" action="process_login_staff.php">
        Username:<input type="text" name="username" /><br>
        Password:<input type="password" name="password" /><br>
        <input type="submit" value="Login" />
    </form>
 </div>
 <!-- end of main content -->
