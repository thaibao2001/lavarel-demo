app.controller("NhanVienController", function ($scope, $http) {
    $http({
        method: "GET",
        url: '/admin/api/getNhanVien.php'
    }).then(function (response) {
        $scope.nhanviens = response.data;
        console.log($scope.nhanviens);
    })
})