<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['nidn']) ){
    header('Location: list-dosen.php');
}

//ambil id dari query string
$nidn = $_GET['nidn'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM dosen WHERE nidn=$nidn";
$query = mysqli_query($db, $sql);
$pengajar = mysqli_fetch_assoc($query);

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


    <form action="proses-edit-dosen.php" method="POST">

        <fieldset>

            <input type="hidden" name="nidn" value="<?php echo $pengajar['nidn'] ?>" />

        <p>
            <label for="nama">Nidn: </label>
            <input type="text" name="nidn" value="<?php echo $pengajar['nidn'] ?>" />
        </p>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" value="<?php echo $pengajar['nama'] ?>" />
        </p>
        <p>
            <label for="nama">alamat: </label>
            <input type="text" name="alamat" value="<?php echo $pengajar['alamat'] ?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>