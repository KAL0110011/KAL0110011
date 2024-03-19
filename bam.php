<?php
$nama = "irfan";
$bam = false ;
if(isset($_POST["pagi"])){
    $bam = "selamat pagi ";
}elseif(isset($_POST["siang"])){
    $bam = "selamat siang ";
}elseif(isset($_POST["sore"])){
    $bam = "selamat sore ";
}elseif(isset($_POST["malam"])){
    $bam = "selamat malam ";
}

if (isset($_POST["ulangi"])) {
    $bam = false ;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
</head>
<body>
    <form action="" method="post">
      <?php if($bam): ?>
        <h1><?= $bam.$nama ?></h1>
        <button type="submit" name="ulangi">ulangi</button>
      <?php else:  ?>
        <h1>pilih waktu </h1>
        <button type="submit" name="pagi">pagi</button>
        <button type="submit" name="siang">siang</button>
        <button type="submit" name="sore">sore</button>
        <button type="submit" name="malam">malam</button>
      <?php endif ?>
    </form>
</body>
</html>