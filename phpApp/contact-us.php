<?php
session_start();

if ( $_SESSION[ 'logged_in' ] == true ) {
  include('includes/home_header.html');
  } elseif ( $_SESSION[ 'logged_ad' ] == true ) {
  include('includes/admin_header.html');
} else {
  include('includes/header.html');
}
?>

<div class="form">
		
<?php

if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )	{
	error_reporting(0);
	if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['comments']) && !empty($_POST['telephone']) ) {
		$body = "Name: {$_POST['name']}\n\nTelephone: {$_POST['telephone']}\n\nComments: {$_POST['comments']}";
		$body = wordwrap($body, 70);
		mail('danielkali98@outlook.com', 'Contact Form Submission', $body, "From: {$_POST['email']}");
		echo '<p><em>Thank you for contacting Sheffield Fitness Centre. We will respond to your enquiry in 48 hours.</em></p>';
		$_POST = array();
		}
	else {
		echo '<p style="font-weight: bold; color: #C00">Please fill out the form completely.</p>';
		}
	}
?>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">

<header class="w3-container w3-padding">
  <div class="w3-center">
  <h1 class="w3-xxxlarge">Contact Us</h1>
  <h5 class="w3-animate-bottom">Please fill out this form to contact Sheffield Fitness Centre</h5>
  </div>
</header>

<form action="contact-us.php" method="post" class="form-signin" role="form">
<table width="60%"> 
	<tr><td>Name: </td><td><input type="text" name="name" size="30" maxlength="60" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>" /></td></tr>
	<tr><td>Email Address: </td><td><input type="text" name="email" size="30" maxlength="80" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" /></td></tr>
	<tr><td>Telephone: </td><td><input type="tel" name="telephone" size="30" maxlength="80" value="<?php if (isset($_POST['telephone'])) echo $_POST['telephone']; ?>" /></td></tr>
	<tr><td>Enquiry: </td><td><textarea name="comments" rows="5" cols="30"><?php if (isset($_POST['comments'])) echo $_POST['comments']; ?></textarea></td></tr>
</table>
	<div class="w3-center">
	<input class="btn btn-primary w3-button w3-theme" type="submit" name="submit" value="Submit" />
	</div>
</form>
</div>		
		
<?php
include('includes/footer.html')
?>
