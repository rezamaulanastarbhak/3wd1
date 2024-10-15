<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Menghitung berat badan ideal</h1>
    <form action="" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>
        <label for="gender">jenis kelamin:</label>
        <input type="radio" id="laki-laki" name="gender" value="laki-laki">
        <label for="laki-laki">Laki-laki</label>
        <input type="radio" id="perempuan" name="gender" value="perempuan">
        <label for="perempuan">Perempuan</label><br><br>
        <label for="tinggi">Tinggi badan (cm):</label>
        <input type="number" id="tinggi" name="tinggi" required><br>
        <input type="submit" value="hitung">
        </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      //deklarasi input 
      $nama = $_POST['nama'];
      $gender = $_POST['gender'];
      $tb = $_POST['tinggi'];

      //deklarasi proses 
      $bbideal = ($tb-100)-(($tb-100)*0.1);

    // deklarasi output 
    echo "nama saya ".$nama."<br>";
    echo "jenis kelamin ".$gender."<br>";
    echo "tinggi badan ".$tb."cm <br>";
    echo "berat badan ideal ".$bbideal."kg <br>";
    //echo $bbideal;
    }
    ?>
</body>
</html>