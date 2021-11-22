<!Doctype html>
<html>
<head>
<style>
.carousel-inner img {
  width: 100%;
  height: 660px;
  border:1px solid black;
}

</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php include("nav.php");
?>
<?php
echo" 

<div id='demo' class='carousel slide' data-ride='carousel'>

<ul class='carousel-indicators'>
  <li data-target='#demo' data-slide-to='0' class='active'></li>
  <li data-target='#demo' data-slide-to='1'></li>
  <li data-target='#demo' data-slide-to='2'></li>
</ul>

<div class='carousel-inner'>
  <div class='carousel-item active'>
    <img src='IMG/RUN.jpg' alt='Los Angeles' width='1100' height='500'>
    <div class='carousel-caption'>
    <h3 style='color:black;'>RUNNING</h3>
    <p style='color:black;'>Love it! Respect it! Challenge it!</p>
  </div>   
  </div>
  <div class='carousel-item'>
    <img src='IMG/s2.jpg' alt='Chicago' width='1100' height='500'>
    <div class='carousel-caption'>
    <h3 style='color:black;'>Badminton</h3>
    <p style='color:black;'>Keep Calm And Play Badminton!</p>
  </div> 
  </div>
  <div class='carousel-item'>
    <img src='IMG/s4.webp' alt='New York' width='1100' height='500'>
    <div class='carousel-caption'>
    <h3 style='color:black;'>Basketball</h3>
    <p style='color:black;'>Keep Calm And Swish On</p>
  </div> 
  </div>
</div>

<!-- Left and right controls -->
<a class='carousel-control-prev' href='#demo' data-slide='prev'>
  <span class='carousel-control-prev-icon'></span>
</a>
<a class='carousel-control-next' href='#demo' data-slide='next'>
  <span class='carousel-control-next-icon'></span>
</a>
</div>";
?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<?php include("foot.php")?>
</html>
