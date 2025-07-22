<?php

include_once 'includes/Session.class.php';
include_once 'includes/Mic.class.php';
include_once 'includes/User.class.php';
include_once 'includes/Database.class.php';
Session::start();
function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/app/_templates/$name.php";
}
function validates($Username, $Password)
{
    if ($Username == "A@gamil.com" and $Password == "tamil123") {
        return true;
    } else {
        return false;
    }
}

// function login($username, $password)
// {
//     $dbservername = "localhost";
//     $dbusername = "root";
//     $dbpassword = "tamil@1526";
//     $dbname = "new_db";

//     // Create connection
//     $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
//     // Check connection
//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }
//     $sql = "SELECT * FROM  auth WHERE username ='$username' AND password='$password'";
//     $result = $conn->query($sql);
//     $error = false;
//     if ($result && $result->num_rows === 1) {
//         $error = true;
//     } else {
//         //echo "Error: " . $sql . "<br>" . $conn->error;
//         //$error = $conn->error;
//         $error = false;
//     }

//     $conn->close();

//     return $error;
// }
