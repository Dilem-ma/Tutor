var storage, tutorApp;

tutorApp = angular.module('tutorApp', []);

storage = window.localStorage;


tutorApp.config(['$locationProvider', function ($locationProvider) {

    $locationProvider.html5Mode({
        enabled: true,
        requireBase: false//必须配置为false，否则<base href=''>这种格式带base链接的地址才能解析
    });
}]);

tutorApp.controller('RegisterCtrl', function ($scope, $http, $window) {

    $scope.step1 = function (phone) {
        if (phone === void 0 || phone.length === 0)
            return false;
        localStorage.setItem("tmp_phone", phone);
        localStorage.setItem("tmp_vcode", "000000");
        var p;
        p = {
            method: 'post',
            url: '/api/sms_send',
            data: {
                'phone': phone
            }
        };
        $http(p).then(function (d) {
            if (d.data.result === "1") {
                localStorage.setItem("tmp_vcode", d.data.verification_code);
                return $window.location.href = "./register2";
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

    $scope.step1_ = function () {
        var p;
        p = {
            method: 'post',
            url: '/api/sms_send',
            data: {
                'phone': localStorage.getItem("tmp_phone")
            }
        };
        $http(p).then(function (d) {
            if (d.data.result === 1) {
                return localStorage.setItem("tmp_vcode", d.data['verification code']);
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

    $scope.regi = function (vcode, pwd) {
        if (vcode === void 0 || vcode.length === 0)
            return false;
        if (pwd === void 0 || pwd.length === 0)
            return false;
        var phone = localStorage.getItem("tmp_phone");
        var code = localStorage.getItem("tmp_vcode");
        if (vcode !== code){
            return $().toastmessage('showToast', {
                text: "Incorrect verification code",
                sticky: false,
                position: 'top-center',
                type: 'error',
                stayTime: 1500
            });
        }
        var p;
        p = {
            method: 'post',
            url: '/api/register',
            data: {
                'username': phone,
                'password': pwd
            }
        };
        $http(p).then(function (d) {
            if (d.data.success === true) {
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
                text: "Network failed",
                sticky: false,
                position: 'top-center',
                type: 'error',
                stayTime: 1500
            });
        });
        return false;
    };


    // search = $location.search();
    // token = search['access_token'];
    // if (token != null) {
    //     localStorage.setItem(storage, token);
    //     return $window.location.href = "main.html";
    // }
});