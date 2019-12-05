<?php
function compare($numberOne, $numberTwo){
  if ($numberOne > $numberTwo) {
    $result = 'Le premier nombre est plus grand';
  } elseif ($numberOne < $numberTwo) {
    $result = 'Le premier nombre est plus petit';
  } else {
    $result = 'Les deux nombres sont identiques';
  }
  return $result;
};
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP partie4 exo3</title>
  </head>
  <body>
    <p>
      <?php echo compare(10, 10); ?>
    </p>
  </body>
</html>
