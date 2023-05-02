<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $nidn = $_POST['nidn'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    
    // buat query update
    $sql = "UPDATE dosen SET nidn='$nidn',nama='$nama',alamat='$alamat' WHERE nidn=$nidn";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-mahasiswa.php
        header('Location: list-dosen.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>