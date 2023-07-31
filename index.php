<?php
require 'config.php';
if(isset($_POST["register"])){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];

    $tbl_users = mysqli_query($conn, "SELECT * FROM tbl_users WHERE username = '$username' OR email = '$email' ");


        if(mysqli_num_rows($tbl_users) > 0){
            echo
            "<script> alert('Username/Email Has Already Taken'); </script>";
    
        }
        else{
           $query = "INSERT INTO tbl_users VALUES('', '$name', '$username', '$email', '$password', '$phone')";
            mysqli_query($conn, $query);
            "<script> alert('Registration Successful '); </script>";
        }  
    
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
    

</head>
<body>
    <form class="" action="" method="post">
        <div class="title">
            <h2>Register</h2>
        </div>
        <div class="half">
            <div class="item">
                <label for="">Name</label>
                <input type="text" name="name" required value=""> 
             </div>
             <div class="item">
                <label for="">username</label>
                <input type="text" name="username" required value="">

             </div>
        </div>
        <div class="half">
            <div class="item">
                <label for="">Email</label>
                <input type="text" name="email" required value="">

            </div>
            <div class="item">
                <label for="">Password</label>
                <input type="password" name="password" required value="">

            </div>
        </div>

        <div class="full">
            <div class="item">
                <label for="">Phone</label>
                <input type="text" name="phone" required value="">


            </div>
        </div>

        <div class="action">
            <input type="submit" name="register" value="Register">

        </div>

    </form>

</body>
</html>