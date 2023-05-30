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
        Bilangan pertama
        <input type="number" name="angka1">
        <select name="aritmatika">
            <option value="Tambah"> + </option>
            <option value="Kurang"> - </option>
            <option value="Kali"> x </option>
            <option value="Bagi"> : </option>
            <option value="Modulus"> % </option>
        </select>
        Bilangan kedua
        <input type="number" name="angka2">
        <input type="submit" value="Kirim" name="kirim">
    </form>
</body>

</html>

<?php
include 'kalibataku.php';
$kalku = new Kalibataku;

if (isset($_POST['kirim'])) {
    $x = $_POST['angka1'];
    $y = $_POST['angka2'];

    if ($x !== '' && $y !== '') {
        if ($_POST['aritmatika'] == "Tambah") {
            $hasil = $kalku->setTambah($x, $y);
            echo "Hasil dari $x + $y adalah = " . $kalku->setTambah($x, $y);
        } elseif ($_POST['aritmatika'] == "Kurang") {
            $hasil = $kalku->setKurang($x, $y);
            echo "Hasil dari $x - $y adalah = " . $kalku->setKurang($x, $y);
        } elseif ($_POST['aritmatika'] == "Kali") {
            $hasil = $kalku->setKali($x, $y);
            echo "Hasil dari $x x $y adalah = " . $kalku->setKali($x, $y);
        } elseif ($_POST['aritmatika'] == "Bagi") {
            $hasil = $kalku->setBagi($x, $y);
            echo "Hasil dari $x : $y adalah = " . $kalku->setBagi($x, $y);
        } elseif ($_POST['aritmatika'] == "Modulus") {
            $hasil = $kalku->setModulus($x, $y);
            echo "Hasil dari $x % $y adalah = " . $kalku->setModulus($x, $y);
        }
    } else {
        echo '<script>alert("Tolong masukkan nilai!");</script>';
    }

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