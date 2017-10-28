/**
 * Created by cuiyuxuan on 2017/10/28.
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


tutorApp.controller('GuestCtrl', function ($scope, $location, $http) {
    if (localStorage.getItem(storage) !== void 0) {
        $scope.token = localStorage.getItem(storage);
        console.log($scope.token);
    } else {
        $scope.token = void 0;
    }
    var q = {
        method: 'get',
        url: 'localhost:8080/api/get_identity?token='+token
    };
    $http(q).then(function (d) {
        if(d.data.teacher && d.data.student){
            $scope.visible = false;
        }
        else{
            $scope.visible = true;
        }
    });


});