<?php
session_start();
$_SESSION[ 'logged_in' ] = false;
$_SESSION[ 'logged_ad' ] = false;

if ( $_SESSION[ 'logged_in' ] == true ) {
  include('includes/home_header.html');
  } elseif ( $_SESSION[ 'logged_ad' ] == true ) {
  include('includes/admin_header.html');
} else {
  include('includes/header.html');
}
?>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

<header class="w3-container w3-padding">
  <div class="w3-center">
  <h1 class="w3-xxxlarge">Sheffield Fitness Centre</h1>
  <h5 class="w3-animate-bottom">Welcome to the Sheffield Fitness Centre</h5>
  </div>
</header>

<img src="img/gym1.jpg" style="margin: 1rem; margin-left: auto; margin-right: auto;">

<center><h1>Welcome</h1></center>
	
<div class="w3-container">
	<center><h4>Here at the Sheffield Fitness Centre we welcome people of all shapes and sizes. So, whether you’re in fine physical fettle but want to maintain your fitness, or have never stepped foot in a gym before – we can help. Our gym is also contract-free allowing you to leave as well if thats what you want, so sign up today.</h4></center>
	<br>
	<center><h4>There’s no judgement here. So do up your laces and get set to find your fit in a style that suits you.</h4></center>
	<br>
	<center><h4>So come and find your fit with us.</h4></center>
	<br>
	<center><h4>If you're pleased with our services please leave a good review so that others can see</h4></center>
	<br>
</div>

<div class="w3-container w3-padding w3-center">
  <h1 class="w3-xxxlarge">Reviews</h1>
  <h5>Leave us a review for everyone to see</h5>
</div>

<div class="powr-reviews" id="68f85d1c_1585709644"></div><script src="https://www.powr.io/powr.js?platform=html"></script>

<?php
include('includes/footer.html')
?>
