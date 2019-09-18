<?php 
    $page_title = "Order";
	include("header.inc");
    include("nav.inc");
  
 ?>
 <!-- start of main content -->
<div id="main-content">
    <h2>Order</h2>
    <form method="post" action="process_order.php">
        Username:<br>
		<input type="text" name="username" /><br>
        Firstname:<br>
		<input type="text" name="firstname" /><br>
		Lastname:<br>
		<input type="text" name="lastname" /><br>
		Email:<br>
		<input type="email" name="email" /><br>
		Pick up Address:<br>
		<input type="text" name="pick_location" /><br>
		Pick up Time:<br>
		<input type="text" name="pick_time" /><br>
		Deliver Adrress:<br>
		<input type="text" name="deliver_location" /><br>
		Deliver Time:<br>
		<input type="text" name="deliver_time" /><br>
        <br>
		<input type="submit" value="Complete Order" />
    </form>
 </div>
 <!-- end of main content -->