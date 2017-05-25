
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


  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<label for="db">Scheduled List - Status </label>
<select name="dbType" id="dbType">
   <option></option>
   <option value="oracle">Pending</option>
   <option value="mssql">Compeated  </option>
   <option value="mysql">Reschedule</option>
   <option value="other">Canceled</option>
   <option value="other">No Response</option>
</select>




<div id="otherType" style="display:none;">
<label for="specify">Specify</label>
<input type="text" name="specify" placeholder="Specify Databse Type"/>
<p>Date: <input type="text" id="datepicker"></p>
<textarea class="form-control" id ="description" name="comment" placeholder="Project Description"></textarea>
  </div>

</div>



<script>


$('#dbType').on('change',function(){
    if( $(this).val()==="other"){
    $("#otherType").show()

    }
    else{
    $("#otherType").hide()
    }
});

  $( function() {
    $( "#datepicker" ).datepicker();
  } );

</script>


</html>