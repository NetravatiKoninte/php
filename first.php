<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>PHP Primer</title>
</head>
<body>

<h2>Follow each link to the page example</h2>
<ul>
    <li><a href="array.php">Simple array and printouts</a></li>
    <li><a href="for.php">for loop</a></li>
    <li><a href="do while loop.php">Do while </a></li>
    <li><a href="dowhile.php">while loop</a></li>
    <li><a href="ifstmt.php">If else stmts</a></li>
    <li><a href="switch.php">switch stmt</a></li>
</ul>
<h1>Hello World</h1>
<?php

echo "Hello PHP";
echo '<br/>';
echo "Second Line";

?>

<?php
$name="Anamika";
echo $name;

$age=24;
echo '<h1>My Name is  ' .$name. '</h1>';
echo '<h1>My age is  ' .$age. '</h1>';



?>

<button type="button" class="btn btn-dark">CLICK ME</button>
<button type="button" class="btn">Basic</button>
<button type="button" class="btn btn-default">Default</button>
<button type="button" class="btn btn-primary">Click here</button>


</body>
</html>