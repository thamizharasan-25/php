<?php

class Database
{       //defining one connection databse where it is used to call the db connection
    public static $conn = null;
    public static function getConnection()
    {
        if (Database::$conn == null) {
            $dbservername = "localhost";
            $dbusername = "root";
            $dbpassword = "tamil@1526";
            $dbname = "new_db";

            // Create connection
            $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);//TODO: replace this with exception handling
            } else {
                Database::$conn = $conn;
                return Database::$conn;
            }
        } else {
            return Database::$conn;
        }
    }
}
