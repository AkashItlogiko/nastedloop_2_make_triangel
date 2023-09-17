<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
https://youtu.be/DjtWDD8LTsY?si=3i-hGrpsGbGGG-Qk
$n = 4;

// n = 4, i = 1, 2, 3, 4

for ($i = 1; $i <= $n; $i++) {

    // n = 4, i = 1, j = 1, 2, 3, 4, 5, 6, 7
    // n = 4, i = 2, j = 1, 2, 3, 4, 5, 6, 7

    for ($j = 1; $j <= (2 * $n) - 1; $j++) {

        // n = 4, i = 1, j = 1, 1 => 4 && 1 <= 4
        // n = 4, i = 1, j = 2, 2 => 4 && 2 <= 4
        // n = 4, i = 1, j = 3, 3 => 4 && 3 <= 4
        // n = 4, i = 1, j = 4, 4 => 4 && 4 <= 4, *
        // n = 4, i = 1, j = 5, 5 => 4 && 5 <= 4
        // n = 4, i = 1, j = 6, 6 => 4 && 6 <= 4
        // n = 4, i = 1, j = 7, 7 => 4 && 7 <= 4
        
        // n = 4, i = 2, j = 1, 1 => 3 && 1 <= 5
        // n = 4, i = 2, j = 2, 2 => 3 && 2 <= 5
        // n = 4, i = 2, j = 3, 3 => 3 && 3 <= 5, *
        // n = 4, i = 2, j = 4, 4 => 3 && 4 <= 5, *
        // n = 4, i = 2, j = 5, 5 => 3 && 5 <= 5, *
        // n = 4, i = 2, j = 6, 6 => 3 && 6 <= 5
        // n = 4, i = 2, j = 7, 7 => 3 && 7 <= 5

        if ($j >= $n - ($i - 1) && $j <= $n + ($i - 1)) {

            echo "*";

        } else {

            echo "&nbsp;&nbsp;";

        }

    }

    echo "<br/>";

}

?>
</body>
</html>
