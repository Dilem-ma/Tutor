/**
 * Created by Dilemma丶 on 2017/3/12.
 */
var storage, tutorApp;

tutorApp = angular.module('tutorApp', []);

storage = window.localStorage;

tutorApp.controller('LoginCtrl', function ($scope, $http, $window, $location) {

    $scope.login = function (username, pwd) {
        var p;
        if (username === void 0 || username.length === 0) {
            //已经有input自带的正则弹出alert了
        } else if (pwd === void 0 || pwd.length === 0) {
            //已经有input自带的正则弹出alert了
        } else {
            p = {
                method: 'post',
                url: '/api/login',
                data: {
                    'username': username,
                    'password': pwd
                }
            };
            $http(p).then(function (d) {
                if (d.data.success === true) {
                    var search = $location.search();
                    var access_token = search['token'];
                    if (access_token != null) {
                        localStorage.setItem(storage, access_token);
                    }
                    return $window.location.href = "../site/index";
                } else {
                    return $().toastmessage('showToast', {
                        text: d.data.errors.password[0],
                        sticky: false,
                        position: 'top-center',
                        type: 'error',
                        stayTime: 1500
                    });
                }
            },function (e) {
                return $().toastmessage('showToast', {
                    text: e.data.errors.password[0],
                    sticky: false,
                    position: 'top-center',
                    type: 'error',
                    stayTime: 1500
                });
            });
            return false;
        }
    };
});