<?php 
require('../../assets/sessions/session-admin.php');

require('../../assets/function/functions.php'); 
require('../../assets/parts/admin-part/header-admin.php');
require('../../assets/parts/admin-part/nav-admin.php');


$dataPerHalaman = 2;
$jumlahData = count(query_pengajar("SELECT * FROM pengajar"));
$jumlahPage = ceil($jumlahData / $dataPerHalaman);
$activePage = (isset($_GET["page"])) ? $_GET["page"] : 1 ;

$awaldata = ($dataPerHalaman * $activePage) - $dataPerHalaman;


$pengajar = query_pengajar("SELECT * FROM pengajar LIMIT $awaldata, $dataPerHalaman");


if( isset($_POST["search"]) ) {
    $pengajar = search_pengajar($_POST["keyword"]);

    if() {
        
    }
    
}


if( isset($_POST["submit"]) ) {

    
    if( add_pengajar($_POST) > 0) {
        echo "
            <script>
                alert('Succes to Add!');
                document.location.href = 'daftar-pengajar.php';
            </script>
        ";
    } else {
       echo "
            <script>
                alert('Failed to Add!');
                document.location.href = 'daftar-pengajar.php';
            </script>
       ";
    }
    
}
?>  


<h3 style="text-align: center; margin: 2rem 0 4rem 0 ;">Daftar Pengajar</h3>
<div class="container mt-3">
    <table id="daftar-pengajar" class="table table-sm" style="text-align: center;">
        <thead>
            <tr>
                <th class="col"></th>
                <th class="col" scope="col""></th>
                <th class="col" scope="col"></th>
                <th class="col" scope="col"></th>
                <th class="col" scope="col">
                    <form class="d-flex" role="search" method="post">
                        <input class="form-control me-2" name="keyword" type="search" placeholder="Search" aria-label="Search" autocomplete="off" pattern="[A-Za-z0-9]*" style="max-width: 250px;">
                        <button class="btn btn-outline-success" type="submit" name="search">Search</button>
                    </form>
                </th>
            </tr>
            <tr>
                <th class="col" scope="col">NO</th>
                <th class="col" scope="col"">Gambar</th>
                <th class="col" scope="col">NIP</th>
                <th class="col" scope="col">Nama</th>
                <th class="col" scope="col-">Aksi</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php $i = 1; foreach($pengajar as $teacher) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td>
                    <img src="../../img/pengajarimg/<?= $teacher["foto"]; ?>" width="50" height="50" class="rounded-circle">
                </td>
                <td><?= $teacher["NIP"]; ?></td>
                <td><?= $teacher["nama"]; ?></td>
                <td>
                    <a href="update-pengajar.php?id=<?= $teacher["id"]; ?>">Ubah</a> |
                    <a href="side/delete-pengajar.php?id=<?= $teacher["id"]; ?>" onclick="return confirm('Confirm');">Hapus</a>
                </td>
            </tr>
            <?php endforeach ; ?>
            <form action="" method="post" enctype="multipart/form-data">
                <tr>
                    <th scope="row">+</th>
                    <td>
                        <input type="file" name="foto" id="foto" class="form-control" style="max-width: 300px;" autocomplete="off" required>
                    </td>
                    <td>
                        <input type="text" name="NIP" id="NIP" class="form-control" placeholder="Masukan NIP" autocomplete="off" pattern="[0-9]*" required>
                    </td>
                    <td>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama" autocomplete="off" pattern="[A-Za-z\s]*" required>
                    </td>
                    <td>
                       <button type="submit" name="submit">   
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                        </button>
                    </td>
                </tr>
            </form>
            <tr>
                <th class="col"></th>
                <th class="col" scope="col"></th>
                <th class="col" scope="col">
                    <?php if($activePage > 1) : ?>
                        <a href="?page=<?= $activePage - 1; ?>">&laquo;</a>
                    <?php endif ; ?>
                    <?php  for($i = 1; $i <= $jumlahPage; $i++) : ?>
                        <?php if($i == $activePage) : ?>
                            <a href="?page=<?= $i; ?>" style="font-wight: bold; color: blue;"><?= $i; ?></a>
                        <?php else : ?>
                            <a href="?page=<?= $i; ?>"><?= $i; ?></a>
                        <?php endif; ?>
                    <?php  endfor; ?>  
                    <?php if($activePage < $jumlahPage) : ?>
                        <a href="?page=<?= $activePage + 1; ?>">&raquo;</a>
                    <?php endif ; ?>
                </th>
                <th class="col" scope="col"></th>
                <th class="col" scope="col"></th>
            </tr>
        </tbody>

    </table>
</div>

<?php require('../../assets/parts/admin-part/footer-admin.php'); ?>