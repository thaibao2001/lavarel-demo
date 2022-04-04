var app = angular.module('MyApp', [])
app.controller("NewsController", function ($scope, $http, $rootScope) {
    $http({
        method: "GET",
        url: '/admin/api/getNews.php'
    }).then(function (response) {
        $rootScope.news = response.data;
        console.log($rootScope.news);
    })
})