<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  $to = "aryasaputra1304@gmail.com"; // Ganti dengan alamat email admin yang dituju
  $headers = "From: $name <$email>";

  if (mail($to, $subject, $message, $headers)) {
    echo "Pesan berhasil dikirim.";
  } else {
    echo "Pesan gagal dikirim.";
  }
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
<form action="send_email.php" method="post">
  <input type="text" name="name" placeholder="Nama Anda" required>
  <input type="email" name="email" placeholder="Alamat Email Anda" required>
  <input type="text" name="subject" placeholder="Subjek Pesan" required>
  <textarea name="message" placeholder="Pesan Anda" required></textarea>
  <input type="submit" value="Kirim Pesan">
</form>

    
</body>
</html>