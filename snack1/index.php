<?php
  // Code

  // Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”
  // altrimenti stampare una stringa rossa.

  $password = $_GET["password"];
  if ($password == 'Boolean') {
    $class = 'green';
    $message = 'Password Boolean Ok';
  } else {
    $class = 'red';
    $message = 'Try another password';
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
    .green {color:green;}
    .red {color:red;}
  </style>
</head>
<body>
  <p>Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”<br>
  altrimenti stampare una stringa rossa.</p>

  <h3 class="<?php echo $class ?>"><?php echo $message ?></h3>

</body>
</html>
