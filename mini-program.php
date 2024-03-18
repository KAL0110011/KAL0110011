<?php 
if(!empty($_POST)){
    $user = $_POST["user"];
    $com = rand(1,3);
    if($com === 1){
        $com = "kertas";
    }elseif($com === 2){
        $com = "batu";
    }else{
        $com = "gunting";
    }

    if($user === $com){
        $hasil = "hasilnya seri";
    }elseif($user === "kertas"){
        $hasil = ($com === "gunting") ?"anda kalah" :"anda menang" ;
    }elseif($user === "batu"){
        $hasil = ($com === "kertas") ?"anda kalah" :"anda menang" ;
    }elseif($user === "gunting"){
        $hasil = ($com === "batu") ?"anda kalah" :"anda menang" ;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mini-program</title>
</head>
<body>
  <center>
    <h1>ini adalah game suit ,klik pilihan anda!</h1>
    <br><br><br>
    <?php if(isset($user)): ?>
        <?= "anda memilih ". $user;?>
        <br>
        <?= "computer memilih ".$com;?>
        <br>
        <?= $hasil; ?>
    <?php endif ?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <form action="" method="post">
        <button type="submit" name="user" value="kertas">kertas</button>
        <button type="submit" name="user" value="gunting">gunting</button>
        <button type="submit" name="user" value="batu">batu</button>
    </form>
   </center>
</body>
</html>