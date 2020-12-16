<!DOCTYPE html>
<html>
<head>
    <title>Pendataan Karyawan</title>
</head>

<body>
    <header>
        <h3>Pendataan Karyawan</h3>
        <h1>DATA KARYAWAN</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-karyawan.php">Pendaftar</a></li>
        </ul>
    </nav>
<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendataan berhasil!";
            } else {
                echo "Pendataan gagal!";
            }
        ?>
    </p>
<?php endif; ?>
    </body>
</html>