<?php
$signup = false;
if (isset($_POST['username']) and isset($_POST['password']) and !empty($_POST['password']) and isset($_POST['email']) and isset($_POST['phone'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $error = User::signup($username, $password, $email, $phone);
    $signup = true;
}
?>
<?php
if ($signup) {
    if (!$error) {
        ?>
<main class="container">
	<div class="bg-body-tertiary p-5 rounded mt-3">
		<h1>Signup Success</h1>
		<p class="lead">Now you can login in from <a href="login.php">here</a>.</p>
	</div>
</main>
<?php
    } else {
        ?>
<main class="container">
	<div class="bg-body-tertiary p-5 rounded mt-3">
		<h1>Signup fail</h1>
		<p class="lead">Something went wrong. <?=$error?></p>
	</div>
	<?php
    }

} else {
    ?>

	<main class="form-signup w-100 m-auto">
		<form method="post" action="signup.php">
			<img class="mb-4" src=https://www.svgrepo.com/show/303183/google-2015-logo.svg alt="" width="150"
				height="150">

			<h1 class="h3 mb-3 fw-normal">Sign up here</h1>
			<div class="form-floating">
				<input name="username" type="text" class="form-control" id="floatingInputusername"
					placeholder="username">
				<label for="floatingInputusername">Username</label>
			</div>

			<div class="form-floating">
				<input name="phone" type="text" class="form-control" id="floatingInputphone" placeholder="phone number">
				<label for="floatingInputphone">phone</label>
			</div>

			<div class="form-floating">
				<input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
				<label for="floatingInput">Email address</label>
			</div>

			<div class="form-floating">
				<input name="password" type="password" class="form-control" id="floatingPassword"
					placeholder="Password">
				<label for="floatingPassword">Password</label>
			</div>

			<button class="btn btn-primary w-100 py-2 hvr-pulse-grow" type="submit">Sign up</button>

		</form>
	</main>
	<?php
}
?>