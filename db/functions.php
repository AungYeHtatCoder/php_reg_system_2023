<?php
include('db_conn.php');

// user create function ($data = user_name, email, password, phone, address)

function UserCreate($data)
{
    global $conn;
    $user_name = $data['user_name'];
    $email = $data['email'];
    $password = $data['password'];
    $phone = $data['phone'];
    $address = $data['address'];

    $sql = "INSERT INTO users (user_name, email, password, phone, address) VALUES ('$user_name', '$email', '$password', '$phone', '$address')";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

// user login function ($email, $password)
function Login($email, $password)
{
    global $conn;
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        return $row;
    } else {
        return false;
    }
}

// user logout function ()
function Logout()
{
    session_destroy();
    header('location:../login_form.php?success=Logout Successfully');
}