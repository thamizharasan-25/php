<?php

class User
{
    private $conn;
    public static function signup($username, $password, $email, $phone)
    {
        // Check connection
        //hashing using md5.
        $password = md5(($password)); //security through obscurity
        $conn = Database::getConnection();
        $sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
        VALUES ('$username', '$password','$email', '$phone', '0', '1')";
        $error = false;
        if ($conn->query($sql) === true) {
            $error = false;
        } else {
            //echo "Error: " . $sql . "<br>" . $conn->error;
            $error = $conn->error;
        }

        //$conn->close();

        return $error;
    }
    public static function login($username, $password)
    {   
        //md5 hashing for authenticate the pass where it stored as a hashed value
        $password = md5(($password));
        $query = "SELECT * FROM `auth` WHERE `username` = '$username'";
        $conn = Database::getConnection(); //object of the dbconnect which has multiple methods like connect_error...
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // $sql = "SELECT * FROM  auth WHERE username ='$username' AND password='$password'";
        $result = $conn->query($query);
        //$error = false;
        if ($result->num_rows === 1) {// username can be only one which is unique and it should be 1 rows 
            $row = $result->fetch_assoc();
           if($row['password']==$password)
            return $row;
           else{
            
            return false;
           }
        }else {
            return false;
        }

        $conn->close();
    }
    // public function __construct($username)
    // {
    //     $this->conn=Database::getConnection();
    //     $this->conn=query();
    // }

}

