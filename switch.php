<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $nilai = "B";

    switch ($nilai){
        case "A": echo "anda lulus dengan sangat baik";
        break;
        case "B": echo "anda lulus";
        break;
        case "C": echo "anda lulus";
        break;
        case "D": echo "anda tidak lulus";
        break;
        default: echo "anda salah jurusan";
    }

    $gender = "laki-laki";

    // $hi = $gender=="pria" ? "hi bro" : "hi nona";
    $hi = $gender=="wanita" ? "hi nona" : ($gender=="pria" ? "hi bro" : "hi");

    echo $hi;

    // if ($gender ==  "pria"){
    //     echo "hi bro";
    //     }else{
    //         echo "hi nona";
    //     }

    ?>
</body>
</html>