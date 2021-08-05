<?php
session_start();
error_reporting(0);
include("connection.php");

$_SESSION['status']="";

if(isset($_POST['username'])){
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from users where username='".$username."'AND password='".$password."' limit 1";
    
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)==1){
        $_SESSION['status']='Loggedin';
        header('Location:checkin.php');
        exit();
    }
    else{
        header('Location:login.php');
        
    }
        
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link rel="apple-touch-icon" sizes="180x180" href="img/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/icon/favicon-16x16.png">
    <link rel="manifest" href="img/icon//site.webmanifest">
    
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Log in Laviozza</title>
</head>
<body>
    <div class="login">
        <form method="post">
            <h1>LAVIOZZA LUXURY</h1>
            <table>
                <tr>
                    <th>Username</th>
                </tr>
                <tr>
                    <th><input type="text" name="username" id="username" placeholder="Username"></th>
                </tr>
                <tr>
                    <th>Password</th>
                </tr>
                <tr>
                    <th><input type="password" name="password" id="password" placeholder="Password"><i class="fa fa-eye" id="togglePassword"></i></th>
                </tr>
                <tr>
                    <th><input type="submit" value="Login" id="loginbtn"></th>
                </tr>
            </table>
        </form>
    </div>
<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');
    togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>      
</body>
</html>