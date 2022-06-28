<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studi kasus Levek 1C | PHP</title>
    <style>
        h2 {
            text-align: center;
            text-transform: uppercase;
        }
        p {
            text-align: center;
        }
    </style>
</head>    
<body>
    <h2>Studi kasus level 1</h2>
    <p>Input empat bilangan dan cetak bilangan dengan nilai terbesar</p>
    <div>
    <form action="level1C.php" method="post" autocomplete="off">
        <label for="1" >Masukan Bilangan Ke-1</label>
        <input type="text" name="bil1" id="1">
        <br/>
        <label for="2">Masukan Bilangan Ke-2</label>
        <input type="text" name="bil2" id="2">
        <br/>
        <label for="3" >Masukan Bilangan Ke-3</label>
        <input type="text" name="bil3" id="3">
        <br>
        <label for="4" >Masukan Bilangan Ke-4</label>
        <input type="text" name="bil4" id="4"> 
        <br/>
        <button type="submit" name="hitung">Hitung</button>
    </form>
    </div>
</body>
</html>

<?php
if(isset($_POST['hitung'])) {
     // var_dump($_POST);
     
    $bil1=$_REQUEST['bil1'];
    $bil2=$_REQUEST['bil2'];
    $bil3=$_REQUEST['bil3'];
    $bil4=$_REQUEST['bil4'];
    
    $max=max($bil1, $bil2, $bil3, $bil4);
    
    echo "<h3><center>BILANGAN TERBESAR ADALAH $max</center></h3>";
}
?>