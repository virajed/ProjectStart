<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
<button id="show"></button>
<div id="response"> 

</div>

<div> </div>

<div>

<input type="" name="x" id="x">

<button id="save"></button>

</div>

<script type="text/javascript">

//$(document).ready(function(){       });

//Save
$("#save").click(function(){

//$.ajax({   url:"",method:""    });

	$.ajax({
		url:"",
		method:"post",
		async:true,

		data:{"a":10,"b":$("#x").val(),"c":"sample"},

		success:function(res){   }
	});

});

//Show
$("#show").click(function(){

//$.ajax({   url:"",method:""    });

	$.ajax({
		url:"",
		method:"get",
		async:true,

		success:function(res){  $("#reponse").html(res); }
	});

});
</script>

</body>
</html>