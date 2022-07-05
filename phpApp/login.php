<?php
session_start();
$_SESSION[ 'logged_in' ] = false;
$_SESSION[ 'logged_ad' ] = false;

include ( 'includes/header.html' );

if ( isset( $errors ) && !empty( $errors ) ) {
 	echo '<p id="err_msg">Oops! There was a problem:<br>' ;
 	foreach ( $errors as $msg ) { echo " - $msg<br>" ; }
 	echo 'Please try again or <a href="register.php">Register</a></p>' ;
}
?>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">

<header class="w3-container w3-padding">
  <div class="w3-center">
  <h1 class="w3-xxxlarge">Login</h1>
  <h5 class="w3-animate-bottom">Please enter your email address and password to login</h5>
  </div>
</header>

<!-- Display body section. -->
<form action="login_action.php" method="post" class="form-signin" role="form">

<input type="text" name="email" placeholder="Email Address">
<input type="password" name="pass"  placeholder="Password">
<br>
<div class="w3-center">
<button class="btn btn-primary w3-button w3-theme" name="submit" type="submit">Login</button>
<br>
<br>
<small><a href="password.php">Change Password</a></small>
</div>
</form>

<?php
include ( 'includes/footer.html' ) ;
?>