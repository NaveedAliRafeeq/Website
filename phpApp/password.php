<?php 
include ('includes/header.html');
?>

<div class="container">         
      <div class="row">
	  <div class="span3">                  
        </div>
        <div class="span6">
         <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	require ('includes/connect_db.php');
	$errors = array();
	
	if (empty($_POST['email'])) {
		$errors[] = 'You forgot to enter your email address.';
	} else {
		$e = mysqli_real_escape_string($dbc, trim($_POST['email']));
	}
	
	if (empty($_POST['pass'])) {
		$errors[] = 'You forgot to enter your current password.';
	} else {
		$p = mysqli_real_escape_string($dbc, trim($_POST['pass']));
	}
	
	if (!empty($_POST['pass1'])) {
		if ($_POST['pass1'] != $_POST['pass2']) {
			$errors[] = 'Your new password did not match the confirmed password.';
		} else {
			$np = mysqli_real_escape_string($dbc, trim($_POST['pass1']));
		}
	} else {
		$errors[] = 'You forgot to enter your new password.';
	}
	
	if (empty($errors)) { 
		
		$q = "SELECT user_id FROM users WHERE (email='$e' AND pass=SHA1('$p') )";
		$r = @mysqli_query($dbc, $q);
		$num = @mysqli_num_rows($r);
		if ($num == 1) { 	
			
			$row = mysqli_fetch_array($r, MYSQLI_NUM);
			
			$q = "UPDATE users SET pass=SHA1('$np') WHERE user_id=$row[0]";		
			$r = @mysqli_query($dbc, $q);
			
			if (mysqli_affected_rows($dbc) == 1) { // If it ran OK.
				
				echo '<h1>Thank you!</h1>
				<p>Your password has been updated. Now you can login</p><p><br /></p>';	

			} else { 
				
				echo '<h1>System Error</h1>
				<p class="error">Your password could not be changed due to a system error. We apologize for any inconvenience.</p>'; 				
				echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
			}
			mysqli_close($dbc); 

			
			include ('includes/footer.html'); 
			exit();
				
		} else { 
			echo '<h1>Error!</h1>
			<p class="error">The email address and password do not match those on file.</p>';
		}

	} else { 
		echo '<h1>Error!</h1>
		<p class="error">The following error(s) occurred:<br />';
		foreach ($errors as $msg) { 
			echo " - $msg<br />\n";
		}
		echo '</p><p>Please try again.</p><p><br /></p>';
	} 
	mysqli_close($dbc); 	
} 
?>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">

<center><h1>Reset Your Password</h1></center>
<form action="password.php" method="post" class="form-signin" role="form">
	<input type="text" name="email" size="20" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" placeholder="Email address" />
	<input type="password" name="pass" size="10" maxlength="20" value="<?php if (isset($_POST['pass'])) echo $_POST['pass']; ?>" placeholder="Current Password" />
	<input type="password" name="pass1" size="10" maxlength="20" value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1']; ?>" placeholder="New Password" />
	<input type="password" name="pass2" size="10" maxlength="20" value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>" placeholder="Confirm New Password"  />
	<div class="w3-center">
	<br>
	<p><button class="btn btn-primary w3-button w3-theme" name="submit" type="submit">Reset Password</button></p>
	</div>
</form>
 </div>
        <div class="span3">                    
        </div>
      </div>
      <hr>

<?php 
include ('includes/footer.html'); 
?>