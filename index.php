<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Nilai Student Database Advance</h1>
    <form action="" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>
        <label for="gender">kelas</label>
        <input type="text" id="kelas" name="kelas" required><br><br>
        <label for="tugas">nilai tugas</label>
        <input type="number" id="tugas" name="tugas" required><br><br>
        <label for="projek">nilai projek</label>
        <input type="number" id="projek" name="projek" required><br><br>
        <label for="mt">nilai MT</label>
        <input type="number" id="mt" name="mt" required><br><br>
        <label for="absen">Presensi</label>
        <input type="number" id="presensi" name="presensi" required><br><br>
        <input type="submit" value="hitung">
        <input type="reset" value="reset">
        </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      //deklarasi input 
      $nama = $_POST['nama'];
      $kelas = $_POST['kelas'];
      $tugas = $_POST['tugas'];
      $projek = $_POST['projek'];
      $mt = $_POST['mt'];
      $presensi = $_POST['presensi'];

      //deklarasi proses 
      $total = ($tugas*0.3)+($projek*0.5)+($mt*0.2);

      $ket = ($total >=75 && $presensi >=75) ? "anda lulus" : "anda gagal";

    // deklarasi output 
    echo "nama saya ".$nama."<br>";
    echo "kelas ".$kelas."<br>";
    echo "Nilai tugas ".$tugas. "<br>";
    echo "Nilai projek ".$projek. "<br>";
    echo "Nilai MT ".$mt. "<br>";
    echo "Presensi ".$presensi. "<br>";
    echo "Total nilai ".$total. "<br>";
    echo "<h1>Keterangan ".$ket. "</h1><br>";
    }
    ?>

</body>
</html>
