<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch stmt</title>
</head>
<body>

    <h1>Switch stmts</h1>
    <?php

     $grade='A';

     switch($grade)
     {
         case 'A':
                echo '<h2 style="color:green">You are a superstar</h2>';
                break;

        case 'B':
                echo '<h2 style="color:blue">You did well</h2>';
                break;
        
        
        default:
                echo '<h2 style="color:red">You have failed/h2>';
                break;

     }
     ?>
    
</body>
</html>