<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Snack 4</title>
</head>
<body>

  <?php
    $classe = [
      [
        'nome' => 'Giacomo',
        'cognome' => 'De lillo',
        'voti' => [5, 7, 6]
          //18
        ],
      [
        'nome' => 'Teresa',
        'cognome' => 'Miso',
        'voti' => [3, 8, 5]
          //16
        ],
      [
        'nome' => 'Angelo',
        'cognome' => 'Presi',
        'voti' => [4, 9, 6]
          //19
        ],
    ]
   ?>

   <?php for ($i = 0; $i < count($classe) ; $i++) { ?>

     <div class="">
        <?= $classe[$i]['nome'];?>
        <?=$classe[$i]['cognome'];?> <br>
        <?='La tua media è: ' . array_sum($classe[$i]['voti']) / count($classe[$i]['voti']);?>
     </div>

  <?php } ?>

</body>
</html>
