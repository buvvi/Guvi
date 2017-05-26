<!--Write a php program to solve codekata beginners level 47th program 
47 - Highest and lowest number in array using C.   variables operators conditional arrays looping  Total Submissions : 45
My-Submission : Not Submitted
-->


<?php 
 
$n= array();
$b = 0;
$c=0;

foreach ($n as $key=>$val)
 {
    if ($val > $b) {
        $b = $val;
        $c = $val;
    }
else {
 
    if ($val <= $c) {
        $c = $val;
     
    }
}
}
echo "highest number ".$b;
 echo "lowest  number ".$c;
?>
