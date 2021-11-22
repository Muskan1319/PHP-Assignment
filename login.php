<!Doctype html>
<html>
    <title>Login</title>
<head>
    <style>
        
          body {
           
            min-height: 100vh;
            color: black;
            background-repeat: no-repeat;
            background-size: auto;
        }

       .error {
            color: red;
        }

        .correct {
            color: green;
        }
        form {
            display: table;
            box-sizing:border-box;
            border:1px solid black;
            margin-top:100px;
            margin-left:450px; 
            padding: 30px 30px 30px 30px;
            margin-bottom:30px;
          
        }

        .form-ele {
            display: table-row;
        }

        .form-ele label {
            display: table-cell;
        }

        .form-ele input {
            display: table-cell;
        }

        .btn {
            border-radius: 0.25rem;
            background-color: #198754;
            border-color: #198754;
            color: #fff;
            font-weight: 400;
            line-height: 1.5;
            vertical-align: middle;
            padding: .375rem .75rem;
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
error_reporting(0);
$email=$pass=" ";
if (isset($_POST['submit'])) {

    $email = input_field($_POST['email']);
    $pass = input_field($_POST['pass']);

    
    if (empty($email)) {
        $emailErr = "Email is required.";
    }

     
     if (empty($pass)) {
        $passErr = "Password is required.";
    } 
    $log=[
        ["email"=>"muskan@gmail.com","pass"=>"muskan123"],
        ["email"=>"muskan123@gmail.com","pass"=>"12345"],
        ["email"=>"saket@123gmail.com","pass"=>"saket123"],
        ["email"=>"tanu@gmail.com","pass"=>"tanu123"]
    ];

    foreach($log as $i)
    {
        if(empty($email) && empty($pass))
        {
            $emailErr="Email is required";
            $passErr="Password is required.";
            break;
        }
        else if(empty($pass)){
            $passErr="Password is required.";
        }
        else if($email ==$i['email'] && $pass==$i['pass']){
            echo '<script>alert("login successfully")</script>';
            break;
        }
        else{
            $emailErr="Incorrect email!!";
            $passErr="Incorrect Password!!";
        }
    }
}
function input_field($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
  <h2 style="color:darkgreen; text-align:center"><u>Login Page</u></h2>
 <form method="post" class="center">
       <span class="error"> * Fields are required </span><br />
        <br />

        <div class="form-ele">
            <label for="email">Email</label>
            <input type="email" name="email" size="30" value="<?php echo $email; ?>" placeholder="Email" />
            <span class="error">* <?php echo $emailErr; ?></span>
            <br /><br />
        </div>

        <div class="form-ele">
            <label for="pass">Password</label>
            <input type="password" name="pass" value="<?php echo $pass; ?>" size="30" placeholder="Password" />
            <span class="error">* <?php echo $passErr; ?></span>
            <br /><br />
        </div>

        <input type="submit" class="btn" value="Login" name="submit" />

        </form>
        <br /><br />
        <span class="correct"><?php echo $correct; ?></span>
        <br /><br />
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<?php include("foot.php")?>
</html>