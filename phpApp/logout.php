<?php 
session_start() ;
if ( !isset( $_SESSION[ 'user_id' ] ) ) { 
	require ( 'login_tools.php' ) ; load() ; 
}

$page_title = 'Goodbye' ;
include ( 'includes/header.html' ) ;

$_SESSION = array();
session_destroy();

echo '<h1>Goodbye!</h1><p>You are now logged out.</p><p>See you soon. Ta-ra! Adios! </p>' ;
include ( 'includes/footer.html' ) ;
?>

