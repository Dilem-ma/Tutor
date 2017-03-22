/**
 * Created by Dilemma丶 on 2017/3/22.
 */

var storage, tutorApp;

tutorApp = angular.module('tutorApp', []);

storage = window.localStorage;

tutorApp.controller('AuthenCtrl', function ($scope, $http) {
    if (localStorage.getItem(storage) !== void 0) {
        $scope.token = localStorage.getItem(storage);
    } else {
        $scope.token = void 0;
    }
    var p = {
        method: 'get',
        url: '/api/get_identity',
        data: {
            'token': $scope.token
        }
    };
    $http(p).then(function (d) {
        if(d.data.error!=undefined){ //都不是
            $scope.stu_status = 0; //没注册
            $scope.tea_status = 0;
        }
        else if (d.data.teacher.id == undefined){ //不是老师是学生
            $scope.tea_status = 0;
            $scope.stu_status = 1;
            $scope.stu_description = d.data.student.describe;
            $scope.stu_grade = d.data.student.grade;
        }
        else if (d.data.student.id == undefined){ //不是学生是老师
            $scope.tea_status = 1;
            $scope.stu_status = 0;
            $scope.tea_description = d.data.teacher.describe;
            $scope.tea_education = d.data.teacher.education;
            $scope.tea_major = d.data.teacher.major;
            $scope.tea_star = d.data.teacher.star;
        }
        else{
            $scope.tea_status = 1;
            $scope.stu_status = 1;
            $scope.stu_description = d.data.student.describe;
            $scope.stu_grade = d.data.student.grade;
            $scope.tea_description = d.data.teacher.describe;
            $scope.tea_education = d.data.teacher.education;
            $scope.tea_major = d.data.teacher.major;
            $scope.tea_star = d.data.teacher.star;
        }
    });

});