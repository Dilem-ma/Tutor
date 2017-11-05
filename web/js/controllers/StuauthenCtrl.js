/**
 * Created by Dilemma丶 on 2017/3/22.
 */

var storage, tutorApp;

tutorApp = angular.module('tutorApp', []);

storage = window.localStorage;

tutorApp.controller('StuauthenCtrl', function ($scope, $http, $window, $location) {
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
        $scope.current_id = d.data.id;
    });
    $scope.postTask = function (name,school,grade,stu_id) {
        // if(name==undefined)
        //     name=$scope.current_name;
        // if(gender==undefined)
        //     gender=$scope.current_gender;
        // if(area==undefined)
        //     area=$scope.current_area;
        // if(birthday==undefined)
        //     birthday=$scope.current_birthday;
        // if(gender=="男")
        //     gender="male";
        // else if(gender=="女")
        //     gender="female";

        console.log($scope.current_id);
        console.log(name);
        console.log(grade);
        console.log(school);

        var p = {
            method: 'post',
            url: '/api/student_identity',
            data:{
                "name":name,
                "u_id":$scope.current_id,
                "grade":grade,
                "school":school
            }
        };
        $http(p).then(function (d) {
            if (d.data.success === true) {
                console.log("successful");
            } else {
                return $().toastmessage('showToast', {
                    // text: d.data.errors.password[0], 要改成自己要用的信息
                    sticky: false,
                    position: 'top-center',
                    type: 'error',
                    stayTime: 1500
                });
            }
        });
    };
});