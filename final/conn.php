
<?php
//----------------------------------------------------------------connection start------------------------------------
$db_constr="localhost:/usr/local/mysql/data/mysqld-5610.sock";
$dbuser="root";
$dbname="sample_db" ;
$dbpass="";

$conn = mysql_connect($db_constr,$dbuser,$dbpass);
if($conn){
   // echo "connection success";
    mysql_select_db($dbname);
}else{
    echo "failed to connect - ".mysql_error();
}
//----------------------------------------------------------------connection end------------------------------------
?>