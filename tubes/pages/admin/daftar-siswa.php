<?php 
require('../../assets/admin-part/header-admin.php');
require('../../assets/admin-part/nav-admin.php');
require('../../assets/function/functions.php'); 

    $students = query_siswa("SELECT * FROM siswa");

    if( isset($_POST["submit"]) ) {
        
        if( add_siswa($_POST) > 0) {
            echo "
                <script>
                    alert('Succes to Add!');
                    document.location.href = 'daftar-siswa.php';
                </script>
            ";
        } else {
        echo "
                <script>
                    alert('Failed to Add!');
                    document.location.href = 'daftar-siswa.php';
                </script>
        ";
        }
        
    }
    ?>


    <h3 style="text-align: center; margin: 2rem 0 4rem 0 ;">Daftar Siswa</h3>
    <div class="container mt-3">
        <table id="daftar-siswa" class="table table-sm" style="text-align: center;">
            <thead>
                <tr>
                <th scope="col">NO</th>
                <th scope="col">Gambar</th>
                <th scope="col">NIS</th>
                <th scope="col">Nama</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; foreach($students as $student) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td>
                        <img src=""<?= $student["foto"]; ?>" width="50" height="50" class="rounded-circle">
                    </td>
                    <td><?= $student["NIS"]; ?></td>
                    <td><?= $student["nama"]; ?></td>
                    <td>
                        <a href="side/update-siswa.php?id=<?= $student["id"]; ?>">Ubah</a> |
                        <a href="side/delete-siswa.php?id=<?= $student["id"]; ?>" onclick="return confirm('Confirm');">Hapus</a>
                    </td>
                </tr>
                <?php endforeach ; ?>
                <form action="" method="post">
                    <tr>
                        <th scope="row">+</th>
                        <td>
                            <input type="file" name="foto" id="foto" class="form-control" style="max-width: 300px;">
                        </td>
                        <td>
                            <input type="text" name="NIS" id="NIS" class="form-control" value="NIS" required>
                        </td>
                        <td>
                            <input type="text" name="nama" id="nama" class="form-control" value="Nama" required>
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
            </tbody>
        </table>
    </div>

<?php require('../../assets/admin-part/footer-admin.php'); ?>