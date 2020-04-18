<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer-If Statemetn</title>
</head>
<body>
    <?php
    //An If stmt that will carry out an action based on the vlalueo of variable.

    echo '<h2>If statemetn</h2>';

    $grade=30;

    if($grade>=30)
    {
        echo '<h3>You Have Passed</h3>';
        
    }
    else{
        echo '<h3>You Have failed</h3>';
    }
    ?>
</body>
</html>