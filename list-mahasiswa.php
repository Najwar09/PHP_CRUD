<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body>
    
    <nav>
        <a href="form-daftar.php">Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>aksi</th>
            
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM mahasiswa";
        $query = mysqli_query($db, $sql);

        while($pelajar = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$pelajar['nim']."</td>";
            echo "<td>".$pelajar['nama']."</td>";
            

            echo "<td>";
            echo "<a href='form-edit.php?nim=".$pelajar['nim']."'>Edit</a> | ";
            echo "<a href='hapus.php?nim=".$pelajar['nim']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>