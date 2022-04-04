app.controller("LoaiSPController", function ($scope, $http, $rootScope) {
    $http({
        method: "GET",
        url: '/admin/api/getLoaiSP.php'
    }).then(function (response) {
        $rootScope.loaisps = response.data;
        console.log($rootScope.loaisps);
    })
})