
app.controller('getNhacungcap',['$scope','$http',getNhacungcap]);
function getNhacungcap($scope,$http)
{
	$scope.hello = "Xin chao angular";
	$http.get("/admin/api/getNhacungcap.php").success(function(data){
		console.log(data);
		$scope.datas = data;
	}).error(function(data){
		
	});
}