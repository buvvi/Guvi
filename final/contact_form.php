<html>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="validation.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
<style>#success_message{ display: none;}</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">

<style type="text/css">
#red{

  color: red;
}
</style>


<div class="container">

    <form class="well form-horizontal" action="contact_form.php" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<h4 align = "center">Keeping you ahead, always with  <b>Gofrugal Team</b></h4>
<br>

<!-- Text input-->
<h3 id ="red"><div id="targetLayer" align ="center" id="responsedata"></div></h3>
<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" id="first_name"placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" id="Last_name" placeholder="Last Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email"  id="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Phone #</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone"  id="mobile"placeholder="(845)555-1212" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" id="address" placeholder="Address" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">City</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="city" id="city"placeholder="city" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">State</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="state"  id="state"class="form-control selectpicker" >
      <option value=" " >Please select your state</option>
      <option>TamilNadu</option>
      <option>karnataka</option>
      <option>Maharashtra</option>
     
    </select>
  </div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Zip Code</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="zip" id="zip" placeholder="Zip Code" class="form-control"  type="text">
    </div>
</div>
</div>


<!-- Text area -->
  
<div class="form-group">
  <label class="col-md-4 control-label">Project Description</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        	<textarea class="form-control" id ="description" name="comment" placeholder="Project Description"></textarea>
  </div>
  </div>
</div>

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <input type = "button" id="btn" value="Send Data" class="btn btn-info btn-lg" action="image.php"> <a hef="image.php"></a></button>


   &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a href="image.php"> <span class="glyphicon glyphicon-log-out"  > Next </span></a>
 
 </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->

    </html>

<script >
$(document).ready(function(){
$("#btn").click(function(){
var vfname = $("#first_name").val();
var vlastname = $("#Last_name").val();
var vemail = $("#email").val();
var vmobile = $("#mobile").val();
var vaddress = $("#address").val();
var vcity = $("#city").val();
var vstate = $("#state").val();
var vzip = $("#zip").val();
var vdescription = $("#description").val();
//alert("hai");

if(vfname=='' && vemail=='' && vmobile=='' && vaddress='')
{
 var s="Please fill out the form";

 $("#targetLayer").html(s);
}

else{

$.post("user_data.php", //Required URL of the page on server
{   // Data Sending With Request To Server

first_name:vfname,
Last_name:vlastname,
email:vemail,
mobile:vmobile,
address:vaddress,
city:vcity,
state:vstate,
zip:vzip,
description:vdescription

},
function(response){  // Required Callback Function


  //alert("in response");
 response//"response"  receives - whatever written in echo of above PHP script.



 $("#targetLayer").html(response);

});
}
});
});

</script>