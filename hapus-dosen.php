<?php

include("config.php");

if( isset($_GET['nidn']) ){

    // ambil id dari query string
    $nidn = $_GET['nidn'];

    // buat query hapus
    $sql = "DELETE FROM dosen WHERE nidn=$nidn";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list-dosen.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>