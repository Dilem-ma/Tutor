/**
 * Created by Dilemma丶 on 2017/3/19.
 */
/**
 * Created by Dilemma丶 on 2017/3/12.
 */
var storage, tutorApp;

tutorApp = angular.module('tutorApp', []);

// storage = window.localStorage;

tutorApp.controller('MainCtrl', function ($scope, $http) {
    $scope.user=localStorage.getItem(storage)
    var p = {
        method: 'get',
        url: '/api/top_teachers'
    };
    $http(p).then(function (d) {
        $scope.teachers = d.data;
    },function (e) {
        return $().toastmessage('showToast', {
            text: 'Network failed...',
            sticky: false,
            position: 'top-center',
            type: 'error',
            stayTime: 1500
        });
    });
    $http(p).then(function (d) {
        console.log("test")
        $scope.excellent_teacher = d.data;
    });


    $scope.doJump = function (tech) {
        window.location.href = 'search?tech='+tech+'&gender='+'不限'+'&area='+'不限'+'&price='+'不限'+'&text='+undefined;
    };

});