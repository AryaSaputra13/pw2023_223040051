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

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    if (delete_siswa($id) > 0) {
        echo "
            <script>
                alert('Success to Delete');
                document.location.href = '../daftar-siswa.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Failed to Delete');
                document.location.href = '../daftar-siswa.php';
            </script>
        ";
    }
} else {
    echo "Data Invalid";
}



?>