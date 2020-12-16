<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-karyawan.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM karyawan WHERE id=$id";
$query = mysqli_query($db, $sql);
$joki = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Pendataan Karyawan</title>
</head>

<body>
    <header>
        <h3>Edit Data Karyawan</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $joki['id'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="Nickname" value="<?php echo $joki['nama'] ?>" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"><?php echo $joki['alamat'] ?></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <?php $jk = $joki['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
        </p>
        <p>
            <label for="nm_jabatan">Rank: </label>
            <?php $nj = $joki['nm_jabatan']; ?>
            <select name="nm_jabatan">
                <option <?php echo ($nj == 'Mahir') ? "selected": "" ?>>Mahir</option>
                <option <?php echo ($nj == 'Penyelia') ? "selected": "" ?>>Penyelia</option>
                <option <?php echo ($nj == 'Terampil') ? "selected": "" ?>>Terampil</option>
                <option <?php echo ($nj == 'Ahli Utama') ? "selected": "" ?>>Ahli Utama</option>
                <option <?php echo ($nj == 'Ahli Madya') ? "selected": "" ?>>Ahli Madya</option>
                <option <?php echo ($nj == 'Ahli Muda') ? "selected": "" ?>>Ahli Muda</option>
                <option <?php echo ($nj == 'Ahli Pertama') ? "selected": "" ?>>Ahli Pertama</option>
                <option <?php echo ($nj == 'Semua Jenjang') ? "selected": "" ?>>Semua Jenjang</option>
            </select>
        </p>
         <p>
            <label for="nm_unsur">Rank: </label>
            <?php $nu = $joki['nm_unsur']; ?>
            <select name="nm_unsur">
                <option <?php echo ($nu == 'Tata Kelola dan Tata Laksana Teknologi Informasi') ? "selected": "" ?>>Tata Kelola dan Tata Laksana Teknologi Informasi</option>
                <option <?php echo ($nu == 'Infrastruktur Teknologi Informasi') ? "selected": "" ?>>Infrastruktur Teknologi Informasi</option>
                <option <?php echo ($nu == 'Sistem Informasi dan Multimedia') ? "selected": "" ?>>Sistem Informasi dan Multimedia</option>
                <option <?php echo ($nu == 'Pengembangan Profesi') ? "selected": "" ?>>Pengembangan Profesi</option>
                <option <?php echo ($nu == 'Penunjang Kegiatan Teknologi Informasi Berbasis Komputer') ? "selected": "" ?>>Penunjang Kegiatan Teknologi Informasi Berbasis Komputer</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>