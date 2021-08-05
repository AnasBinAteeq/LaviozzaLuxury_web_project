<?php
session_start();
error_reporting(0);
include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{   
    // DATA FROM FORM
	$_SESSION['res_name'] = $_POST['res_name'];
	$_SESSION['res_contactno'] = $_POST['res_contactno'];
	$_SESSION['res_email'] = $_POST['res_email'];
	$_SESSION['res_cnic'] = $_POST['res_cnic'];

	$_SESSION['guests'] = $_POST['guests'];
	$_SESSION['res_from'] = $_POST['res_from'];
	$_SESSION['res_to'] = $_POST['res_to'];
	$_SESSION['rooms'] = $_POST['rooms'];

	$_SESSION['room1type'] = $_POST['room1type'];
	$_SESSION['room2type'] = $_POST['room2type'];
	$_SESSION['room3type'] = $_POST['room3type'];
    
    // UNIQUE ID GENERATION
	$_SESSION['booking_id'] = idgen(5); //function available in functions.php

    // PRICE FETCHING FROM DATABASE using self defined fetch function (available in functions.php)
	$price1="SELECT * FROM `roominfo` WHERE `roomtype` LIKE '".$_SESSION['room1type']."'";
	$price2="SELECT * FROM `roominfo` WHERE `roomtype` LIKE '".$_SESSION['room2type']."'";
	$price3="SELECT * FROM `roominfo` WHERE `roomtype` LIKE '".$_SESSION['room3type']."'";

	$_SESSION['room1price']= fetch($conn,$price1,'priceperday');
	$_SESSION['room2price']= fetch($conn,$price2,'priceperday');
	$_SESSION['room3price']= fetch($conn,$price3,'priceperday');

    // DAYS DIFFERENCE COUNTED FOR CHARGES CALCULATION
    $days=dayscount($_SESSION['res_from'],$_SESSION['res_to']);//function available in functions.php

    // CHARGES CALCULATION
	$total=$_SESSION['room1price']+$_SESSION['room2price']+$_SESSION['room3price'];
	$_SESSION['charges']=$total * $days;
    
    // REDIRECTION TO CONFIRMATION PAGE
	header("Location: adconfirmation.php");
}
mysqli_close($conn);
?>
