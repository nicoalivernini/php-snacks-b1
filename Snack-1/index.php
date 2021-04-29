<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Snacks 1</title>
</head>
<body>
  <?php
  $campionatoBasket = [
    [
      'Casa' => 'Olimpia Milano',
      'Ospite' => 'Cantù',
      'Punti in casa' => '90',
      'Punti ospite' => '88'
    ],
    [
      'Casa' => 'Bergamo',
      'Ospite' => 'La Spezia',
      'Punti in casa' => '78',
      'Punti ospite' => '64'
    ],
    [
      'Casa' => 'Venezia',
      'Ospite' => 'Mestre',
      'Punti in casa' => '84',
      'Punti ospite' => '78'
    ],
  ];

   for ($i=0; $i < count($campionatoBasket); $i++) {
    ?>

    <div class="">
      <?= $campionatoBasket[$i]['Casa']; ?> -
      <?= $campionatoBasket[$i]['Ospite']; ?> |
      <?= $campionatoBasket[$i]['Punti in casa']; ?> -
      <?= $campionatoBasket[$i]['Punti ospite']; ?>
    </div>

  <?php } ?>

</body>
</html>
