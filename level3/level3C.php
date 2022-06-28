<?php

if (isset($_POST ['hitung'])) {
     $s1= $_POST['sisi1'];
     $s2= $_POST['sisi2'];
     $s3= $_POST['sisi3'];

     $sisi= "Segitiga Sama Sisi";
     $kaki= "Segitiga Sama Kaki";
     $sembarang= "Segitiga Sembarang";


     if ($s1 == $s2 && $s2 == $s3 && $s1 == $s3) {
          echo $sisi;
     } elseif ($s1 == $s2 || $s2 == $s3 || $s1 == $s3) {
          echo $kaki;
     } else {
          echo $sembarang;
     }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Studi Kasus Level 3C | PHP</title>
</head>
<body>
     <form action="level3C.php" method="post">
          <label for="s1">Sisi ke-1</label>
          <input type="text" name="sisi1" id="s1">
          <br>
          
          <label for="s2">Sisi ke-2</label>
          <input type="text" name="sisi2" id="s2">
          <br>
          
          <label for="s3">Sisi ke-3</label>
          <input type="text" name="sisi3" id="s3">
          <br>

          <button type="submit" name="hitung">Hitung</button>

     </form>
</body>
</html>