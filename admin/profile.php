<?php 
session_start();
$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];
$email = $_SESSION['email'];
$phone = $_SESSION['phone'];
$address = $_SESSION['address'];
$profile = $_SESSION['profile'];
$status = $_SESSION['status'];
$created_at = $_SESSION['created_at'];
$updated_at = $_SESSION['updated_at'];

echo $user_name;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $address;
echo "<br>";
echo $profile;
echo "<br>";
echo $status;
echo "<br>";
echo $created_at;
echo "<br>";
echo $updated_at;
?>

<h1>Profile page</h1>