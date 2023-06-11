<?php
$conn = mysqli_connect("localhost", "root", "", "pw2023_223040051");


session_start();

  
if( isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];
  
    $result = mysqli_query($conn, "SELECT * FROM login 
                                  WHERE username = '{$username}'");
  
    if( mysqli_num_rows($result) === 1 ) {
      $row = mysqli_fetch_assoc($result);
  
      if( password_verify($password, $row["password"]) ) {
          
          $_SESSION["login"] = true;
      
          $_SESSION['admin'] = $row;
          header("Location: index.php");
          exit;
      }
    }
  
    $error = true;
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="login_form">
            <div class="left">
                <img src="image/logshoes.png">
            </div>

            <div class="right">

                <form action="" method="post">
                    <h1>Welcome Back!</h1>

                    <p>User Name</p>
                    <div class="user">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="username" placeholder="Username" class="username">
                    </div>

                    <p class="passworg_tag">Password</p>
                    <div class="password">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" placeholder="Password">
                    </div>

                    <p><a href="registrasi.php" class="forget">Register?</a></p>

                    <button name="login" type="submit">Login</button>
                    <div class="loging_icon">

                </div>

            </form>

        </div>

    </div>
    
</body>
</html>