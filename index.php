<?php
require_once "koneksi.php";
require_once "classes/mobil.php";
require_once "classes/motor.php";

if (isset($_POST['simpan'])) {
    $jenis = $_POST['jenis'];
    $merk = $_POST['merk'];
    $warna = $_POST['warna'];

    if ($jenis === "Mobil") {
        $jumlah_pintu = $_POST['jumlah_pintu'];
        $mobil = new Mobil($merk, $warna, $jumlah_pintu);
        $merkMobil = $mobil->getMerk();
        $warnaMobil =  $mobil->getWarna();
        $jmlPintu = $mobil->getJmlPintu();
        $insert = mysqli_query($koneksi, "INSERT INTO kendaraan (jenis, merk, warna, jumlah_pintu) VALUES ('$jenis', '$merkMobil', '$warnaMobil', '$jmlPintu') ");
    } else {
        $jenis_motor = $_POST['jenis_motor'];
        $motor = new Motor($merk, $warna, $jenis_motor);
        $merkMotor = $motor->getMerk();
        $warnaMotor =  $motor->getWarna();
        $jenisMotor = $mobil->getJenisMotor();
        $insert = mysqli_query($koneksi, "INSERT INTO kendaraan (jenis, merk, warna, jenis_motor) VALUES ('$jenis', '$merkMotor', '$warnaMotor', '$jenisMotor') ");
    }
    if ($insert) {
        header("location:index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Input Kendaraan</h2>
    <form action="" method="post">
        <label for="">Jenis</label>
        <select name="jenis" onchange="cariJenis(this.value)" required>
            <option value="">-PILIH JENIS-</option>
            <option value="Mobil">Mobil</option>
            <option value="Motor">Motor</option>
        </select><br><br>
        <label for="">Merk : </label>
        <input type="text" name="merk" required><br><br>
        <label for="">Warna : </label>
        <input type="text" name="warna" required><br><br>
        <div id="mobilInput" style="display: none;">
            <label for="">Jumlah Pintu</label>
            <input type="text" name="jumlah_pintu"><br><br>
        </div>
        <div id="motorInput" style="display: none;">
            <label for="">Jenis Motor</label>
            <input type="text" name="jenis_motor"><br><br>
        </div>

        <button type="submit" name="simpan">SIMPAN</button>
    </form>

    <script>
        function cariJenis(value) {
            document.querySelector('#mobilInput').style.display = value === "Mobil" ? 'block' : 'none';
            document.querySelector('#motorInput').style.display = value === "Motor" ? 'block' : 'none';
        }
    </script>
</body>

</html>