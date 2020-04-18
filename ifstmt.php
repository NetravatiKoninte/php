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
        echo '<h3 style ="color :green">You Have Passed</h3>';
        
    }
    else{
        echo '<h3 style="color :red" >You Have failed</h3>';
    }

    $grade='A';
    if($grade=='A')
    {
        echo "<h2 style ='color :green'>You are a superstar</h2>";
    }
    elseif($grade=='B')
    {
        echo "<h2 style='color :blue'>You did well</h2>";
    }
    else
    {
        echo "<h2 style='color :red'>You did well</h2>";
    }
    ?>
</body>
</html>