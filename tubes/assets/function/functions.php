<?php 
// Database connect
$cdb = mysqli_connect('localhost', 'root', '', 'sokuni') or die('Connection Failed');

<<<<<<< HEAD

// 
// PENGAJAR
// 

=======
>>>>>>> 27f1f5ecdc82d207cf7540810f737f9cd9742592
// show
function query_pengajar($query) {
    global $cdb;
    $result = mysqli_query($cdb, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

<<<<<<< HEAD
=======
function query_siswa($query) {
    global $cdb;
    $result = mysqli_query($cdb, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


>>>>>>> 27f1f5ecdc82d207cf7540810f737f9cd9742592
// add-pengajar
function add_pengajar($data) {
    global $cdb;
    $nip = htmlspecialchars($data["NIP"]);
    $nama = htmlspecialchars($data["nama"]);
<<<<<<< HEAD

    $gambar = upload_pengajar();

    if ( !$gambar ) {
        return false;
    }
=======
    $gambar = htmlspecialchars($data["foto"]);
>>>>>>> 27f1f5ecdc82d207cf7540810f737f9cd9742592

    $add = "INSERT INTO pengajar 
                        (`NIP`, `nama`, `foto`) 
                        VALUES 
                        ('$nip', '$nama', '$gambar')
            ";
    mysqli_query($cdb, $add);
    return mysqli_affected_rows($cdb);
}

<<<<<<< HEAD
=======
// add-siswa
function add_siswa($data) {
    global $cdb;
    $nis = htmlspecialchars($data["NIS"]);
    $nama = htmlspecialchars($data["nama"]);
    $gambar = htmlspecialchars($data["foto"]);

    $add = "INSERT INTO siswa 
                        (`NIS`, `nama`, `foto`) 
                        VALUES 
                        ('$nis', '$nama', '$gambar')
            ";
    mysqli_query($cdb, $add);
    return mysqli_affected_rows($cdb);
}

>>>>>>> 27f1f5ecdc82d207cf7540810f737f9cd9742592
// delete-pengajar
function delete_pengajar($id) {
    global $cdb;
    mysqli_query($cdb, "DELETE FROM pengajar WHERE id = $id");

    return mysqli_affected_rows($cdb);
}

<<<<<<< HEAD
=======
// delete-siswa
function delete_siswa($siswa) {
    global $cdb;
    mysqli_query($cdb, "DELETE FROM siswa WHERE id=$siswa");

    return mysqli_affected_rows($cdb);
}

>>>>>>> 27f1f5ecdc82d207cf7540810f737f9cd9742592
// Update-pengajar
function update_pengajar($update) {
    global $cdb;
    $id = $update["id"];
    $nip = htmlspecialchars($update["NIP"]);
    $nama = htmlspecialchars($update["nama"]);
<<<<<<< HEAD
    $oldfoto = $update["oldfoto"];


    if( $_FILES['foto']['error'] === 4) {
        $foto = $oldfoto;
    } else {
        $foto = upload_pengajar();
    }
    
=======
    $foto = htmlspecialchars($update["foto"]);
>>>>>>> 27f1f5ecdc82d207cf7540810f737f9cd9742592

    $update = "UPDATE pengajar SET 
                NIP = '$nip',
                nama = '$nama',
                foto = '$foto'
            WHERE id = $id
            ";
    mysqli_query($cdb, $update);

    return mysqli_affected_rows($cdb);
}

<<<<<<< HEAD
// search-pengajar
function search_pengajar($keyword) {
    $query = " SELECT * FROM pengajar
                WHERE 
                nama LIKE '%$keyword%' OR
                NIP LIKE '%$keyword%'";

    return query_pengajar($query);
}

// upload-pengajar
function upload_pengajar() {
    $filename = $_FILES['foto']['name'];
    $size = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpname = $_FILES['foto']['tmp_name'];


    $EkstensionValidImage = ['jpg', 'jpeg', 'png'];
    $EkstensionImage = explode('.', $filename);
    $EkstensionImage = strtolower(end($EkstensionImage));

    if (!in_array($EkstensionImage, $EkstensionValidImage)) {
        echo "<script>
                alert('Gambar yang anda upload tidak valid!');        
            </script>";
        return false;
    }

    if( $size > 3000000) {
        echo "<script>
                alert('Ukuran gambar tidak bisa diatas 3MB!');        
            </script>";
        return false;
    }

    $newfilename = uniqid();
    $newfilename .= '.';
    $newfilename .= $EkstensionImage; 

    move_uploaded_file($tmpname, '../../img/pengajarimg/' . $newfilename);

    return $newfilename;

}

//registration-pengajar
function registration_pengajar($signup) {
    global $cdb;

    $username = strtolower(stripcslashes($signup["username"]));
    $password = mysqli_real_escape_string($cdb, $signup["password"]);
    $password2 = mysqli_real_escape_string($cdb, $signup["password2"]);

    if( $password !== $password2 ) {
        echo "<script>
                alert('Password Tidak sama');
             </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $sign_up = "INSERT INTO account_pengajar
                                (`username`, `password`) 
                                VALUES 
                                ('$username', '$password')";

    mysqli_query($cdb, $sign_up);

    return mysqli_affected_rows($cdb);

}


// 
// END-PENGAJAR
// 


// 
// SISWA
// 

// show
function query_siswa($query) {
    global $cdb;
    $result = mysqli_query($cdb, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


// add-siswa
function add_siswa($data) {
    global $cdb;
    $nis = htmlspecialchars($data["NIS"]);
    $nama = htmlspecialchars($data["nama"]);
    
    $gambar = upload_siswa();

    if (!$gambar) {
        return false;
    }

    $add = "INSERT INTO siswa 
                        (`NIS`, `nama`, `foto`) 
                        VALUES 
                        ('$nis', '$nama', '$gambar')
            ";
    mysqli_query($cdb, $add);
    return mysqli_affected_rows($cdb);
}


// delete-siswa
function delete_siswa($siswa) {
    global $cdb;
    mysqli_query($cdb, "DELETE FROM siswa WHERE id=$siswa");

    return mysqli_affected_rows($cdb);
}


=======
>>>>>>> 27f1f5ecdc82d207cf7540810f737f9cd9742592
// update-siswa
function update_siswa($update) {
    global $cdb;
    $id = $update["id"];
    $nis = htmlspecialchars($update["NIS"]);
    $nama = htmlspecialchars($update["nama"]);
<<<<<<< HEAD
    $oldfoto = $update["oldfoto"];


    if( $_FILES['foto']['error'] === 4) {
        $foto = $oldfoto;

    } else {
        $foto = upload_siswa();
    }
=======
    $foto = htmlspecialchars($update["foto"]);
>>>>>>> 27f1f5ecdc82d207cf7540810f737f9cd9742592

    $update = "UPDATE siswa SET 
                NIS = '$nis',
                nama = '$nama',
                foto = '$foto'
            WHERE id = $id
            ";
    mysqli_query($cdb, $update);

    return mysqli_affected_rows($cdb);
}


<<<<<<< HEAD
// search-siswa
function search_siswa($keyword) {
    $query = " SELECT * FROM siswa
                WHERE 
                nama LIKE '%$keyword%' OR
                NIS LIKE '%$keyword%'";

    return query_siswa($query);
}

// upload-siswa
function upload_siswa() {
    $filename = $_FILES['foto']['name'];
    $size = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpname = $_FILES['foto']['tmp_name'];


    $EkstensionValidImage = ['jpg', 'jpeg', 'png'];
    $EkstensionImage = explode('.', $filename);
    $EkstensionImage = strtolower(end($EkstensionImage));

    if (!in_array($EkstensionImage, $EkstensionValidImage)) {
        echo "<script>
                alert('Gambar yang anda upload tidak valid!');        
            </script>";
        return false;
    }

    if( $size > 3000000) {
        echo "<script>
                alert('Ukuran gambar tidak bisa diatas 3MB!');        
            </script>";
        return false;
    }

    $newfilename = uniqid();
    $newfilename .= '.';
    $newfilename .= $EkstensionImage; 

    move_uploaded_file($tmpname, '../../img/siswaimg/' . $newfilename);

    return $newfilename;

}

function registration_siswa($signup) {
    global $cdb;

    $username = strtolower(stripcslashes($signup["username"]));
    $password = mysqli_real_escape_string($cdb, $signup["password"]);
    $password2 = mysqli_real_escape_string($cdb, $signup["password2"]);

    if( $password !== $password2 ) {
        echo "<script>
                alert('Password Tidak sama');
             </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $sign_up = "INSERT INTO account_user
                                (`username`, `password`) 
                                VALUES 
                                ('$username', '$password')";

    mysqli_query($cdb, $sign_up);

    return mysqli_affected_rows($cdb);

}

// 
// END-SISWA
// 
=======
>>>>>>> 27f1f5ecdc82d207cf7540810f737f9cd9742592

?>