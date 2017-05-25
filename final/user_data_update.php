







<?php
include "../connection/conn.php";

if(isset($_POST['btn-upload1']))
{
$id=$_POST["Text0"];
$name = $_POST["Text1"];
$email = $_POST["Text2"];
$mobile=$_POST["Text3"];


                    //UPDATE MyGuests SET lastname='Doe' WHERE id=2

$sql = mysql_query("UPDATE user_detail SET first_name='$name',email='$email',mobile='$mobile' WHERE id=$id");

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
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
</head>
<body>


<div class="col-sm-3" ></div>
<div class="col-sm-6" >



<div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-body">


<style>

#error{

	color:red;
}
#success{
	color:green;
}
</style>

<h4 align ="center" id="success"> <?php echo  $a; echo"<br>"; ?>  </h4> <h4 align ="center" id="error"><?php echo  $b; echo"<br>"; ?></h4>
<h2 align ="center">Profile view  </h2>

<br>
<br>
Customer id : <b><?php echo  $id; echo"<br>"; ?> <br><br></b>
Customer Name : <b><?php echo  $name; echo"<br>"; ?><br><br></b>
Customer Email :<b> <?php echo  $email; echo"<br>"; ?><br><br></b>
Customer Mobile No: <b> <?php echo  $mobile; echo"<br>"; ?><br><br></b>


</canvas><canvas id="myChart"></canvas>
    </div>
  </div>
  



<script type= "text/javascript">



var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [],
    datasets: [{
      label: 'apples',
      data: [12, 19, 3, 17, 6, 3, 7],
      backgroundColor: "rgba(153,255,51,0.4)"

    }, 

    {
      label: 'oranges',
      data: [2, 29, 5, 5, 2, 3, 10],
      backgroundColor: "rgba(255,153,0,0.4)"

    }]
  }
});




</script>






</div>



</body>
</html> 

