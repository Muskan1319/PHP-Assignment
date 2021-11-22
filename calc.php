<!DOCTYPE html>
<html>
<head>
	<style>
		h1{
			border:2px solid green;
			color:green;
			text-align:center;

		}
		form{
			margin-top:150px;
			margin-left:450px;
			margin-bottom:30px;
		}
		table{
			font-size:30px;
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
ini_set('display_errors',0);
 
if( isset( $_REQUEST['calculate'] ))
{
$operator=$_REQUEST['operator'];
$n1 = $_REQUEST['first_value'];
$n2 = $_REQUEST['second_value'];
 
if($operator=="+")
{
$res= $n1+$n2;
}
if($operator=="-")
{
$res= $n1-$n2;
}
if($operator=="*")
{
$res =$n1*$n2;
}
if($operator=="/")
{
$res= $n1/$n2;
}
 
if($_REQUEST['first_value']==NULL || $_REQUEST['second_value']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter Correct values.\");</script>";
}
}
?>
 
<h1>CALCULATOR</h1>
<form>
<table style="border:groove  red;">
 
<tr>
<td style="background-color:green; color:black; font-family:'Times New Roman'">Enter Number</td>
<td colspan="1">
<input name="first_value" type="text" style="color:red"/></td>
</tr>
 
<tr>
<td style="color:red; font-family:'Times New Roman'">Select Operator</td>
<td>
<select name="operator" style="width: 63px">
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select></td>
</tr>
 
<tr>
<td style="background-color:green; color:black; font-family:'Times New Roman'">Enter Number</td>
<td class="auto-style5">
<input name="second_value" type="text"  style="color:red"/></td> 
</tr>
 
<tr>
<td></td>
<td><input type="submit" name="calculate" value="Calculate" style="color:wheat;background-color:blue;" /></td>	 
</tr>
 
<tr>
<td style="background-color:green;color:black">Output = </td>
<td style="color:darkblue"><?php echo $res;?></td>
</tr>	
 
</table>
</form>
 
</body>
<?php include("foot.php")?>
</html>