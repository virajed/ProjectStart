<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<body ng-app="myApp">

<div ng-controller="samCtrl"> </div>

<div ng-controller="getCtrl">

</div>

<div ng-controller="postCtrl">

<input type="" name="" ng-model="obj.x">

<button ng-click="postData(obj)"></button>

</div>

<script type="text/javascript">


	var app = angular.module("myApp",[]);

	
	//Controller
	app.controller("samCtrl",function($scope){   });

	//Controller
	app.controller("getCtrl",function($scope,$http){

		$http.get('getData.php').
		then(function(res){   },function(err){   });

	});

//Controller
	app.controller("postCtrl",function($scope,$http){

		$scope.postData = function(obj){

			$http.post('postData.php',{"data":"sample"}).
			then(
			function(res){
				console.log(res.data);
			   },
			function(err){
				console.log(err);
			}
			    );

		}

	});

</script>

</body>
</html>