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
            echo "Hasil dari $x + $y adalah = " . $kalku->setTambah($x, $y);
        } elseif ($_POST['aritmatika'] == "Kurang") {
            echo "Hasil dari $x - $y adalah = " . $kalku->setKurang($x, $y);
        } elseif ($_POST['aritmatika'] == "Kali") {
            echo "Hasil dari $x x $y adalah = " . $kalku->setKali($x, $y);
        } elseif ($_POST['aritmatika'] == "Bagi") {
            echo "Hasil dari $x : $y adalah = " . $kalku->setBagi($x, $y);
        } elseif ($_POST['aritmatika'] == "Modulus") {
            echo "Hasil dari $x % $y adalah = " . $kalku->setModulus($x, $y);
        }
    } else {
        echo '<script>alert("Tolong masukkan nilai!");</script>';
    }
}
?>