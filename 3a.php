<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3a</title>
</head>
<body>
    <?php 
    echo 'menghitung luas lingkaran';
    function hitungLuasLingkaran($r){
        echo "jari-jari = $r cm<br>";
        echo "luas lingkaran = " . (3.14 * $r * $r) . "cm²<br>";
    }
    hitungLuasLingkaran(10);
    function hitungKelilingLingkaran($r){
        echo "jari-jari = $r cm<br>";
        echo "luas lingkaran = " . (3.14 * ($r + $r)) . "cm";
    }
    hitungKelilingLingkaran(20);
    ?>
</body>
</html>