<?php
<<<<<<< HEAD
session_start();

if ( !isset($_SESSION["login"]) ) {
      header("Location: ../../admin-login.php");
      exit;
}

=======
>>>>>>> 27f1f5ecdc82d207cf7540810f737f9cd9742592
require('../../../assets/function/functions.php');

$id = $_GET["id"];

if( delete_pengajar($id) > 0) {
    echo "
    <script>
        alert('Succes to Delete');
        document.location.href = '../daftar-pengajar.php';
    </script>
";
} else {
    echo "
    <script>
        alert('Failed to Delete');
        document.location.href = '../daftar-pengajar.php';
    </script>
";
}


?>