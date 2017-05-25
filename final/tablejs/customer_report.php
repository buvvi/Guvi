<?php 
include "conn.php";






$a="";
$b="";





if(isset($_POST['btn-upload']))
{

  $id=$_POST["Text0"];
$first_name = $_POST["Text1"];
$Last_name = $_POST["Text2"];
$email=$_POST["Text3"];
$mobile=$_POST["Text4"];
$address=$_POST["Text5"];
$city=$_POST["Text6"];
$state=$_POST["Text7"];
$zip=$_POST["Text8"];
$description=$_POST["Text9"];


                    //UPDATE MyGuests SET lastname='Doe' WHERE id=2

$sql = mysql_query("UPDATE customer_detail SET first_name='$first_name',Last_name='$Last_name',email='$email',mobile='$mobile',address='$address',city='$city',state='$state',zip='$zip',description='$description' WHERE id='$id'");

if($sql){

$a= "Upated Successfully";

}


else
{

$b="Error in Update Query";

}

} 



?>




<!DOCTYPE html>  
<html lang="en" ng-app=""><head>  


  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
<link rel="stylesheet" href="dataTables.bootstrap.min.css">

<!-- jQuery library -->
<script src="dataTables.bootstrap.min.js"></script>

<script src="jquery-1.12.4.js"></script>


<script src="jquery.dataTables.min.js"></script>


<script type="text/javascript">


$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Gofrugal</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
         <li class="active"><a href="../terms.php">Home</a></li>
        <li class="active"><a href="tablejs/customer_report.php">Admin Report</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="col-sm-8" >



    
<form action="export_to_excel.php" method="post" name="export_excel">
     
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" id="export" name="export"  class="btn btn-primary button-loading" data-loading-text="Loading...">Excel</button>
                    </div>
                </div>
            </form>




<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">


   
        <thead>
            <tr>
        <th>ID</th>
        <th>First_name</th>
        <th>LastName</th>        
       <th>Email</th>
      <th>Mobile</th>
      <th>Address</th>
      <th>City</th>
      <th>State</th>
      <th>Zip</th>
      <th>Description</th>
      <th>Edit</th>
             
            </tr>
        </thead>


       <!--  <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot> -->




        <tbody>
<?php 
include "conn.php";

$id="";
$first_name="";
$last_name="";
$email="";
$mobile="";
$city="";
$state="";
$address="";
$description="";



$result = mysql_query("SELECT * FROM customer_detail ");







 while($rowval = mysql_fetch_array($result)){
$id = $rowval["id"];
$first_name = $rowval["first_name"];
$last_name = $rowval["Last_name"];
$email=$rowval["email"];
$mobile=$rowval["mobile"];
$address=$rowval["Address"];
$city=$rowval["city"];
$state=$rowval["state"];
$zip=$rowval["zip"];
$description=$rowval["description"];


?>
<tr id="tablevalues">
                 <td><?php   echo $id ; ?> </td>
                <td><?php   echo $first_name ; ?> </td>
                <td><?php   echo $last_name ; ?></td>
                <td><?php   echo $email ; ?></td>
                <td><?php   echo $mobile ; ?></td>
              <td><?php   echo $address ; ?></td>
              <td><?php   echo $city ; ?></td>
              <td><?php   echo $state ; ?></td>
                 <td><?php   echo $zip ; ?></td>
              <td><?php   echo $description ; ?></td>
              <td><button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal<?php echo $id ; ?>">Edit</button></td>
               
<!-- edit start -->

<!-- Modal -->
<div id="myModal<?php   echo $id ; ?>" class="modal fade" role="dialog" >
  <div class="modal-dialog">



    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit your profile</h4>
        <h4 align ="center" id="success"> <?php echo  $a; echo"<br>"; ?>  </h4> <h4 align ="center" id="error"><?php echo  $b; echo"<br>"; ?></h4>
      </div>
      <div class="modal-body">
        


<!-- form ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,, -->

<form id="form" method="post"  action ="customer_report.php" enctype="multipart/form-data" >
  
<label>User id </label>.
<input name="Text0"  class="form-control"  type="text" value='<?php echo  $id; ?>' readonly/></td>

<br>
<label>First_name</label>
 <input name="Text1"  class="form-control"  type="text" value='<?php echo  $first_name; ?>'/></td>

<label>Last_Name</label>
 <input name="Text2"  class="form-control"  type="text" value='<?php echo  $last_name; ?>'/></td>
<br>
<label>Email</label>
 <input name="Text3"  class="form-control"  type="text" value='<?php echo  $email; ?>'/></td>

 <br>
<label>Mobile Number </label>
 <input name="Text4"  class="form-control"  type="text" value='<?php echo  $mobile; ?>'/></td>

<br>
<label>Address</label>
 <input name="Text5"  class="form-control"  type="text" value='<?php echo  $address; ?>'/></td>
<br>
<label>MCity</label>
 <input name="Text6"  class="form-control"  type="text" value='<?php echo  $city; ?>'/></td>

<br>
<label>State</label>
 <input name="Text7"  class="form-control"  type="text" value='<?php echo  $state; ?>'/></td>



<br>
<label>Zipcode</label>
 <input name="Text8"  class="form-control"  type="text" value='<?php echo  $zip; ?>'/></td>


<br>
<label>Description </label>
 <input name="Text9"  class="form-control"  type="text" value='<?php echo  $description; ?>'/></td>


<br>
<input type = "submit" value="submit1" name="btn-upload" class="btn btn-info btn-lg" ></input>

</form>

<!-- form end ............................................................. -->

      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>











<!-- edit end -->























         
<?php

}?>

            </tr>
           
        </tbody>
    </table>
</div>




</body>

</html>
<!-- 
<script type="text/javascript">


var Row = document.getElementById("tablevalues");
var Cells = Row.getElementsByTagName("td");

for(var i =0;i<)
alert(Cells[0].innerText);


</script>
 -->


