<?php 
// Database connect
$cdb = mysqli_connect('localhost', 'root', '', 'sokuni') or die('Connection Failed');

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

function query_siswa($query) {
    global $cdb;
    $result = mysqli_query($cdb, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


// add-pengajar
function add_pengajar($data) {
    global $cdb;
    $nip = htmlspecialchars($data["NIP"]);
    $nama = htmlspecialchars($data["nama"]);
    $gambar = htmlspecialchars($data["foto"]);

    $add = "INSERT INTO pengajar 
                        (`NIP`, `nama`, `foto`) 
                        VALUES 
                        ('$nip', '$nama', '$gambar')
            ";
    mysqli_query($cdb, $add);
    return mysqli_affected_rows($cdb);
}

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

// delete-pengajar
function delete_pengajar($id) {
    global $cdb;
    mysqli_query($cdb, "DELETE FROM pengajar WHERE id = $id");

    return mysqli_affected_rows($cdb);
}

// delete-siswa
function delete_siswa($siswa) {
    global $cdb;
    mysqli_query($cdb, "DELETE FROM siswa WHERE id=$siswa");

    return mysqli_affected_rows($cdb);
}

// Update-pengajar
function update_pengajar($update) {
    global $cdb;
    $id = $update["id"];
    $nip = htmlspecialchars($update["NIP"]);
    $nama = htmlspecialchars($update["nama"]);
    $foto = htmlspecialchars($update["foto"]);

    $update = "UPDATE pengajar SET 
                NIP = '$nip',
                nama = '$nama',
                foto = '$foto'
            WHERE id = $id
            ";
    mysqli_query($cdb, $update);

    return mysqli_affected_rows($cdb);
}

// update-siswa
function update_siswa($update) {
    global $cdb;
    $id = $update["id"];
    $nis = htmlspecialchars($update["NIS"]);
    $nama = htmlspecialchars($update["nama"]);
    $foto = htmlspecialchars($update["foto"]);

    $update = "UPDATE siswa SET 
                NIS = '$nis',
                nama = '$nama',
                foto = '$foto'
            WHERE id = $id
            ";
    mysqli_query($cdb, $update);

    return mysqli_affected_rows($cdb);
}



?>