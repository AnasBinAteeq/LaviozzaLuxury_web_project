<?php
session_start();
error_reporting(0);
if($_SESSION['status']!='Loggedin'){

    header('Location:login.php');
}

include('connection.php');
include('functions.php');
error_reporting(0);


if (isset($_POST['search'])) {
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){

    $_SESSION['bookingid'] = $_POST['bookingid'];
    $id="SELECT * FROM `history` WHERE `bookingid` LIKE '".$_SESSION['bookingid']."'";
    
    $name=fetch($conn,$id,'customer');
    $cnic=fetch($conn,$id,'cnic');
    $rooms=fetch($conn,$id,'rooms');
    $room1type=fetch($conn,$id,'room1type');
    $room2type=fetch($conn,$id,'room2type');
    $room3type=fetch($conn,$id,'room3type');

    }    
}

if (isset($_POST['checkin'])) {

        date_default_timezone_set('Asia/Karachi');
        $date=date('Y-m-d H:i:s');
        $sql = "UPDATE `history` SET `checkin` = '$date' WHERE `history`.`bookingid` = '".$_SESSION['bookingid']."'";
    
        if(mysqli_query($conn,$sql)){
        
            $room1id= $_POST['room1id'];
            $room2id= $_POST['room2id'];
            $room3id= $_POST['room3id'];
            $sql2 = "UPDATE `history` SET `room1id` = '$room1id' WHERE `history`.`bookingid` = '".$_SESSION['bookingid']."'";
            $sql3 = "UPDATE `history` SET `room2id` = '$room2id' WHERE `history`.`bookingid` = '".$_SESSION['bookingid']."'";
            $sql4 = "UPDATE `history` SET `room3id` = '$room3id' WHERE `history`.`bookingid` = '".$_SESSION['bookingid']."'";
            $occ1 = "UPDATE `rooms` SET `occupied` = 'occupied' WHERE `roomid`= '".$room1id."'";
            $occ2 = "UPDATE `rooms` SET `occupied` = 'occupied' WHERE `roomid`= '".$room2id."'";
            $occ3 = "UPDATE `rooms` SET `occupied` = 'occupied' WHERE `roomid`= '".$room3id."'";
            $delres = "DELETE FROM `reservation` WHERE `reservation`.`bookingid` = '".$_SESSION['bookingid']."'";

            if(mysqli_query($conn,$sql2)){
                mysqli_query($conn,$occ1);
                if(mysqli_query($conn,$sql3)){
                    mysqli_query($conn,$occ2);
                    if(mysqli_query($conn,$sql4)){
                        mysqli_query($conn,$occ3);
                        
                        mysqli_query($conn,$delres);
                        echo "<script>alert('".$_SESSION['bookingid']." marked checked in')</script>";

                    }else{echo mysqli_error($conn);}
                }else{echo mysqli_error($conn);}
            }else{echo mysqli_error($conn);}
            

    }
        else{
            echo mysqli_error($conn);
        }
    }

if (isset($_POST['checkout'])) {

    $id="SELECT * FROM `history` WHERE `bookingid` LIKE '".$_SESSION['bookingid']."'";
    $room1id = fetch($conn,$id,'room1id');
    $room2id = fetch($conn,$id,'room2id');
    $room3id = fetch($conn,$id,'room3id');
    
        date_default_timezone_set('Asia/Karachi');
        $date=date('Y-m-d H:i:s');
        $sql = "UPDATE `history` SET `checkout` = '$date' WHERE `history`.`bookingid` = '".$_SESSION['bookingid']."'";

        if(mysqli_query($conn,$sql)){

            $occ4 = "UPDATE `rooms` SET `occupied` = NULL WHERE `roomid`= '".$room1id."'";
            $occ5 = "UPDATE `rooms` SET `occupied` = NULL WHERE `roomid`= '".$room2id."'";
            $occ6 = "UPDATE `rooms` SET `occupied` = NULL WHERE `roomid`= '".$room3id."'";
            mysqli_query($conn,$occ4);
            mysqli_query($conn,$occ5);
            mysqli_query($conn,$occ6);

            echo "<script>alert('".$_SESSION['bookingid']." marked checked out')</script>";
        }
        else{echo mysqli_error($conn);}
        

    
}

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="admin.css" />

    
    <link rel="apple-touch-icon" sizes="180x180" href="img/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/icon/favicon-16x16.png">
    <link rel="manifest" href="img/icon//site.webmanifest">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Laviozza Dashboard</title>
