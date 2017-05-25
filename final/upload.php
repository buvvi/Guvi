  <!-- Latest compiled and minified CSS -->


<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="validation.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
<style>#success_message{ display: none;}</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">


</head>

<?php 

include "conn.php";
$a="";
$b="";
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
$sourcePalabel = $_FILES['userImage']['tmp_name'];
$targetPalabel = "uploads/".date('Ymd').$_FILES['userImage']['name'];

if(move_uploaded_file($sourcePalabel,$targetPalabel)) {
  
$result = mysql_query("SELECT id,first_name,Last_name,email,mobile,Address,city,state,zip,description,profile_pic FROM customer_detail 
WHERE id order by id desc limit 1");

while($rowval = mysql_fetch_array($result)){
  $id=$rowval['id'];
  $first_name=$rowval['first_name'];
  $last_name=$rowval['Last_name'];
  $email=$rowval['email'];
  $mobile=$rowval['mobile'];

$address=$rowval['Address'];
$city=$rowval['city'];
$state=$rowval['state'];
$zip=$rowval['zip'];  
$description=$rowval['description'];


}

$que1 = "UPDATE customer_detail SET profile_pic='$targetPalabel' WHERE id='$id'";

if (mysql_query($que1)){
  $a= " success";  
}else{
  $b='Error: ' . mysql_error();
}

?>

<!-- MAIN CONTENT START -->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       <a href="terms.php" class="close"> <span class="glyphicon glyphicon-off"  >  </span></a>

        <h4 class="modal-title" >&nbsp;&nbsp;&nbsp;Thanks for Registration    

      </div>
      <div class="modal-body">

<div class="panel panel-default"> 
  <div class="panel-body">
        <label> User ID :</label>&nbsp;&nbsp;<?php   echo $id ; ?>    <br>
        <label>First_name :</label>  &nbsp;&nbsp;<?php   echo $first_name ; ?>   <br>
        <label>LastName :</label>   &nbsp;&nbsp;<?php   echo $last_name ; ?> <br>       
       <label>Email :</label>     &nbsp;&nbsp; <?php   echo $email ; ?>   <br>
      <label>Mobile :</label>    &nbsp;&nbsp; <?php   echo $mobile ; ?>   <br>
      <label>Address :</label>  &nbsp;&nbsp;<?php   echo $address ; ?>   <br>
      <label>City :</label>  &nbsp;&nbsp;<?php   echo $city ; ?>   <br>
      <label>State :</label>  &nbsp;&nbsp; <?php   echo $state ; ?>   <br>
      <label>Zip :</label>     &nbsp;&nbsp;   <?php   echo $zip ; ?>   <br>
      <label>Description :</label>&nbsp;&nbsp;<?php   echo $description ; ?>   <br>
      <label>Profile Photo :&nbsp;&nbsp;</label><img class="image-preview" src="<?php echo $targetPalabel; ?>" class="upload-preview"  class="img-labelumbnail" widlabel="100" height="100"/>   
</div>

</div>

<!-- MAIN CONTENT END -->
</div>

      <div class="modal-footer">
     Gofrugal team will reach you soon ...Good Day
      </div>
    </div>

  </div>
</div>

<?php

}
}
}

?>