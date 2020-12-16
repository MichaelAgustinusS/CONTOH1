<!DOCTYPE html>
<html>
<head>
    <title>Pendataan Karyawan</title>
</head>

<body>
    <header>
        <h3>Formulir Pendataan Karyawan</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="Nickname" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="nm_jabatan">Jabatan: </label>
            <select name="nm_jabatan">
                <option>Mahir</option>
                <option>Penyelia</option>
                <option>Terampil</option>
                <option>Ahli Utama</option>
                <option>Ahli Madya</option>
                <option>Ahli Muda</option>
                <option>Ahli Pertama</option>
                <option>Semua Jenjang</option>
            </select>
        </p>
        <p>
            <label for="nm_unsur">Unsur: </label>
            <select name="nm_unsur">
                <option>Tata Kelola dan Tata Laksana Teknologi Informasi</option>
                <option>Infrastruktur Teknologi Informasi</option>
                <option>Sistem Informasi dan Multimedia</option>
                <option>Pengembangan Profesi</option>
                <option>Penunjang Kegiatan Teknologi Informasi Berbasis Komputer</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>