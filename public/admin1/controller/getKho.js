app.controller('getKho',['$scope','$http',getKho]);
function getKho($scope,$http){
    $http.get(
        "/admin/api/getKho.php"
    ).success(function(data){
        $scope.datas = data;
        console.log($scope.datas)
    }).error(function(data){

    });
}