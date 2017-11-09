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
    $scope.onAuthen = function (name,school,grade,education) {
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
        console.log(education);

        var p = {
            method: 'post',
            url: '/api/student_identity',
            data: {

                "u_id": $scope.current_id,
                "grade": grade,
                "stu_id": education,
                "school": school,
                "describe": " 1"
            }
        };
        $http(p).then(function (d) {
            console.log(d.data)
            if (d.data.success === true) {
                console.log("successful");
                return $window.location.href = "authentication";

            }
        });
    };
});