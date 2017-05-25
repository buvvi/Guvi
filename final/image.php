

<!DOCTYPE html>  
<html lang="en" ng-app=""><head>  
 
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">



<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>


<style>
.submit_button {
	width:95px;
	height:25px; 
	background: #3d3d3d;
	color:#FFF;
	font-size:12px;
	cursor:pointer;
	margin-bottom:10px;
	display:block;
	border:none;
}
</style>

 
</head>  



<body>

<div class="col-sm-1 " ></div>




<div class="col-sm-10 well  " >
 <h3>Keeping you ahead, always with<a href="http://gofrugal.com">Gofrugal Team</a></h3>
 <p class="">We are here to help deliver delight to Retailers, Restaurants & Distributors with simple & complete automation solution </p>
   

<div id="" class=>
<h4>Please upload your image </h4>
<div class="bgColor">
<form id="uploadForm" action="upload.php" method="post">
<div id="uploadFormLayer">
<input name="userImage" type="file" class="inputFile" /><br/>
<input type="submit" value="Submit" class="btnSubmit"   data-toggle="modal" data-target="#myModal"/>
</form>
</div>
</div>
</form>
<div id="targetLayer"></div>
</div>
</div>
</div>
<!-- MAIN CONTENT END -->

<div class="col-sm-1" ></div>
</body>
</html>

<script type="text/javascript">

$(document).ready(function (e) {
  $("#uploadForm").on('submit',(function(e) {
    e.preventDefault();
    $.ajax({
          url: "upload.php",
      type: "POST",
      data:  new FormData(this),
      contentType: false,
          cache: false,
      processData:false,
      success: function(data)
        {
      $("#targetLayer").html(data);
        },
        error: function() 
        {
        }           
     });
  }));
});
</script>