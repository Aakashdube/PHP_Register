<?php
session_start();
include "config.php";

$email = mysqli_real_escape_string($conn, $_POST['log-email']);
$password = mysqli_real_escape_string($conn, $_POST['log-password']);
$encrypt_pass = md5($password);

if (!empty($email) && !empty($password)) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $check_user = mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}' AND password='{$encrypt_pass}' ");

        if (mysqli_num_rows($check_user) > 0) {
            $row = mysqli_fetch_assoc($check_user);

            $_SESSION[ 'name'] = $row['name'];
            $_SESSION[ 'email'] = $row['email'];

            echo 'login success';
        }else{
            echo "Email or password is Incorrect!";
        }
      } else {
       echo "Enter valid email address!";  
    }
} else {
   echo "All input fields are required!";
}