<?php
include 'libs/load.php';
$username="tamil";
$password=isset($_GET['password'])?$_GET['password']: '';
$result = null;
if(isset($_GET['logout'])){
    session::destroy();
    die("session destryed <a href='logintest.php'>Login Again</a>");
}
if(Session::get('is_loggedin')){
    $userdata = session::get('session_user');
    print "Welcome back  $userdata[username]";
    $result = $userdata;
}else{
    print "no session found, login!!! ";
    $result = User::login($username, $password);

    if ($result) {
        echo "login success $result[username]";
        session::set('is_loggedin', true);
        session::set('session_user', $result);//assining the session data of the user in the session
    } else {
        echo"Login failed   $username";
    }
}

 echo <<< ABC
<br><a href="logintest.php?logout">Logout</a> 
ABC;
?>
