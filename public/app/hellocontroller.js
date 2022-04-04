var app = angular.module('myapp',[]);
app.controller('mycontroller',function ($scope) {
    $scope.hello = 'Hello world. My name is AngularJs'
    $scope.datas = JSON.parse('[{"MaSV":"1", "TenSV": "Mai Hoàng Thái Bảo"},{"MaSV":"2", "TenSV": "Vũ Xuân Thắng"}]');
})
