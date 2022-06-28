<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studi kasus Levek 1B | PHP</title>
    <style>
        h2 {
            text-align: center;
            text-transform: uppercase;
        }
        h3 {
            text-align: center;
        }
    </style>
</head>    
<body>
    <div class="header">
        <h2>Studi kasus level 1</h2>
        <h3>Input tiga bilangan dan cetak bilangan dengan nilai terbesar</h3>
    </div>
    <form action="level1B.php" method="post" autocomplete="off">
        <label for="1" >Masukan Bilangan 1</label>
        <input type="text" name="bil1" id="1">
        <br/>
        <label for="2" >Masukan Bilangan 2</label>
        <input type="text" name="bil2" id="2">
        <br/>
        <label for="3">Masukan Bilangan 3</label>
        <input type="text" name="bil3" id="3">
        <br/>
        <input type="submit" name ="hitung" value="Hitung">
    </form>
    <?php
        if(isset($_POST['hitung'])) {
            $bil1=$_REQUEST['bil1'];
            $bil2=$_REQUEST['bil2'];
            $bil3=$_REQUEST['bil3'];

            $hasil = max($bil1, $bil2, $bil3);
            echo "<h3><center>Bilangan Terbesar Adalah $hasil</center><h3>";

}
?>
</body>
</html>

