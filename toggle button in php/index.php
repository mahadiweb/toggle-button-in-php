<!DOCTYPE html>
<html>
<head>
	<title>Test</title>

	<style type="text/css">
		/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

	</style>
</head>
<body>
<button id="amibutton">Hello</button>
<button id="data">Get</button>
<div class="show"></div>

<!-- Rounded switch -->
<label class="switch">
  <input type="checkbox" class="checkbox" 
<?php
$conn = mysqli_connect("localhost","root","","databasename");
$que = mysqli_query($conn,"SELECT * FROM status WHERE id=1");
$res = mysqli_fetch_assoc($que);
 if ($res['status'] == 1){
 	echo "checked";
 }else{
 	echo "";
 } ?>

  >
  <span class="slider round"></span>
</label>

</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
	$('.checkbox').on('change',function() {
		if ($('.checkbox')[0].checked) {
			var id = 1;
			$.ajax({
				url:'process.php',
				method:'post',
				data:{aid:id},
				success:function(data){
					
				}
			})
		}else{
			var id = 0;
			$.ajax({
				url:'process.php',
				method:'post',
				data:{did:id},
				success:function(data){
					
				}
			})
		}
	});

</script>