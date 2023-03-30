<?php
session_start();
	if (isset($_POST['username']) && isset($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		if ($username === 'admin' && $password === 'admin123') {
				$_SESSION['username'] = $username;
				header('Location: index.php');
				exit;
		} else {
				$error = 'Username atau password salah!';
		}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
	<div class="card" style="position: relative; align-items: center;">
	<div class="card-body" style="width: 18rem; border: 2px solid black; background-color: blue; text-align:center;">
		<h5 class="card-title" style="font-size: 25px;">Admin Acces</h5>
			<?php if (isset($error)) { ?>
				<p class="error"><?php echo $error; ?></p>
			<?php } ?>
			<form action="" method="post">
				<div class="section" style="margin-bottom: 1rem;">
					<label for="username" style="margin-bottom: 1rem;">Username:</label>
					<input type="text" id="username" name="username" required>
				</div>
				<div class="section" style="margin-bottom: 1rem;">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" required>
				</div>
				<div class="section" style="margin-bottom: 1rem;">
					<a calss="Admin Log-in" href="#">	<input type="submit" value="Login"> </a>
				</div>
			</form>
		</div>
	</div>
	</div>
</body>
</html>