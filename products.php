
<!Doctype html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php include("nav.php");?>
<h1 style="color:red;  text-align:center; padding-top:10px; padding-bottom:10px;"><u>SHOES COLLECTION</u></h1>
<section class="bg-light">
           <div class="container text-center">
              <div class="row">
<?php
$products=[
    ["id"=>1, "pname"=>"Beautiful heels", "price"=>"Rs.2050","image"=>"IMG1.jpg"],
    ["id"=>2, "pname"=>"Red coloured shoes", "price"=>"Rs.1000","image"=>"IMG10.jpg"],
    ["id"=>3, "pname"=>"Mutli-coloured shoes", "price"=>"Rs.1040","image"=>"IMG4.jpg"],
];
foreach($products as $p){
         echo"
            <div class='col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto'>
              <div class='card' style='width:18rem;'>
                  <img src='IMG/".$p['image']." ' class='card-img img-fluid'/>
                  <div class='card-body'>
                      <h5 class='card-title' style='color:green'>".$p['pname']."</h5>
                      <p class='card-text' style='color:red;'>".$p['price']."</p>
                      <a href='#' class='btn btn-primary'><i class='fa fa-shopping-cart'>&nbsp;&nbsp;</i>ADD TO CART</a>
                  </div>
              </div>   
            </div>
            <div class='col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto'>
                <div class='card' style='width:18rem;'>
                    <img src='IMG/".$p['image']." ' class='card-img img-fluid'/>
                    <div class='card-body'>
                        <h5 class='card-title' style='color:green'>".$p['pname']."</h5>
                        <p class='card-text' style='color:red;'>".$p['price']."</p>
                        <a href='#' class='btn btn-primary'><i class='fa fa-shopping-cart'>&nbsp;&nbsp;</i>ADD TO CART</a>
                    </div>
                </div>   
              </div>
              <div class='col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto'>
                <div class='card' style='width:18rem;'>
                    <img src='IMG/".$p['image']."'class='card-img img-fluid'/>
                    <div class='card-body'>
                        <h5 class='card-title' style='color:green'>".$p['pname']."</h5>
                        <p class='card-text' style='color:red;'>".$p['price']."</p>
                        <a href='#' class='btn btn-primary'><i class='fa fa-shopping-cart'>&nbsp;&nbsp;</i>ADD TO CART</a>
                    </div>
                </div>   
              </div> ";
}
             
        ?>
     </div>
</div>
</section>
             
<?php include("foot.php");?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>