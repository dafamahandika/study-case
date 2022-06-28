<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studi kasus Levek 1A | PHP</title>
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
    <p>Input dua bilangan dan cetak bilangan dengan nilai terbesar</p>
    <form action="level1A.php" method="post">
        <label>Masukan Bilangan 1</label>
        <input type="text" name="bil1">
        <br/>
        <label>Masukan Bilangan 2</label>
        <input type="text" name="bil2">
        <br/>
        <input type="submit" name ="hitung"value="Hitung">
    </form>
</body>
</html>

<?php
if(isset($_POST['hitung'])) {
    $bil1=$_REQUEST['bil1'];
    $bil2=$_REQUEST['bil2'];
    if($bil1 > $bil2) {
        echo "$bil1 BILANGAN TERBESAR";
    }else{
        echo "$bil2 BILANGAN TERBESAR";
    }
}       
?>