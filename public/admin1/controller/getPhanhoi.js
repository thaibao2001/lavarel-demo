
app.controller('getPhanhoi',['$scope','$http',getPhanhoi]);
function getPhanhoi($scope,$http)
{
	$scope.hello = "Xin chao angular";
	$http.get("/admin/api/getPhanhoi.php").success(function(data){
		console.log(data);
		$scope.datas = data;
	}).error(function(data){
		
	});
}