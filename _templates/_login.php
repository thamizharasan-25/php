<?php
$Username = $_POST['email'];
$Password = $_POST['password'];
$result = validates($Username, $Password);
if ($result) {
    ?>
<main class="container">
	<div class="bg-body-tertiary p-5 rounded mt-3">
		<h1>LOGIN SUCCESS</h1>
		<p class="lead">This IS THE LOGIN SUCCES PAGE.</p>

	</div>
</main>
<?php
} else {
    print $result;
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
        echo "<p style='color:red;'>Login failed. Try again.</p>";
    }
    ?>
<main class="form-signin w-100 m-auto">
	<form method="post" action="login.php">
		<img class="mb-4" src=https://www.svgrepo.com/show/303119/jack-daniels-1-logo.svg alt="" width="150"
			height="150">

		<h1 class="h3 mb-3 fw-normal">Please sign in</h1>

		<div class="form-floating">
			<input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
			<label for="floatingInput">Email address</label>
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

		<button class="btn btn-primary w-100 py-2<a hvr-pulse-grow" type="submit">Sign in</button>

	</form>
</main>
<?php }?>