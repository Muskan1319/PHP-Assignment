<!Doctype html>
<html>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
        header {
            top: 0px;
            left: 0px;
            width: 100%;
            height: 50px;
        }

        body {
            min-height: 100vh;
            color: black;
            background-repeat: no-repeat;
            background-size: auto;
        }

        footer {
            top: 0px;
            left: 0px;
            width: 100%;
            height: 50px;
        }

        .error {
            color: red;
        }

        .correct {
            color: green;
        }

        .center {
            margin: auto;
            width: 50%;
            padding: 10px;
        }

        form {
            display: table;

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

        .dropdown {
            width: 230px;
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
</head>

<body>
<?php include("nav.php");
?>
<?php
error_reporting(0);

$emailErr = $unameErr = $passErr = $cpassErr = $genErr = $cityErr = $feedErr = $mobileErr= "";
if (isset($_POST['submit'])) {

    $email = input_field($_POST['email']);
    $uname = input_field($_POST['uname']);
    $mobile = input_field($_POST['mobile']);
    $pass = input_field($_POST['pass']);
    $cpass = input_field($_POST['cpass']);
    $gen = input_field($_POST['gen']);
    $city = input_field($_POST['city']);
    $feed = input_field($_POST['feed']);

    //email validation
    if (empty($email)) {
        $emailErr = "Email is required.";
    }
    //uname validation 
    if (empty($uname)) {
        $unameErr = "Name is required.";
    } else if (!preg_match("/^[a-zA-Z ]+$/", $uname)) {
        $unameErr = "Only alphabates are allowed.";
    }
    //mobile validation
    if (empty($mobile)) {
        $mobileErr = "Mobile Number is required.";
    }
    else {
    if (!preg_match("/^[6-9][0-9]{9}+$/", $mobile)) {
        $mobileErr = "Only 10 digits are allowed or else not entered in correct way.";
    }
}
    //pass validation 
    if (empty($pass)) {
        $passErr = "Password is required.";
    } else if (strlen($pass) < 8 || strlen($pass) > 24) {
        $passErr = "Password should be between 8-24 chars.";
    }
    //cpass validation 
    if (empty($cpass)) {
        $cpassErr = "Password is required.";
    } else if ($cpass != $pass) {
        $cpassErr = "Password don't match.";
    }
    //gen validation
    if (empty($gen)) {
        $genErr = "Gender is required.";
    }
    //city validation
    if (empty($city)) {
        $cityErr = "City is required.";
    }
    //feed validation
    if (empty($feed)) {
        $feedErr = "Feedback is required.";
    } else if (strlen($feed) < 20) {
        $feedErr = "Feedback should be greater than 20 chars.";
    }
    //everything correct
    if ($emailErr == "" && $unameErr == "" && $passErr == "" && $cpassErr == "" && $genErr == "" && $feedErr == "") {
        $correct = "<h2 align=center >Registered Successfully !</h2>";
      
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

    <form method="post" class="center">
        <h2 style="color:darkgreen;"><u>Contact_Us Page</u></h2>

        <span class="error"> * are required fields </span><br />
        <br />

        <div class="form-ele">
            <label for="email">Email</label>
            <input type="email" name="email" size="30" value="<?php echo $email; ?>" placeholder="Email" />
            <span class="error">* <?php echo $emailErr; ?></span>
            <br /><br />
        </div>

        <div class="form-ele">
            <label for="uname">Username</label>
            <input type="text" name="uname" value="<?php echo $uname; ?>" size="30" placeholder="Username" />
            <span class="error">* <?php echo $unameErr; ?></span>
            <br /><br />
        </div>

        <div class="form-ele">
            <label for="uname">Mobile</label>
            <input type="text" name="mobile" value="<?php echo $mobile; ?>" size="30" placeholder="Mobile Number" />
            <span class="error">* <?php echo $mobileErr; ?></span>
            <br /><br />
        </div>

        <div class="form-ele">
            <label for="pass">Password</label>
            <input type="password" name="pass" value="<?php echo $pass; ?>" size="30" placeholder="Password" />
            <span class="error">* <?php echo $passErr; ?></span>
            <br /><br />
        </div>

        <div class="form-ele">
            <label for="cpass">Confirm Password</label>
            <input type="password" name="cpass" value="<?php echo $cpass; ?>" size="30" placeholder="Confirm Password" />
            <span class="error">* <?php echo $cpassErr; ?></span>
            <br /><br />
        </div>

        <div class="form-ele">
            <label for="gen">Gender</label>
            <input type="radio" name="gen" value="Male" />Male
            <input type="radio" name="gen" value="Female" />Female
            <span class="error">* <?php echo $genErr; ?></span>
            <br /><br />
        </div>

        <div class="form-ele">
            <label for="city">Select a city</label>
            <select name="city" class="dropdown">
                <option hidden disabled selected value=""> -- Select an option -- </option>
                <option value="Bangalore">Bangalore</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Delhi">Delhi</option>
                <option value="Kolkata">Kolkata</option>
                <option value="Bhopal">Bhopal</option>
                <option value="Indore">Indore</option>
            </select>
            <span class="error">* <?php echo $cityErr; ?></span>
            <br /><br />
        </div>

        <div class="form-ele">
            <label for="feed">Feedback</label>
            <br />
            <textarea name="feed" cols="30" rows="10" noresize placeholder="Feedback"></textarea>
            <span class="error">* <?php echo $feedErr; ?></span>
            <br /><br />
        </div>

        <input type="submit" class="btn" value="Submit" name="submit" />

    </form>
    <br /><br />
    <span class="correct"><?php echo $correct; ?></span>
    <br /><br />
    <footer></footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<?php include("foot.php")?>
</html>