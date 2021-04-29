<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Snack 3</title>
</head>
<body>
  <!-- Creare un array di array.
  Ogni array figlio avrà come chiave una data in questo formato: DD/MM/YYYY
  (ad es 31/01/2007) e come valore un array di post associati a quella data.
  Stampare ogni data con i relativi post. -->

  <?php
    $messages = [
      '01/01/2021' => [
        'title' => 'Post 1',
        'author' => 'Pippo',
        'text' => 'Testo del post numero 1 creato da Pippo'
      ],
      '02/01/2021' => [
        'title' => 'Post 2',
        'author' => 'Pluto',
        'text' => 'Testo del post numero 2 creato da Pluto'
      ],
      '03/01/2021' => [
        'title' => 'Post 3',
        'author' => 'Topolino',
        'text' => 'Testo del post numero 3 creato da Topolino'
      ],
    ];
   ?>

   <?php
   for ($i = 1; $i < count($messages) + 1 ; $i++) {
     ?>
     <div>
        <?= 'Date:'. ' ' . array_keys($messages)[$i - 1] . '<br>'  ?>
        <?= 'Title:'. ' ' . $messages['0'.$i.'/01/2021']['title'] . '<br>' ?>
        <?= 'Author:'. ' ' . $messages['0'.$i.'/01/2021']['author'] . '<br>' ?>
        <?= 'Text:'. ' ' . $messages['0'.$i.'/01/2021']['text'] . '<br>' ?>
     </div>
   <?php } ?>


</body>
</html>
