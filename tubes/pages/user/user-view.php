<?php
require('../../assets/sessions/session-user.php');

require('../../assets/function/functions.php');
require('../../assets/parts/user-part/header-user.php');
require('../../assets/parts/user-part/nav-user.php');
?>


<div class="container">
  <div class="profile">
    <!-- Profile -->
    <div class="profile-header">
        <h2>Profile</h2>
    </div>
    <p>Nama: Kanata</p>
    <p>Umur: 21 tahun</p>
    <p>Alamat: Jl. Contoh No. 123</p>
  </div>
  <div class="content">
    <!-- Konten -->
    <div class="content-header">
        <h2>Konten</h2>
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et felis dapibus, 
        mollis neque eget, iaculis elit. Donec tristique facilisis mauris, sit amet cursus neque congue in. 
        Duis faucibus, nulla eu ullamcorper tincidunt, lectus sapien commodo mi, 
        vitae congue est dolor eu turpis.</p>
  </div>
</div>

<?php require('../../assets/parts/user-part/footer-user.php'); ?>