<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do While Loops</title>
</head>
<body>
    <h1>While Loop</h1>
    <?php
        $grade=0;
        while ($grade<10) {
          echo "I am less than 10";
          echo '<br/>';
          $grade++;
        }

        echo "Exit Loop";
    ?>

    <h1>Do While Loop</h1>
    <?php
     do {
         echo "<p>I am dowhile loop</p>";
     } while ($grade<= 10);
    ?>
</body>
</html>