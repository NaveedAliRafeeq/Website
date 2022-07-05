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

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<body>

<header class="w3-container w3-padding">
  <div class="w3-center">
  <h1 class="w3-xxxlarge">Memberships</h1>
  <h5 class="w3-animate-bottom">Different Memberships Because Every Member Is Different</h5>
  </div>
</header>

<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>Morning</h3><br>
  <i class="fa  fa-desktop w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>For all you early birds</p>
  <p>Access in the early hours</p>
  <p>From 6:00 am to 12 pm</p>
  <p>Only £10.00 a month!</p>
  <br>
  <a class="w3-button w3-theme">Buy Membership</a>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>Diamond</h3><br>
  <i class="fa fa-diamond w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>For the full Gym experience</p>
  <p>Access any time</p>
  <p>From open to close</p>
  <p>Only £20.00 a month!</p>
  <br>
  <a class="w3-button w3-theme">Buy Membership</a>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>Evening</h3><br>
  <i class="fa fa-css3 w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>For all you after workers</p>
  <p>Access in the evening hours</p>
  <p>From 5:00 pm to 11 pm</p>
  <p>Only £15.00 a month!</p>
  <br>
  <a class="w3-button w3-theme">Buy Membership</a>
  </div>
</div>
</div>

</body>

<?php
include('includes/footer.html')
?>
