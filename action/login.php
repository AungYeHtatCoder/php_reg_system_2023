<?php
session_start();
include('../db\functions.php');

$email = $_POST['email'];
$password = md5($_POST['password']);

// echo "<pre>";
// print_r($email);
// echo "</pre>";

// echo "<pre>";
// print_r($password);
// echo "</pre>";

$users = Login($email, $password);

if($users)
{
 // session store 
 $_SESSION['user_id'] = $users['id'];
 $_SESSION['user_name'] = $users['user_name'];
 $_SESSION['email'] = $users['email'];
 $_SESSION['phone'] = $users['phone'];
 $_SESSION['address'] = $users['address'];
 $_SESSION['profile'] = $users['profile'];
 $_SESSION['status'] = $users['status'];
 $_SESSION['created_at'] = $users['created_at'];
 $_SESSION['updated_at'] = $users['updated_at'];
 header('location:../admin/profile.php?success=Login Successfully');
}else{
 header('location:../login_form.php?error=Login Failed');
}