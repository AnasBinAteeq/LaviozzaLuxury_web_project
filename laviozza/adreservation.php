<?php
session_start();
error_reporting(0);
if($_SESSION['status']!='Loggedin'){
    header('Location:login.php');
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
    
<!-- NAV BAR -->
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

    <div class="reservation" id="reservation">    

        <div class="resForm">
            <form action="adcollect.php" method="post">

                <h2>Book Your Room</h2>

                <div class="info">
                    <fieldset>
                        <legend>Your Info</legend>
                            <div class="rfield">
                                <label for="res_name">Full Name</label>
                                <input type="text" maxlength="50" id="res_name" name="res_name" placeholder="Enter Your Name" autofocus required autocomplete>    
                            </div>
    
                            <div class="rfield">
                                <label for="res_contactno">Contact no</label>
                                <input type="tel" id="res_contactno" name="res_contactno" placeholder="Your Contact Number" required autocomplete>    
                            </div>
    
                            <div class="rfield">
                                <label for="emailr">Email</label>
                                <input type="res_email" id="res_email" name="res_email" placeholder="Your Valid Email" required autocomplete>    
                            </div>
    
                            <div class="rfield">
                                <label for="res_cnic">ID Card/Cnic no</label>
                                <input type="text" id="res_cnic" name="res_cnic" placeholder="Your ID card number" required autocomplete>    
                            </div>

                    </fieldset>
                </div>

                <div class="info">
                    <fieldset>
                        <legend>Booking Info</legend>

                        <div class="rfield">
                            <label for="guests">No. of Guests</label>
                            <input type="number" min="1" id="guests" name="guests" placeholder="No. of Guests" required autocomplete>
                        </div>

                        <div class="rfield">
                            <label for="res_from">From Date</label>
                            <input type="date" id="res_from" name="res_from" oninput="dayscounter()" required>
                        </div>
                    
                        <div class="rfield">
                            <label for="res_to">To Date</label>
                            <input type="date" id="res_to" name="res_to" oninput="dayscounter()" required>
                        </div>
                    
                        <div class="rfield">
                            <label for="rooms">No. of Rooms</label>
                            <input type="number" min="1" max="3" id="rooms" name="rooms" placeholder="No. of Rooms" oninput="roomtypegen()" required>
                        </div>
                    
                    </fieldset>
                    
                </div>

                <div class="info" id="dayscounter">
                    <!-- Booking Days and Nights Shown here dynamically-->
                </div>
                
                <div class="info" id="roomfield">
                    <!-- Room type Fields generated here dynamically-->
                </div>
                
                <input type="submit" value="Book" class="rbtn">

            </form>
        </div>
    </div>

</div>

<script src="script_LL.js"></script>
 
</body>
</html>