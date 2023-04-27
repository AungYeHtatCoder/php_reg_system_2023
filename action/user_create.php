<?php
include('../db\functions.php');

$data = [
    'user_name' => $_POST['user_name'],
    'email' => $_POST['email'],
    'password' => md5($_POST['password']),
    'phone' => $_POST['phone'],
    'address' => $_POST['address'],
];

// echo "<pre>";
// print_r($data);
// echo "</pre>";

if(isset($_POST['user_create'])){
    if(UserCreate($data)){
        header('location:../login_form.php?success=User Create Successfully');
    }else{
        echo "User Create Failed";
    }
}