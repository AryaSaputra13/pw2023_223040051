<?php
require('../../assets/sessions/session-admin.php');

require("../../assets/function/functions.php");
require('../../assets/parts/admin-part/header-admin.php');
require('../../assets/parts/admin-part/nav-admin.php');


if( isset($_POST["signup"]) ) {
    
    if (registration_pengajar($_POST) > 0) {
        echo "
           <script>
              alert('Signup Success!');
           </script>
        ";
     } else {
        echo "
           <script>
              alert('Signup Failed: " . mysqli_error($cdb) . "');
           </script>
        ";
     }
  
}

?>

<h3 style="text-align: center; margin: 2rem 0 4rem 0 ;">Tambah Akun Pengajar</h3>
<div class="container mt-3">
    <form action="" method="post">
        <table id="add-account-pengajar" class="table table-sm" style="text-align: center;">
            <thead>
                <tr>
                    <th class="col" scope="col"></th>
                    <th class="col" scope="col">Username</th>
                    <th class="col" scope="col">Password</th>
                    <th class="col" scope="col">Confirmed Password</th>
                    <th class="col" scope="col-"></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                    <tr>
                        <th scope="row">+</th>
                        <td>
                            <i class="uil uil-user"></i>
                            <input type="text" name="username" placeholder="Enter Username" pattern="[A-Za-z0-9\s]*" autocomplete="off" required>
                        </td>
                        <td>
                            <input type="password" name="password" placeholder="Enter password" pattern="[A-Za-z0-9*$@!_-\s]*" autocomplete="off" required>
                        </td>
                        <td>
                            <input type="password" name="password2" placeholder="Confirmed password" pattern="[A-Za-z0-9*$@!_-\s]*" autocomplete="off" required>
                        </td>
                        <td>
                        <button type="submit" name="signup">   
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                            </button>
                        </td>
                    </tr>
            </tbody>
        </table>
    </form>
</div>



<?php require('../../assets/parts/admin-part/footer-admin.php');?>