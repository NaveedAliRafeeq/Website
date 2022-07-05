<?php 

if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ){
	require ('includes/connect_db.php');
	require ( 'login_tools.php' );
	list ( $check, $data ) = validate ( $dbc, $_POST[ 'email' ], $_POST[ 'pass' ] );

	if ( $check )  {
    	session_start();
    	$_SESSION[ 'username' ] = $data['username'];
    	$_SESSION[ 'first_name' ] = $data['first_name'];
    	$_SESSION[ 'last_name' ] = $data['last_name'];
		$_SESSION[ 'admin' ] = $data['admin'];
    	load ( 'home.php' ) ;
  	}
	else { $errors = $data; } 
  		mysqli_close( $dbc ) ; 
  	}

include ( 'login.php' ) ;
?>
