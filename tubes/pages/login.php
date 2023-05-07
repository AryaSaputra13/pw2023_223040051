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
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

	<title>Admin</title>
</head>
<body>
	<div class="card mb-3" style="max-width: 540px; margin: 10rem 0 0 25rem;">
		<div class="row g-0">
			<div class="col-md-4">
			<img src="../img/cardimg/strategy-study.jpg" class="img-fluid rounded-start" alt="strategy-study" style="height: 240px;">
			</div>
			<div class="col-md-8">
				<div class="card-body">
					<h5 class="card-title">Log-in</h5>
						<?php if (isset($error)) { ?>
						<p class="error"><?php echo $error; ?></p>
					<?php } ?>
					<form action="" method="post">
						<div class="section mb-3">
							<label for="username" class="form-label" style="text-align: start;">Username</label>
							<input type="text" class="form-control" id="username" name="username" style="width: 16rem;" required>
						</div>
						<div class="section mb-3">
							<label for="username" class="form-label" style="text-align: start;">Username</label>
							<input type="password" class="form-control" id="password" name="password" style="width: 16rem;" required>
						</div>
						<div class="section" style="margin-bottom: 1rem;">
							<button class="btn btn-outline-dark" type="submit">Log-in</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>