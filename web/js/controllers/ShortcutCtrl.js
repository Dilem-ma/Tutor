/**
 * Created by Dilemma丶 on 2017/3/12.
 */
var storage, tutorApp;

tutorApp = angular.module('tutorApp', []);

storage = window.localStorage;

tutorApp.controller('ShortcutCtrl', function ($scope, $http, $window) {

    localStorage.setItem("log_vcode", "000001");

    $scope.disableBtn = function () {
        $scope.pivot = true;
        setTimeout(function () {
            $scope.pivot = false;
        }, 60 * 1000);
    };


    $scope.getvcode = function () {
        if ($scope.pivot === true)
            return $().toastmessage('showToast', {
                text: "Vcode can only be sent once in a minute",
                sticky: false,
                position: 'top-center',
                type: 'error',
                stayTime: 1500
            });
        $scope.disableBtn();
        var p;
        p = {
            method: 'post',
            url: '/api/sms_send',
            data: {
                'phone': localStorage.getItem("tmp_phone")
            }
        };
        $http(p).then(function (d) {
            if (d.data.result === "1") {
                return localStorage.setItem("log_vcode", d.data.verification_code);
            } else {
                return $().toastmessage('showToast', {
                    text: "Send vcode failed",
                    sticky: false,
                    position: 'top-center',
                    type: 'error',
                    stayTime: 1500
                });
            }
        }, function (e) {
            return $().toastmessage('showToast', {
                text: "Network failed",
                sticky: false,
                position: 'top-center',
                type: 'error',
                stayTime: 1500
            });
        });
        return false;
    };

    $scope.login = function (username, vcode) {
        var code = localStorage.getItem("log_vcode");
        var p;
        if (username === void 0 || username.length === 0) {
            return false;
            //已经有input自带的正则弹出alert了
        } else if (vcode === void 0 || vcode.length === 0) {
            return false;
            //已经有input自带的正则弹出alert了
        } else if (vcode !== code) {
            return $().toastmessage('showToast', {
                text: "Incorrect verification code",
                sticky: false,
                position: 'top-center',
                type: 'error',
                stayTime: 1500
            });
        } else {
            p = {
                method: 'post',
                url: '/api/fast_login',
                data: {
                    'username': username
                }
            };
            $http(p).then(function (d) {
                if (d.data.success === true) {
                    var access_token = d.data.token;
                    if (access_token != null) {
                        // localStorage.setItem(storage, access_token);
                        localStorage.setItem("name", access_token);
                    }
                    return $window.location.href = "../site/index";
                } else {
                    return $().toastmessage('showToast', {
                        text: d.data.errors,
                        sticky: false,
                        position: 'top-center',
                        type: 'error',
                        stayTime: 1500
                    });
                }
            }, function (e) {
                return $().toastmessage('showToast', {
                    text: 'Login failed..',
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