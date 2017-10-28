/**
 * Created by cuiyuxuan on 2017/9/24.
 */
var storage, tutorApp;

tutorApp = angular.module('tutorApp', []);

storage = window.localStorage;

tutorApp.controller('StutaskCtrl', function ($scope, $http, $window, $location) {
    $scope.searchTechnique = function (technique){

    }
    $scope.postTask = function (technique, area, title, description, price, teachTime, isUrgent, gender) {
        var p;
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
        });

        if (technique === void 0 || technique.length === 0 ) {
            //已经有input自带的正则弹出alert了
        } else if (area === void 0 || area.length === 0) {
            //已经有input自带的正则弹出alert了
        } else if (title === void 0 || title.length === 0) {
            //已经有input自带的正则弹出alert了
        } else if (description === void 0 || description.length === 0) {
            //已经有input自带的正则弹出alert了
        } else if (price === void 0 || price.length === 0) {
            //已经有input自带的正则弹出alert了
        } else if (teachTime === void 0 || teachTime.length === 0) {
            //已经有input自带的正则弹出alert了
        }else if (isUrgent === void 0 || isUrgent.length === 0) {
            //已经有input自带的正则弹出alert了
        }else if (gender === void 0 || gender.length === 0) {
            //已经有input自带的正则弹出alert了
        } else {
            console.log($scope.current_id, technique, area, title, description, price, teachTime, isUrgent, gender);
            p = {
                method: 'post',
                url: '/api/stu_add_order',
                data: {
                    "s_id":$scope.current_id,
                    "technique":technique,
                    "area":area,
                    "title":title,
                    "description":description,
                    "price":price,
                    "teach_time":teachTime,
                    "is_urgent":isUrgent,
                    "gender":gender
                }
            };
            $http(p).then(function (d) {
                if (d.data.success === true) {
                    console.log("successful")

                } else {
                    return $().toastmessage('showToast', {
                        // text: d.data.errors.password[0], 要改成自己要用的信息
                        sticky: false,
                        position: 'top-center',
                        type: 'error',
                        stayTime: 1500
                    });
                }
            },function (e) {
                return $().toastmessage('showToast', {
                    // text: e.data.errors.password[0],
                    sticky: false,
                    position: 'top-center',
                    type: 'error',
                    stayTime: 1500
                });
            });
            return false;
        }
    };});