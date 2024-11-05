<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function say(int $first, int $last){
    $total = $first + $last;
    echo "The sum of $first and $last is $total <br>";
}

function jumlah(int $a, int $b){
    return $a + $b;
}

$total = jumlah(10, 10);
echo $total;

// say("100", "100");
// say(4, 4);
// say(true, false);
// say(1.5, 2.5);
// say("hello", "world");

// function sapa($nama, $gender){
//     if ($gender == "laki-laki"){
//         echo "Hai bro, nama saya $nama and gender adalah $gender <br>";
//         } elseif ($gender == "perempuan"){
//             echo "Hai Sis, nama saya $nama and gender adalah $gender <br>";
//             } else {
//                 echo "Hai, nama saya $nama and gender tidak diketahui <br>";
//             }
//             }

// sapa("Rizky", "laki-laki");
// sapa("Rina", "perempuan");

function cekBilanganGenap($bil){
    if ($bil % 2 == 0){
        return true;
        } else {
        return false;
        }

    $hasil = cekBilanganGenap($bil);
    if ($hasil){
        echo "$bilangan adalah bilangan genap <br>";
    } else {
        echo "$bilangan adalah bilangan ganjil <br>";
    }
}
$bilangan = 10;
cekBilanganGenap($bilangan);
?>
</body>
</html>
