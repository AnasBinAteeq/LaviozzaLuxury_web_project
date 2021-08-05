<?php
session_start();
error_reporting(0);
include("connection.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{

	$search=mysqli_query($conn,"SELECT * FROM `customer` WHERE `cnic` LIKE '{$_SESSION['res_cnic']}'");
	
	// echo "cnic".$_SESSION['res_cnic']."<br>";
	if(mysqli_fetch_row($search)==0){		
		$query1= "INSERT INTO customer (cnic, name, contact, email) VALUES ('{$_SESSION['res_cnic']}', '{$_SESSION['res_name']}', '{$_SESSION['res_contactno']}', '{$_SESSION['res_email']}')";
		mysqli_query($conn, $query1);
	}
	else{
		echo "Error: "  . mysqli_error($conn);
	}

	$query2="INSERT INTO reservation (bookingid, cnic, customer, email, guests, rooms, room1type, room2type, room3type, start, end, charges)
			VALUES ('{$_SESSION['booking_id']}','{$_SESSION['res_cnic']}','{$_SESSION['res_name']}','{$_SESSION['res_email']}','{$_SESSION['guests']}','{$_SESSION['rooms']}','{$_SESSION['room1type']}','{$_SESSION['room2type']}','{$_SESSION['room3type']}','{$_SESSION['res_from']}','{$_SESSION['res_to']}','{$_SESSION['charges']}')";
	if(mysqli_query($conn, $query2)){

		$query3="INSERT INTO history (bookingid, cnic, customer, email, guests, rooms, room1type, room2type, room3type, start, end, charges)
			VALUES ('{$_SESSION['booking_id']}','{$_SESSION['res_cnic']}','{$_SESSION['res_name']}','{$_SESSION['res_email']}','{$_SESSION['guests']}','{$_SESSION['rooms']}','{$_SESSION['room1type']}','{$_SESSION['room2type']}','{$_SESSION['room3type']}','{$_SESSION['res_from']}','{$_SESSION['res_to']}','{$_SESSION['charges']}')";
		
		if(mysqli_query($conn, $query3)){
			echo "reserved";
			header("Location: checkin.php");
		}
		else{
			echo mysqli_error($conn);
		}
		
	}
	else{
		echo mysqli_error($conn);
	}

	
}

mysqli_close($conn);
?>