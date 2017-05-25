<!-- 37 - Write a program to swap two numbers using bitwise operators.   variables conditional operators looping Bitwise  Total Submissions : 59
My-Submission : Not Submitted -->


<?php
$a=10;
$b=20;
echo "Given a value is 10 and b value is 20 <br>";
$a=$a ^ $b; 
$b=$a ^ $b; 
echo"after swapping b value is ".$b."<br>";
$a=$b=$a ^ $b; 
echo"after swapping a value is ".$a."<br>";
?>

