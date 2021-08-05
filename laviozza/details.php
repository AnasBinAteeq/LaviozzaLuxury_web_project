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

<!-- Content  -->
<div class="table">
<input type="text" id="myInput" class="searchbar" oninput="search()" placeholder="Search by booking ID or name" title="Type in a name">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<input type="submit" name="alldetails" value="All" id="alldetails" class="rbtn">
<input type="submit" name="reservations" value="Reservations" id="reservations" class="rbtn">
</form>

<?php
error_reporting(0);
include('connection.php');
$sql = "SELECT `bookingid`,`customer`,`room1type`,`room2type`,`room3type`, `checkin`, `checkout` FROM history";

if (isset($_POST['alldetails'])){
    $sql = "SELECT `bookingid`,`customer`,`room1type`,`room2type`,`room3type`, `checkin`, `checkout` FROM history";
}

if (isset($_POST['reservations'])){
    $sql = "SELECT `bookingid`,`customer`,`room1type`,`room2type`,`room3type` FROM reservation";

}


if($result = mysqli_query($conn , $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table id="."panel".">";
            echo "<tr>";
                echo "<th><h1>Booking ID</h1></th>";
				echo "<th><h1>Name</h1></th>";
				echo "<th><h1>room 1</h1></th>";
				echo "<th><h1>room 2</h1></th>";
				echo "<th><h1>room 3</h1></th>"; 
				echo "<th><h1>checkin</h1></th>"; 
				echo "<th><h1>checkout</h1></th>";   
            echo "</tr>";
            
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['bookingid'] . "</td>";
				echo "<td>" . $row['customer'] . "</td>";
				echo "<td>" . $row['room1type'] . "</td>";
				echo "<td>" . $row['room2type'] . "</td>";
				echo "<td>" . $row['room3type'] . "</td>";
				echo "<td>" . $row['checkin'] . "</td>";
				echo "<td>" . $row['checkout'] . "</td>";  
            echo "</tr>";}
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn );
}
 
// Close connection
mysqli_close($conn);
?>
</div>
<script src="script_LL.js"></script>
</body>
</html>