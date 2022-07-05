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

<link rel="stylesheet" type="text/css" href="equipment.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<header class="w3-container w3-padding">
  <div class="w3-center">
  <h1 class="w3-xxxlarge">Equipment</h1>
  <h5 class="w3-animate-bottom">So you can design your own workouts</h5>
  </div>
</header>

<div class="video">
	<center><iframe
	src="https://www.youtube.com/embed/qAzTEb7syBk?rel=0&autoplay=1" frameborder="0" allowfullscreen>
	</iframe></center>
</div>

<center><h1>Weights Equipment</h1></center>
<center><h5>Weight training is the best way to build strength and muscle - so we've installed a killer range of strength equipment into 
Sheffiled Fitness Centre to offer training tools for everyone from the new lifter to the bodybuilder.</h5></center>

<div class="weights">
	<p style="background-color: white; padding: 0.5rem;"><font size="5"><img src="img/bullet-point.png" align="middle" style="height: 1.5rem; 
	width: 1.5rem; margin-right: 0.5rem;">Dumbells</font></p>
	<p><font size="5"><img src="img/bullet-point.png" align="middle" style="height: 1.5rem; width: 1.5rem; margin-right: 0.5rem;">Kettlebells</font></p>
	<p style="background-color: white; padding: 0.5rem;"><font size="5"><img src="img/bullet-point.png" align="middle" style="height: 1.5rem; 
	width: 1.5rem; margin-right: 0.5rem;">Barbells</font></p>
	<p><font size="5"><img src="img/bullet-point.png" align="middle" style="height: 1.5rem; width: 1.5rem; margin-right: 0.5rem;">Squat Racks</font></p>
	<p style="background-color: white; padding: 0.5rem;"><font size="5"><img src="img/bullet-point.png" align="middle" style="height: 1.5rem; 
	width: 1.5rem; margin-right: 0.5rem;">Olympic Platforms</font></p>
	<p><font size="5"><img src="img/bullet-point.png" align="middle" style="height: 1.5rem; width: 1.5rem; margin-right: 0.5rem;">And More...</font></p>

</div>

<center><h1>Cardio Equipment</h1></center>
<center><h5>Cardiovascular exercise is key for keeping your heart healthy, but we know it isn't a one size fits all kind of workout, 
so we've made sure there are enough cardio machines to keep you busy.</h5></center>

<div class="cardio">
	<p style="background-color: white; padding: 0.5rem;"><font size="5"><img src="img/bullet-point.png" align="middle" style="height: 1.5rem; 
	width: 1.5rem; margin-right: 0.5rem;">Cross Trainers</font></p>
	<p><font size="5"><img src="img/bullet-point.png" align="middle" style="height: 1.5rem; width: 1.5rem; margin-right: 0.5rem;">Upright Bikes</font></p>
	<p style="background-color: white; padding: 0.5rem;"><font size="5"><img src="img/bullet-point.png" align="middle" style="height: 1.5rem; 
	width: 1.5rem; margin-right: 0.5rem;">Recumbent Bikes</font></p>
	<p><font size="5"><img src="img/bullet-point.png" align="middle" style="height: 1.5rem; width: 1.5rem; margin-right: 0.5rem;">Spin Bikes</font></p>
	<p style="background-color: white; padding: 0.5rem;"><font size="5"><img src="img/bullet-point.png" align="middle" style="height: 1.5rem; 
	width: 1.5rem; margin-right: 0.5rem;">Rowing Machines</font></p>
	<p><font size="5"><img src="img/bullet-point.png" align="middle" style="height: 1.5rem; width: 1.5rem; margin-right: 0.5rem;">Climbmill</font></p>
	<p style="background-color: white; padding: 0.5rem;"><font size="5"><img src="img/bullet-point.png" align="middle" style="height: 1.5rem; 
	width: 1.5rem; margin-right: 0.5rem;">And More...</font></p>

</div>

<?php
include('includes/footer.html')
?>
