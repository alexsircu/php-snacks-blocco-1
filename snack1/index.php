<?php
/*
PHP Snack 1:
Creiamo un array 'matches' contenente altri array i
quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra
ospite, punti fatti dalla squadra di casa e punti fatti
dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo
schema:
Olimpia Milano - Cantù | 55 - 60
*/
$matches = [
  "1" => [
    "home_team" => "Detroit Pistons",
    "away_team" => "Boston Cetics",
    "home_points" => "117",
    "away_points" => "113"
  ],
  "2" => [
    "home_team" => "L.A. Lakers",
    "away_team" => "G.S. Warriors",
    "home_points" => "124",
    "away_points" => "119"
  ],
  "3" => [
    "home_team" => "Chicago Bulls",
    "away_team" => "Philadelphia 76ers",
    "home_points" => "100",
    "away_points" => "95"
  ],
  "4" => [
    "home_team" => "Trail Blazers",
    "away_team" => "Jazz",
    "home_points" => "103",
    "away_points" => "96"
  ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <ul>
    <?php
      for ($i=1; $i <= count($matches); $i++) {
        echo "<li>".$matches[$i]["home_team"]." - ".$matches[$i]["away_team"]." | ".$matches[$i]["home_points"]." - ".$matches[$i]["away_points"]."</li>";
      }
    ?>
  </ul>
</body>
</html>
