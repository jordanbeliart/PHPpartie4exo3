<?php
$numberOne = 10;
$numberTwo = 12;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP partie4 exo3</title>
  </head>
  <body>
    <p>
      <?php
        function compare($numberOne, $numberTwo){
          if ($numberOne > $numberTwo) {
          return 'Le premier nombre est plus grand';
          } elseif ($numberOne < $numberTwo) {
          return 'Le premier nombre est plus petit';
          } else {
          return 'Les deux nombres sont identiques';
          }
        };
        echo compare($numberOne, $numberTwo);
      ?>
    </p>
  </body>
</html>
