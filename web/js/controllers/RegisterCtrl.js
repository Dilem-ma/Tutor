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
});