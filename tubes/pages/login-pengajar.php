<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- css -->
	<link rel="stylesheet" href="../css/log_reg.css">

    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

	<title>Log-in</title>
</head>
<body>
	<div class="card mb-3" style="max-width: 540px;">
		<div class="row g-0">
			<div class="col-md-4">
			<img src="../img/cardimg/strategy-study.jpg" class="img-fluid rounded-start" alt="strategy-study" style="height: 240px;">
			</div>
			<div class="col-md-8">
				<div class="card-body">
					<h5 class="card-title">Log-in</h5>
					<form action="" method="post">
						<div class="section mb-3">
							<label for="username" class="form-label" style="text-align: start;">Username</label>
							<input type="text" class="form-control" id="username" name="username" style="width: 16rem;" required>
						</div>
						<div class="section mb-3">
							<label for="username" class="form-label" style="text-align: start;">Password</label>
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