<?php
/*
PHP Snack 2:
Passare come parametri GET name, mail e age e
verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti
“Accesso negato”.
*/
$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];

// if (empty($name)) {
//   $message = "Accesso non riuscito";
// } else {
//   if (strlen($name) > 3) {
//     if (strpos($email, "@") !== false && strpos($email, ".") !== false) {
//       $message = "Accesso riuscito";
//     } else {
//       $message = "Accesso non riuscito";
//     }
//   }
// };



if (empty($name)) {
  $message = "Accesso non riuscito";
} else {
  if (strlen($name) > 3) {
    $message = "Accesso riuscito";
  }
};

if (empty($email)) {
  $message = "Accesso non riuscito";
} else {
  if (strpos($email, "@") !== false && strpos($email, ".") !== false) {
    $message = "Accesso riuscito";
  }
};

//
// || empty($email) || empty($age)

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p><?php echo $message; ?></p>
  </body>
</html>
