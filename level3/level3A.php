<?php
if(isset($_POST['hitung'])) {
     $bil1= $_POST['bil1'];
     $bil2= $_POST['bil2'];
     $bil3= $_POST['bil3'];

     $data= array($bil1, $bil2, $bil3);

     $sort= sort($data);
     for ($i=0; $i < count($data); $i++) { 
          echo $data[$i]. ', ';
     }
}

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Studi Kasus Level 3A | PHP</title>
</head>
<body>
     <form action="level3A.php" method="post">
          <label for="bil1">Bilangan Ke- 1</label>
          <input type="text" name="bil1" id="bil1">
          <br>
          
          <label for="bil2">Bilangan Ke- 2</label>
          <input type="text" name="bil2" id="bil2">
          <br>
          
          <label for="bil3">Bilangan Ke- 3</label>
          <input type="text" name="bil3" id="bil3">
          <br>

          <button type="submit" name="hitung">Hitung</button>
          
     </form>
</body>
</html>