<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendataan Karyawan</title>
</head>

<body>
    <header>
        <h3>Karyawan yang sudah mendata</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Jabatan</th>
            <th>Unsur</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM karyawan";
        $query = mysqli_query($db, $sql);

        while($joki = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$joki['id']."</td>";
            echo "<td>".$joki['nama']."</td>";
            echo "<td>".$joki['alamat']."</td>";
            echo "<td>".$joki['jenis_kelamin']."</td>";
            echo "<td>".$joki['nm_jabatan']."</td>";
            echo "<td>".$joki['nm_unsur']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$joki['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$joki['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>