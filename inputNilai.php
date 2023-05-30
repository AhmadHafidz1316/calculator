<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="#" method="post">
        Nilai pertama
        <input type="number" name="angka1">
        <br>
        Nilai kedua
        <input type="number" name="angka2">
        <br>
        Nilai ketiga
        <input type="number" name="angka3">
        <input type="submit" value="Kirim" name="kirim">
    </form>
</body>

</html>

<?php
include 'tambahan.php';
$kalku = new Kalibataku;

if (isset($_POST['kirim'])) {
    $x = $_POST['angka1'];
    $y = $_POST['angka2'];
    $z = $_POST['angka3'];


    $hasil = $kalku->setRataRata($x, $y, $z);
    echo " Jumlah " . $kalku->setTambah($x, $y, $z);
    echo '<br>';
    echo " Rata - Rata " . $kalku->setRataRata($x, $y, $z);


    echo '<br>';
    if ($hasil >= 90 && $hasil <= 100) {
        echo "Mendaptakan Nilai A";
    } elseif ($hasil >= 80 && $hasil <= 89) {
        echo "Mendapatkan Nilai B";
    } elseif ($hasil >= 70 && $hasil <= 79) {
        echo "Mendapatkan Nilai C";
    } elseif ($hasil >= 0 && $hasil <= 69) {
        echo "Mendapatkan Nilai D";
    } else {
        echo "Nilai Tidak Dapat mendapatkan grade";
    }
}

?>