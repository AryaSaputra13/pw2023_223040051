<?php

require("../assets/parts/login-part/login-reg-header.php");
require("../assets/function/functions.php");


if( isset($_POST["signup"]) ) {
    
  if( registration_siswa($_POST) > 0) {
      echo "
      <script>
        alert('Success to Sign-up');
        document.location.href = 'login.php';
      </script>
      ";
  } else {
    echo mysqli_error($cdb);
  }
  
}

?>

	<div class="form login_form">
        <form action="" method="post">
            <h2>Sig-up</h2>
			      <div class="input_box">
                <i class="uil uil-user"></i>
              	<input type="text" name="username" placeholder="Enter your Username" pattern="[A-Za-z0-9\s]*" autocomplete="off" required />
            </div>
            <div class="input_box">
              	<input type="password" name="password" placeholder="Enter your password" pattern="[A-Za-z0-9*$@!_-\s]*" autocomplete="off" required />
              	<i class="uil uil-lock password"></i>
              	<i class="uil uil-eye-slash pw_hide"></i>
            </div>
            <div class="input_box">
              	<input type="password" name="password2" placeholder="Confirmd password" pattern="[A-Za-z0-9*$@!_-\s]*" autocomplete="off" required />
              	<i class="uil uil-lock password"></i>
              	<i class="uil uil-eye-slash pw_hide"></i>
            </div>
            <button class="submit" name="signup">Sign-up</button>
            <div class="back" style="font-size: 12px; margin: 1rem 0 1rem 5rem;">Ingin kembali? <a href="login.php" id="back">Kembali?</a></div>
        </form>
  </div>

<?php require("../assets/parts/login-part/login-reg-footer.php"); ?>