<?php

$title="Index";
include "includes/header.php"
?>

<h1>Hello HTml-PHP Primer</h1>
<br/>

<?php

 echo "Hello PHP";
 echo "<br/>";

 echo "Second Line";
 echo "<r/>";

 $name="Anamika";
 $age=24;

 echo $name;
 echo "<h1> My Name IS" . $name. " </h1 >";

 echo "<h1> My Age IS" .$age. "</h1>";

 //echo using interpolation
 echo "<h1> My Name IS . $name. </h1 >";
 echo "<h1> My Age IS" .$age. "</h1>";
 ?>

 <button type="button" class="btn btn-dark">CLICK ME</button>