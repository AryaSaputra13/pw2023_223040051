<?php
require('../../assets/sessions/session-pengajar.php');

require('../../assets/function/functions.php');
require('../../assets/parts/pengajar-part/header-pengajar.php');
require('../../assets/parts/pengajar-part/nav-pengajar.php');
?>

<style>
  .wrapper {
    display: flex;
  }

  .sidebar {
    height: 100vh;
    width: 200px;
    background-color: #f1f1f1;
    padding: 20px;
    border: 1px solid black;
  }

  .content {
    flex: 1;
    padding: 20px;
  }

  .content h1 {
    text-align: center;
  }

  .card{
    border: 1px solid black;
  }

  

</style>

<div class="wrapper">
  <div class="sidebar">
    <h2>Profile</h2>
    <img src="" alt="">
    <h5>nrp</h5>
    <h5>Nama</h5>
    <h5>email</h5>
    <p></p>
  </div>
  <div class="content">
    <h1>dasboard</h1>
    <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
  </div>
</div>

<?php require("../../assets/part/pengajar-part/pengajar.php"); ?>
