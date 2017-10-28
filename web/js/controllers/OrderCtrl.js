/**
 * Created by cuiyuxuan on 2017/9/23.
 */
var storage, tutorApp;

tutorApp = angular.module('tutorApp', []);

storage = window.localStorage;


tutorApp.config(['$locationProvider', function ($locationProvider) {

    $locationProvider.html5Mode({
        enabled: true,
        requireBase: false//必须配置为false，否则<base href=''>这种格式带base链接的地址才能解析
    });
}]);


tutorApp.controller('OrderCtrl', function ($scope, $location, $http) {
    if ($location.search().orderId) {
        $scope.orderId = $location.search().orderId;
        var p = {
            method: 'get',
            url: '/orders'
        };
        $http(p).then(function (d) {
            $scope.orders = d.data;
            console.log($scope.orders);
            $scope.title = d.title;
            $scope.technique = d.technique;
            $scope.description = d.description;
            $scope.area = d.area;
            $scope.time = d.time;
            $scope.gender = d.gender;
            $scope.price = d.price;

        });

    }


});