<?php
session_start();

$levels = ["easy","normal","hard"];

function suit($user,$com){
    if($user === $com){
        return "hasilnya seri";
    }elseif($user === "kertas"){
        return ($com === "gunting") ?"anda kalah" :"anda menang" ;
    }elseif($user === "batu"){
        return ($com === "kertas") ?"anda kalah" :"anda menang" ;
    }elseif($user === "gunting"){
        return ($com === "batu") ?"anda kalah" :"anda menang" ;
    }
}

if(isset($_POST["mulai"])){
    $_SESSION['level'] = $_POST["level"];
}

if(isset($_POST["user"])){
    $user = $_POST["user"];
    if($_SESSION["level"] === "easy"){
        if($user === "kertas"){
            $com = rand(1,10);
            if($com === 6){
                $com = "gunting";
            }elseif($com === 3 || $com === 8){
                $com = "kertas";
            }else{
                $com = "batu";
            }
        }elseif($user === "gunting"){
            $com = rand(1,10);
            if($com === 6){
                $com = "batu";
            }elseif($com === 3 || $com === 8){
                $com = "gunting";
            }else{
                $com = "kertas";
            }
        }else{
            $com = rand(1,10);
            if($com === 6){
                $com = "kertas";
            }elseif($com === 3 || $com === 8){
                $com = "batu";
            }else{
                $com = "gunting";
            }
        }

        $hasil = suit($user,$com);
    }elseif($_SESSION["level"] === "normal"){
        $com = rand(1,3);
        if($com === 1){
            $com = "kertas";
        }elseif($com === 2){
            $com = "batu";
        }else{
            $com = "gunting";
        }

        $hasil = suit($user,$com);
    }elseif($_SESSION["level"] === "hard"){
        if($user === "kertas"){
            $com = rand(1,10);
            if($com === 6){
                $com = "batu";
            }elseif($com === 3 || $com === 8){
                $com = "kertas";
            }else{
                $com = "gunting";
            }
        }elseif($user === "gunting"){
            $com = rand(1,10);
            if($com === 6){
                $com = "kertas";
            }elseif($com === 3 || $com === 8){
                $com = "gunting";
            }else{
                $com = "batu";
            }
        }else{
            $com = rand(1,10);
            if($com === 6){
                $com = "gunting";
            }elseif($com === 3 || $com === 8){
                $com = "batu";
            }else{
                $com = "kertas";
            }
        }

        $hasil = suit($user,$com);
    }
}

if(isset($_POST["kembali"])){
    session_unset();
    $level = false ;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>game suit</title>
</head>
<body>
<form action="" method="post">
  <center>
    <?php if(!isset($_SESSION["level"])): ?>
        <h1>Selamat datang di game suit</h1>
        <br>
        <h3>pilih level</h3>
        <?php foreach($levels as $lev): ?>
            <input type="radio" name="level" value="<?= $lev;?>" id="<?= $lev;?>">
            <label for="<?= $lev;?>"><?= $lev;?></label>
            <br>
        <?php endforeach ?>
        <br>
        <button type="submit" name="mulai">mulai</button>
    <?php else: ?>   
        <?php if(isset($user)): ?>
            <?= "anda memilih ". $user;?>
            <br>
            <?= "computer memilih ".$com;?>
            <br>
            <?= $hasil; ?>
            <button type="submit" name="lagi">lagi</button>
        <?php endif ?>
        <h1>pilih pilihan anda!</h1>
        <br><br><br>
            <button type="submit" name="user" value="kertas">kertas</button>
            <button type="submit" name="user" value="gunting">gunting</button>
            <button type="submit" name="user" value="batu">batu</button>
            <br><br><br>
            <button type="submit" name="kembali">kembali</button>
    <?php endif ?>
  </center>
</form>
</body>
</html>