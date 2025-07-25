<?php
$login = false;
$result = false;
if (isset($_POST['username']) and isset($_POST['password']) and !empty($_POST['username']) and !empty($_POST['password']))  {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = User::login($username, $password);
	if($result){
		$login = true;
	}
}
?>
	<main class="form-signin w-100 m-auto">
	<form method="post" action="app">
		<img class="mb-4" src=https://www.svgrepo.com/show/303183/google-2015-logo.svg alt="" width="150"
			height="150">

		<h1 class="h3 mb-3 fw-normal">Please sign in</h1>

		<div class="form-floating">
			<input name="username" type="text" class="form-control" id="floatingInput" placeholder="username">
			<label for="floatingInput">username</label>
		</div>

		<div class="form-floating">
			<input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
			<label for="floatingPassword">Password</label>
		</div>

		<div class="form-check text-start my-3">
			<input class="form-check-input" type="checkbox" value="remember-me" id="checkDefault">
			<label class="form-check-label" for="checkDefault">
				Remember me
			</label>
		</div>

		<button class="btn btn-primary w-100 py-2 hvr-pulse-grow" type="submit">Sign in</button>

	</form>
</main>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	if ($login) {
    //if ($result) {
     ?>
	<main class="container">
	<div class="bg-body-tertiary p-5 rounded mt-3">
		<h1>LOGIN SUCCESS</h1>
		<p class="lead">This IS THE LOGIN SUCCES PAGE.</p>
	</div>
  	</main>
	<?php
    }
	else 
	{
    ?>
        <main class="container">
		<div class="bg-body-tertiary p-5 rounded mt-3">
		<h1>LOGIN failed</h1>
		<p class="lead">Something went wrong<a href="login.php">here</a>.</p>
		</div>
		</main>
<?php
	}
}
?> 