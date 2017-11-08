/**
 * Created by cuiyuxuan on 2017/9/24.
 */
var storage, tutorApp;

tutorApp = angular.module('tutorApp', []);

storage = window.localStorage;

tutorApp.controller('StutaskCtrl', function ($scope, $http, $window) {

    $scope.postTask = function (technique, area, title, description, price, teachTime, gender, address) {
        if (localStorage.getItem(storage) !== void 0) {
            $scope.token = localStorage.getItem(storage);
            console.log($scope.token);
        } else {
            $scope.token = void 0;
        }

        var a = {
            method: 'get',
            url: '/api/get_current_user',
            params: {
                'token': $scope.token
            }
        };
        $http(a).then(function (d) {
            $scope.current_id = d.data.id;
            var c = {
                method: 'post',
                url: '/api/get_stu_data',
                data: {
                    "u_id": $scope.current_id
                }
            };
            $http(c).then(function (e) {
                $scope.s_id=e.data.id
                console.log($scope.current_id,$scope.s_id, technique, area, title, description, price, teachTime, gender,address);


                var p = {
                    method: 'post',
                    url: '/api/stu_add_order',
                    data: {
                        "s_id":$scope.s_id,
                        "technique":technique,
                        "area":area,
                        "title":title,
                        "description":description,
                        "price":price,
                        "teach_time":teachTime,
                        "is_urgent":false,
                        "gender":gender,
                        "address":address
                    }
                };
                $http(p).then(function (f) {
                    if (f.data.success === true) {
                        return $window.location.href = "search";
                    } else {
                        return $().toastmessage('showToast', {
                            text: f.data.errors,
                            sticky: false,
                            position: 'top-center',
                            type: 'error',
                            stayTime: 1500
                        });
                    }
                });
            });
        });




    };
});