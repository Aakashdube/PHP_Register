<?php

include "config.php";

$name = mysqli_real_escape_string($conn, $_POST['reg-name']);
$email = mysqli_real_escape_string($conn, $_POST['reg-email']);
$password = mysqli_real_escape_string($conn, $_POST['reg-password']);
$encrypt_pass = md5($password);

if (!empty($name) && !empty($email) && !empty($password)) {
     if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
       //check that the email is not already registered
    $verify_email = mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}' ");

    if (mysqli_num_rows($verify_email) > 0) {
        echo "{$email} - Email already exists";
    }else{
        $insert = mysqli_query($conn, "INSERT INTO users(name, email, password) VALUES('{$name}','{$email}','{$encrypt_pass}')");
       
        if ($insert) {
            echo "registration success";
        } else {
            echo "Can't register - Error occured";
        }
    }
     } else {
        echo "Enter valid email address!";  
     }
} else {
    echo "All input fields are required!";
}


