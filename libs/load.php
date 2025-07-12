<?php

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
function signup($username, $password, $email, $phone)
{
    $dbservername = "localhost";
    $dbusername = "root";
    $dbpassword = "tamil@1526";
    $dbname = "new_db";

    // Create connection
    $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
VALUES ('$username', '$password','$email', '$phone', '0', '1')";
    $error = false;
    if ($conn->query($sql) === TRUE) {
     // echo "New record created successfully";
      $error = false;
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
      $error = $conn->error;
    }

    $conn->close();

    return $error;
}
