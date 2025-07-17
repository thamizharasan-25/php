<pre> <?php
include 'libs/load.php';

//  print("SERVER\n");
// print_r($_SERVER);
// print("GET\n");
// print_r($_GET);
// print("POST\n");
// print_r($_POST);
// print("FILES");
// print_r($_FILES);
// print("COOKIES\n");
// print_r($_COOKIE);

if (signup("tamicdsvdv", "adfsdvfdv", "test@gmail.com", "9926051510")) {
    echo "success";
} else {
    echo "failed";
}

?>
</pre>