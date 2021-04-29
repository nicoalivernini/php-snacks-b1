<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Snack 2</title>
</head>
<body>
<!-- prova: ?name=nico&mail=pasticceria@gmail.com&age=25 -->
  <?php
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
  ?>
  <?php
  //Controllo se c'è la @
  $checkAt = strpos($mail, '@');
  //Controllo se c'è il .
  $checkDot = strpos($mail, '.');
  //Controllo se è un numero
  $checkAge = is_numeric($age);

  //Stampo resoconto
  // var_dump($name, $mail, $age, $checkAt, $checkDot, $checkAge);
   ?>

  <!-- Creo condizione -->
  <?php if (strlen($name) > 3 && $checkAt && $checkDot && $checkAge) { ?>

      <div class="">
        <?=
        // 'Il nome'. ' ' . $name . ' ' . 'è più lungo di 3';
        'Accesso riuscito'
         ?>
      </div>

  <?php } else { ?>

    <div class="">
      <?=
        'Accesso negato'
        ?>
    </div>

  <?php } ?>

</body>
</html>
