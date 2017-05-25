<?php include "conn.php"; ?>

<?php
$s="";
if($_POST["first_name"])
{
$first_name = $_POST["first_name"];
$Last_name = $_POST["Last_name"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$address=$_POST["address"];
$city=$_POST["city"];
$state=$_POST["state"];
$zip=$_POST["zip"];
$description=$_POST["description"];


//echo "Welcome ".$Last_name; // Success Message

//echo"hai";

$check= mysql_query("select email from customer_detail where email='$email'");
$checkrows=mysql_num_rows($check);

		
 if($checkrows>0) {
      echo "Email already Exists";
   } 

else {
	
$sql = "INSERT INTO customer_detail "."(first_name,Last_name,email,mobile,address,city,state,zip,description) ". "VALUES "."('$first_name','$Last_name','$email','$mobile','$address','$city','$state','$zip','$description')";






if (mysql_query($sql)){



echo" Data  has been inserted ,Please click next button to upload image ";  

}
else{
die('Error: ' . mysql_error());
}
}
}







?>

