<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Studi Kasus Level 2 | PHP</title>
</head>
<body>
     <form action="level2.php" method="post">
          <?php
          for ($i=1; $i < 101; $i++) { 
               $isi = $i;

               echo '
               <label for="bil'.$i.'">Bilangan '.$i.'</label>
               <input type="text" name="bil'.$i.'" value="'.$isi.'" id="bil'.$i.'"><hr>
               ';
          }
          ?>

          <button type="submit" name="kirim">Submit</button>
     </form>
</body>
</html>


<?php
if (isset($_POST['kirim'])) {
          for ($i=1; $i < 101 ; $i++) { 
               // $bilangan[$i] = $_POST['bil' . $i];
               $data[$i] = $_POST['bil' .$i];

               $result = max($data);
          }

          die("Bilangan Terbesar adalah $result");
}



?>