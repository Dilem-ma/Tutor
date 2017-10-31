/**
 * Created by Dilemma丶 on 2017/3/21.
 */
var storage, tutorApp;

tutorApp = angular.module('tutorApp', []);

storage = window.localStorage;

tutorApp.controller('FavoriteCtrl', function ($scope, $location, $http) {
    var flag = 1;
    if ($location.search().tech) {
        $scope.tech = $location.search().tech;
    }
    else {
        flag = 0;
        if (localStorage.getItem(storage) !== void 0) {
            $scope.token = localStorage.getItem(storage);
            console.log($scope.token);
        } else {
            $scope.token = void 0;
        }
        var q = {
            method: 'get',
            url: '/api/get_current_user',
            params: {
                'token': $scope.token
            }
        };
        $http(q).then(function (d) {
            $scope.current_id = d.data.id;
            var p = {
                method: 'post',
                url: '/api/get_favourite',
                data: {
                    "id":$scope.current_id
                }
            };
            $http(p).then(function (d) {
                $scope.orders = d.data;


            });
        });


    }
    if ($location.search().id) {
        $scope.id = $location.search().id;
    }
    if ($location.search().name) {
        $scope.name = $location.search().name;
    }
    if ($location.search().url) {
        $scope.url = $location.search().url;
    }
    if ($location.search().area) {
        $scope.area = $location.search().area;
    }
    if ($location.search().star) {
        $scope.star = $location.search().star;
    }
    if ($location.search().gender) {
        $scope.gender = $location.search().gender;
    }
    if ($location.search().education) {
        $scope.education = $location.search().education;
    }
    if ($location.search().major) {
        $scope.major = $location.search().major;
    }
    if ($location.search().describe) {
        $scope.describe = $location.search().describe;
    }
    if (flag) {

        if ($scope.gender == "男性")
            var gen = "male";
        else if ($scope.gender == "女性")
            gen = "female";
        else
            gen = "";
        if ($scope.star == "不限")
            var sta = "";
        else
            sta = $scope.star;
        if ($scope.education == "不限")
            var edu = "";
        else
            edu = $scope.education;
        if ($scope.major == "不限")
            var maj = "";
        else
            maj = $scope.major;

    }
});