<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    table {
      border-collapse: collapse;
    }

    tr,
    td {
      border: 1px solid black;
    }
  </style>
  <title>Document</title>
</head>

<body>
  <table>
    <?php
    for ($i = 1; $i <= 9; $i++) {
      echo '<tr>';
      for ($j = 1; $j <= 9; $j++) {
        echo '<td>' . $i * $j . '</td>';
      }
      echo '</tr>';
    }
    ?>
  </table>
</body>

</html>