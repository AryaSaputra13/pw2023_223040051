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

	<title>Registration</title>
</head>
<body style="border: 1px solid black;">
	<div class="card mb-3" style="max-width: 540px;">
		<div class="row g-0">
			<div class="col-md-4">
			    <img src="../img/cardimg/strategy-study.jpg" class="img-fluid rounded-start" alt="strategy-study" style="height: 240px;">
			</div>
			<div class="col-md-8">
				<div class="card-body">
					<h5 class="card-title">Registration</h5>
					<form action="" method="post">
					<div class="row-md-2">
                            <label for="validationDefault01" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="validationDefault01" value="Mark Steve" required>
                        </div>
                        <div class="row-md-2">
                            <label for="validationDefault01" class="form-label">Email</label>
                            <input type="text" class="form-control" id="validationDefault01" value="Example123@gmail.com" required>
                        </div>
                        <div class="row-ed-2">
                            <label for="validationDefault02" class="form-label">Passwords</label>
                            <input type="text" class="form-control" id="validationDefault02"required>
                        </div>
						<div class="section" style="margin-bottom: 1rem;">
							<button class="btn btn-outline-dark" type="submit">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>