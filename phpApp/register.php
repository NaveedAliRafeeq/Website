<?php
include('includes/header.html')
?>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">

<header class="w3-container w3-padding">
  <div class="w3-center">
  <h1 class="w3-xxxlarge">Create an Account</h1>
  <h5 class="w3-animate-bottom">Please fill out the following to create an account</h5>
  </div>
</header>


<!-- Display body section with sticky form. -->
<form action="register.php" method="post" class="form-signin" role="form">
	<input type="text" name="first_name" size="20" value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>" placeholder="First Name"> 
	<input type="text" name="last_name" size="20" value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>" placeholder="Last Name">
	<input type="text" name="username" size="20" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>" placeholder="UserName">
	<input type="text" name="email" size="50" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" placeholder="Email Address">
	<input type="password" name="pass1" size="20" value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1']; ?>" placeholder="Password">
	<input type="password" name="pass2" size="20" value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>" placeholder="Confirm Password">
	<br>
	<div class="w3-center">
	<p><button class="btn btn-primary w3-button w3-theme" name="submit" type="submit">Register</button></p>
	</div>
</form>

<?php

if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
	require ('includes/connect_db.php');
	$errors = array();

	if ( empty( $_POST[ 'first_name' ] ) ) 	{ 
		$errors[] = 'Enter your first name.' ; 
	}
	else {
		$fn = mysqli_real_escape_string( $dbc, trim( $_POST[ 'first_name' ] ) ) ; 
	}

	if ( empty( $_POST[ 'last_name' ] ) ) 	{ 
		$errors[] = 'Enter your last name.' ; 
	}
	else {
		$ln = mysqli_real_escape_string( $dbc, trim( $_POST[ 'last_name' ] ) ) ; 
	}

	if ( empty( $_POST[ 'username' ] ) ) 	{ 
		$errors[] = 'Enter a UserName.' ; 
	}
	else {
		$un = mysqli_real_escape_string( $dbc, trim( $_POST[ 'username' ] ) ) ; 
	}

	if ( empty( $_POST[ 'email' ] ) ) 	{ 
		$errors[] = 'Enter your email address.' ; 
	}
	else {
		$e = mysqli_real_escape_string( $dbc, trim( $_POST[ 'email' ] ) ) ; 
	}

	if ( !empty($_POST[ 'pass1' ] ) )	{
		if ( $_POST[ 'pass1' ] != $_POST[ 'pass2' ] )
    	{ $errors[] = 'Passwords do not match.' ; }
    	else
    	{ $p = mysqli_real_escape_string( $dbc, trim( $_POST[ 'pass1' ] ) ) ; }
  		}
		else { $errors[] = 'Enter your password.' ; 
	}

	if ( empty( $errors ) )		{
		$q = "SELECT user_id FROM users WHERE username='$un'" ;
    	$r = @mysqli_query ( $dbc, $q ) ;
    	if ( mysqli_num_rows( $r ) != 0 ) $errors[] = 'UserName already registered. <a href="login.php">Login</a>' ;
	}

	if ( empty( $errors ) )		{
		$q = "SELECT user_id FROM users WHERE email='$e'" ;
    	$r = @mysqli_query ( $dbc, $q ) ;
    	if ( mysqli_num_rows( $r ) != 0 ) $errors[] = 'Email address already registered. <a href="login.php">Login</a>' ;
	}

	if ( empty( $errors ) ) 	{
		$q = "INSERT INTO users (first_name, last_name, username, email, pass, reg_date) VALUES ('$fn', '$ln', '$un', '$e', SHA1('$p'), NOW() )";
    	$r = @mysqli_query ( $dbc, $q ) ;
    	if ($r)
    	{ echo '<h1>Registered!</h1><p>You are now registered.</p><p><a href="login.php">Login</a></p>'; 
	}

	mysqli_close($dbc);
	include ('includes/footer.html'); 
    exit();
}
else 
  {
    echo '<h1>Error!</h1><p id="err_msg">The following error(s) occurred:<br>' ;
    foreach ( $errors as $msg )
    { 
	echo " - $msg<br>" ; 
	}
    	echo 'Please try again.</p>';
    mysqli_close($dbc);
  }  
}

include('includes/footer.html')
?>