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

});