<?php
$obj = json_decode($_GET["x"], false);
$rndAge = rand(1,100);
$obj->age = $rndAge;
$resultPhp = "Check this: " . $obj->name . " has a random age of " . $obj->age;
$resultJs = json_encode($resultPhp);

echo($resultJs);
?>