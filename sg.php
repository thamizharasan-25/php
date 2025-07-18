<pre>
<?php
//session_start();// it creates a unique id when it calls 
 
setcookie("tamils", "testcookie",  100+ time(),"/");
include 'libs/load.php';

print("SESSION\n");
print_r($_SESSION);


if(isset($_GET['clear'])){
    print"clearing\n";
   Session::unset();
}
if(isset($_GET['destroy'])){
    print"destroying...\n";
    Session::destroy();
}
if(Session::isset('a'))// :: is used to call the static functions
{  
    printf("A already exists...value:".Session::get('a')."\n");
}else{
    // $_SESSION['a'] = time();
    Session::set('a',time());
    print "Assignning new value for a:".Session::get('a')."\n";
}


?>
</pre>