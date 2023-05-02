<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['nim']) ){
    header('Location: list-mahasiswa.php');
}

//ambil id dari query string
$nim = $_GET['nim'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM mahasiswa WHERE nim=$nim";
$query = mysqli_query($db, $sql);
$pelajar = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body>


    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="nim" value="<?php echo $pelajar['nim'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $pelajar['nama'] ?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>