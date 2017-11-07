/**
 * Created by cuiyuxuan on 2017/9/24.
 */
var storage, tutorApp;

tutorApp = angular.module('tutorApp', []);

storage = window.localStorage;

tutorApp.controller('StutaskCtrl', function ($scope, $http) {

    $scope.postTask = function (technique, area, title, description, price, teachTime, isUrgent, gender) {
        var p;
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
        $http(q).then(function (d) {
            $scope.current_id = d.data.id;
        });

            console.log($scope.current_id, technique, area, title, description, price, teachTime, isUrgent, gender);

            if(isUrgent === undefined){
            isUrgent = false;
        }
            var p = {
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
                    text: d.data.errors,
                    sticky: false,
                    position: 'top-center',
                    type: 'error',
                    stayTime: 1500
                });
            }
        },function (e) {
            return $().toastmessage('showToast', {
                text: e.data.errors,
                sticky: false,
                position: 'top-center',
                type: 'error',
                stayTime: 1500
            });
        });
        return false;
    };});