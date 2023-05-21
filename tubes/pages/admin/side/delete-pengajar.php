<?php
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