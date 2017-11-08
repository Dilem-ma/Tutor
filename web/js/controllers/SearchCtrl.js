/**
 * Created by Dilemma丶 on 2017/3/21.
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


tutorApp.controller('SearchCtrl', function ($scope, $location, $http) {
    var flag = 1;
    console.log($location);
    if ($location.search().tech) {
        $scope.tech = $location.search().tech;
    }
    else {
        flag = 0;
        var p = {
            method: 'get',
            url: '/orders'
        };

        $http(p).then(function (d) {
            $scope.orders = d.data;
            console.log($scope.orders);
        });

    }


    if ($location.search().gender) {
        $scope.gender = $location.search().gender;
    }

    if ($location.search().area) {
        $scope.area = $location.search().area;
    }
    if ($location.search().price) {
        $scope.price = $location.search().price;
    }
    if ($location.search().text) {
        $scope.text = $location.search().text;
    }
    if (flag) {

        if ($scope.gender == "男性")
            var gen = "male";
        else if ($scope.gender == "女性")
            gen = "female";
        else
            gen = "";
        if ($scope.area == "不限")
            var are = "";
        else
            are = $scope.area;
        if ($scope.tech == "不限")
            var tec = "";
        else
            tec = $scope.tech;
        if ($scope.price == "不限") {
            var pri_min = "";
            var pri_max = "";
        }
        else if ($scope.price == "50/h以下") {
            pri_min = "";
            pri_max = "50";
        }
        else if ($scope.price == "50/h-100/h") {
            pri_min = "50";
            pri_max = "100";
        }
        else if ($scope.price == "100/h-150/h") {
            pri_min = "100";
            pri_max = "150";
        }
        else {
            pri_min = "150";
            pri_max = "";
        }
        if ($scope.text == "undefined")
            var te = "";
        else
            te = $scope.text;
        var q = {
            method: 'post',
            url: '/api/select_orders',
            data: {
                "gender": gen,
                "area": are,
                "technique": tec,
                "text": te,
                "price_min": pri_min,
                "price_max": pri_max
            }
        };

        $http(q).then(function (d) {
            $scope.orders = d.data;
        });
    }
});