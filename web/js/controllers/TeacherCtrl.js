/**
 * Created by Dilemma丶 on 2017/3/22.
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

tutorApp.controller('TeacherCtrl', function ($scope, $http, $location) {
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
        $scope.current_url = d.data.url;
        $scope.current_num = d.data.username;
        $scope.current_name = d.data.name;
        $scope.current_area = d.data.area;
        if(d.data.gender=="male")
            $scope.current_gender="男";
        else
            $scope.current_gender="女";
        if(d.data.birthday==null)
            $scope.current_birthday=" ";
        else
            $scope.current_birthday=d.data.birthday;
    });
    var p = {
        method: 'get',
        url: '/api/get_identity',
        params: {
            'token': $scope.token
        }
    };
    $http(p).then(function (d) {
        if (d.data.error != undefined) { //都不是
            $scope.stu_status = 0; //没注册
            $scope.tea_status = 0;
        }
        else if (d.data.teacher.id == undefined) { //不是老师是学生
            $scope.tea_status = 0;
            $scope.stu_status = 1;
            $scope.stu_description = d.data.student.describe;
            $scope.stu_grade = d.data.student.grade;
        }
        else if (d.data.student.id == undefined) { //不是学生是老师
            $scope.tea_status = 1;
            $scope.stu_status = 0;
            $scope.tea_description = d.data.teacher.describe;
            $scope.tea_education = d.data.teacher.education;
            $scope.tea_major = d.data.teacher.major;
            $scope.tea_star = d.data.teacher.star;
        }
        else {
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