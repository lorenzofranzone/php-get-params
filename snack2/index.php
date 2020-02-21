<?php
  // Code

  // Passare come parametri GET name, mail e age
  // verificare che
  // name sia più lungo di 3 caratteri,
  // che mail contenga un punto e una chiocciola
  // age sia un numero.
  // Se tutto è ok stampare “Accesso riuscito”
  // altrimenti “Accesso negato”

  // var_dump($_GET);
  $name = $_GET['name'];
  $mail = $_GET['mail'];
  $age = $_GET['age'];

  $message = '';

  if (empty($name) || empty($mail) || empty($age)) {
    $message = 'Accesso negato';
  }
  elseif (strlen($name) <= 3) {
    $message = 'Accesso negato';
  }
  elseif (strpos($mail, '@') === false || strpos($mail, '.') === false) {
    $message = 'Accesso negato';
  }
  elseif (!is_numeric($age)) {
    $message = 'Accesso negato';
  }
  else {
    $message = 'Accesso riuscito';
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Snack 1</title>

  <!-- Custom CSS -->
  <style>

  </style>
</head>
<body>

    <p><?php echo $message ?></p>

</body>
</html>
