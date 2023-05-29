<?php
session_start();

require("../assets/function/functions.php");
require("../assets/parts/login-part/login-reg-header.php");

if ( isset($_SESSION["login"]) ) {
	header("Location: pengajar/pengajar-view.php");
}

if( isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($cdb, "SELECT * FROM account_pengajar 
                                WHERE username = '$username'");

  if( mysqli_num_rows($result) === 1 ) {
    $row = mysqli_fetch_assoc($result);

    if( password_verify($password, $row["password"]) ) {
		$_SESSION["login"] = true;

      header("Location: pengajar/pengajar-view.php");
      exit;
    }
  }

  $error = true;
}
?>

<div class="form login_form">
    <form action="" method="post">
        <h2>Login</h2>

        <?php if ( isset($error) ) : ?>
            <p style="color: red; text-align: center;">Username atau Password Salah</p>
        <?php endif ; ?>

        <div class="input_box">
            <i class="uil uil-user"></i>
            <input type="text" name="username" placeholder="Enter Username" pattern="[A-Za-z\s]*" autocomplete="off" required>
        </div>
        <div class="input_box">
          	<input type="password" name="password" placeholder="Enter Password" pattern="[A-Za-z0-9*$@!_-\s]*" autocomplete="off" required>
          	<i class="uil uil-lock password"></i>
            <i class="uil uil-eye-slash pw_hide"></i>
        </div>
        <button class="submit" name="login">Login</button>
        <div class="back" style="font-size: 12px; margin: 1rem 0 1rem 5rem;">Ingin kembali? <a href="login.php" id="back">Kembali?</a></div>
    </form>
</div>

<?php require("../assets/parts/login-part/login-reg-header.php"); ?>