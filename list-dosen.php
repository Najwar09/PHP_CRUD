<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body>
    
    <nav>
        <a href="form-daftar-dosen.php">Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Nidn</th>
            <th>nama</th>
            <th>alamat</th>
            <th>aksi</th>
            
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM dosen";
        $query = mysqli_query($db, $sql);

        while($pengajar = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$pengajar['nidn']."</td>";
            echo "<td>".$pengajar['nama']."</td>";
            echo "<td>".$pengajar['alamat']."</td>";
            

            echo "<td>";
            echo "<a href='form-edit-dosen.php?nidn=".$pengajar['nidn']."'>Edit</a> | ";
            echo "<a href='hapus-dosen.php?nidn=".$pengajar['nidn']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>