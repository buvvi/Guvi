<!--Perform both the types of casting using Number, integer, float and double data types. -->


<?php


$b=10;
$a="ram";
	echo gettype($b).$b."<br>";
	echo gettype($b)."-->"."to string".settype($b, "string").$b."<br>";
    echo gettype($b)."-->"."to float".settype($b, "float").$b."<br>";
     echo gettype($b)."-->"."to bool".settype($a, "bool")."-->".$a."<br>";
?>
