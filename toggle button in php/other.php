
<?= include("insert.php") ?>
<!DOCTYPE html>
<html>
 <head>
  <title>Make  Toggles & Use in Form with PHP Ajax</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:600px;">
   
    <div class="form-group">
     <label>Toggle button</label>
     <div class="checkbox">
      <input type="checkbox" data-id="1" name="status" id="status"/>
      <!-- <input type="checkbox" data-id="1" name="status" id="status" <?= $row['status'] == 1 ?'checked':''?>/> -->
     </div>
    </div>

  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 $('#status').bootstrapToggle({
  on: 'Active',
  off: 'Deactive',
  onstyle: 'success',
  offstyle: 'danger'
 });

 $('#status').change(function(){
	var status = $(this).prop('checked') == true ? 1 : 0;
	var thisid = $(this).attr('data-id');
	//alert(status);
	$.ajax({
		url:"insert.php",
		method:"post",
		data:{status:status,id:thisid},
		success:function(res){
			alert(res);
		}
	})
 });

});
</script>
