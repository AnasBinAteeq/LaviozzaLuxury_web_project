<?php
$servername = "localhost";
$username="root";
$password="anasbinateeq";

//create connection
$conn = new mysqli($servername, $username, $password);

//check connection
if ($conn->connect_error){
    die("Connection Failed: ". $conn->connect_error);
}

echo "Connected Succesfully";

$res_name = mysqli_real_escape_string($conn, $_REQUEST['res_name']);
$res_contactno = mysqli_real_escape_string($conn, $_REQUEST['res_contactno']);
$res_email = mysqli_real_escape_string($conn, $_REQUEST['res_email']);
$res_cnic = mysqli_real_escape_string($conn, $_REQUEST['res_cnic']);

$sql = "INSERT INTO laviozza (cnic, name, contact, email) VALUES ('res_name', 'res_contactno', 'res_email', 'res_cnic' )";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

mysqli_close($conn);
?>
