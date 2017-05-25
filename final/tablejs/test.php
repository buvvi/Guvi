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

<script>

$(".btn[data-target='#myModal']").click(function() {
       var columnHeadings = $("thead th").map(function() {
                 return $(this).text();
              }).get();
       columnHeadings.pop();
       var columnValues = $(this).parent().siblings().map(function() {
                 return $(this).text();
       }).get();
  var modalBody = $('<div id="modalContent"></div>');
  var modalForm = $('<form role="form" name="modalForm" action="putYourPHPActionHere.php" method="post"></form>');
  $.each(columnHeadings, function(i, columnHeader) {
       var formGroup = $('<div class="form-group"></div>');
       formGroup.append('<label for="'+columnHeader+'">'+columnHeader+'</label>');
       formGroup.append('<input class="form-control" name="'+columnHeader+i+'" id="'+columnHeader+i+'" value="'+columnValues[i]+'" />'); 
       modalForm.append(formGroup);
  });
  modalBody.append(modalForm);
  $('.modal-body').html(modalBody);
});
$('.modal-footer .btn-primary').click(function() {
   $('form[name="modalForm"]').submit();
});

</script>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th class="">№</th>
            <th class="">Name</th>
            <th class="">Email/Login</th>
            <th class="">Phone</th>
            <th class="">Skype</th>
            <th class="">Role</th>
            <th class="">Edit</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="text-align:center;" class="">1</td>
            <td class="">user123</td>
            <td style="text-align:center;" class="">123@hotmail.com</td>
            <td style="text-align:center;" class="">0123456</td>
            <td style="text-align:center;" class="">user123</td>
            <td style="text-align:center;" class="">Admin</td>
            <td style="text-align:center;">
                <button class="btn btn-success" data-toggle="modal" data-target="#myModal" contenteditable="false">Edit</button>
            </td>
        </tr>
        <tr>
            <td style="text-align:center;" class="">2</td>
            <td class="">user456</td>
            <td style="text-align:center;" class="">456@hotmail.com</td>
            <td style="text-align:center;" class="">0123458</td>
            <td style="text-align:center;" class="">user456</td>
            <td style="text-align:center;" class="">User</td>
            <td style="text-align:center;">
                <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Edit</button>
            </td>
        </tr>
    </tbody>
</table>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"></div>
    </div>
    <div class="modal-dialog">
        <div class="modal-content"></div>
    </div>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"> <span aria-hidden="true" class="">×   </span><span class="sr-only">Close</span>

                </button>
                 <h4 class="modal-title" id="myModalLabel">Modal title</h4>

            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

</html>