</head>

<body>
    
<nav>

<div class="logo">
    <a href="#">LAVIOZZA LUXURY</a>
</div>

<ul name="navMenu">
    <li><a href="checkin.php">Check in</a></li>
    <li><a href="adreservation.php">Reservation</a></li>
    <li><a href="details.php">Details</a></li>
    <li><a href="logout.php" onclick="return confirm('You will be logged out!')">Logout</a></li>
</ul>
</nav>

<!-- CONTENT -->
 <!DOCTYPE html>

<div class="reservation" id="reservation">    

        <div class="resForm">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

                <h2>Check In / Check Out</h2>
                <input type="text" name="bookingid" class="idinput" placeholder="Enter Booking ID here">
                <input type="submit" value="search" name="search" class="rbtn">

                <div class="info">
                    <fieldset>
                        <legend>Customer Info</legend>

                            <div class="rfield">
                                <label for="res_name">Full Name</label>
                                <label class="labcheck"><?php echo $name?></label>    
                            </div>
    
    
                            <div class="rfield">
                                <label for="emailr">Booking ID</label>
                                <label class="labcheck"><?php echo $_SESSION['bookingid']?></label>
                            </div>
    
                            <div class="rfield">
                                <label for="res_cnic">ID Card/Cnic no</label>
                                <label class="labcheck"><?php echo $cnic?></label>
                            </div>

                    </fieldset>
                </div>

                <div class="info">
                    <fieldset>
                        <legend>Room Info</legend>

                        <div class="rfield">
                            <label>Rooms</label><br>
                            <label class="labcheck"><?php echo $rooms?></label>
                        </div>

                        <div class="rfield">
                            <label>Room 1</label>
                            <label  class="labcheck"><?php echo $room1type?></label>
                        </div>
                    
                        <div class="rfield">
                            <label>Room 2</label>
                            <label  class="labcheck"><?php echo $room2type?></label>
                        </div>
                    
                        <div class="rfield">
                            <label>Room 3</label>
                            <label class="labcheck"><?php echo $room3type?></label>
                        </div>
                    
                    </fieldset>
                    
                </div>
                
                <div class="info" id="roomfield">
                    <div class="rfield">
                        <label>Room 1 ID</label>
                        <select name="room1id" id="room1id">
                            <?php
                            $roomlist = mysqli_query($conn,"SELECT roomid From rooms WHERE roomtype LIKE '$room1type' AND `occupied` IS NULL");  // Use select query
                            while($data = mysqli_fetch_array($roomlist))
                            {
                                echo "<option value='". $data['roomid'] ."'>" .$data['roomid'] ."</option>";  // displaying data in option menu
                            }	
                            ?>
                        </select>
                    </div>
                    <div class="rfield">
                        <label>Room 2 ID</label>
                        <select name="room2id" id="room2id">
                            <?php
                            $roomlist = mysqli_query($conn,"SELECT roomid From rooms WHERE roomtype LIKE '$room2type' AND `occupied` IS NULL");  // Use select query
                            while($data = mysqli_fetch_array($roomlist))
                            {
                                echo "<option value='". $data['roomid'] ."'>" .$data['roomid'] ."</option>";  // displaying data in option menu
                            }	
                            ?>
                        </select>
                    </div>
                    <div class="rfield">
                        <label>Room 3 ID</label>
                        <select name="room3id" id="room3id">
                            <?php
                            $roomlist = mysqli_query($conn,"SELECT roomid From rooms WHERE roomtype LIKE '$room3type' AND `occupied` IS NULL");  // Use select query
                            while($data = mysqli_fetch_array($roomlist))
                            {
                                echo "<option value='". $data['roomid'] ."'>" .$data['roomid'] ."</option>";  // displaying data in option menu
                            }	
                            ?>
                        </select>
                    </div>

                </div>
                
                <input type="submit" value="Check In" name="checkin" class="rbtn">
                <input type="submit" value="Check Out" name="checkout" class="rbtn">

            </form>
        </div>
    </div>

<script src="script_LL.js"></script>
 
</body>
</html>
