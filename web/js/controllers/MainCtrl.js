/**
 * Created by Dilemma丶 on 2017/3/19.
 */
/**
 * Created by Dilemma丶 on 2017/3/12.
 */
var storage, tutorApp;

tutorApp = angular.module('tutorApp', []);

storage = window.localStorage;

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
        $scope.excellent_teacher = d.data;
    });

    if (localStorage.getItem(storage) !== void 0) {
        $scope.token = localStorage.getItem(storage);
        console.log($scope.token);
    } else {
        $scope.token = void 0;
    }
    var q = {
        method: 'get',
        url: '/api/get_identity',
        params: {
            'token': $scope.token
        }
    };
    $scope.isTeacher = false;
    $scope.isStudent = false;
    $scope.isGuest = false;
    var isteacher, isstudent, isguest
    $http(q).then(function (d) {
        if(d.data.teacher != null){
            isteacher = true;
        }
        else if(d.data.student != null){
            isstudent = true;
        }
        else{
            isguest = true;
        }
        console.log(isstudent)
        $scope.isTeacher = isteacher;
        $scope.isStudent = isstudent;
        $scope.isGuest = isguest;
    });
    console.log($scope.isTeacher)
    console.log($scope.isStudent)
    console.log($scope.isGuest)


    $scope.doJump = function (tech) {
        window.location.href = 'search?tech='+tech+'&gender='+'不限'+'&area='+'不限'+'&price='+'不限'+'&text='+undefined;
    };

});