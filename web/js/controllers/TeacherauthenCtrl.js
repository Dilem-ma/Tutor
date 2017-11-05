/**
 * Created by Dilemma丶 on 2017/3/22.
 */

var storage, tutorApp;

tutorApp = angular.module('tutorApp', []);

storage = window.localStorage;

tutorApp.controller('TeacherauthenCtrl', function ($scope, $http, $window, $location) {
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
    $scope.postTask = function (name,gender,birthday,education,major,describe) {
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
        console.log(gender);
        console.log(birthday);
        console.log(education);
        console.log(major);
        console.log(describe);
        var p = {
            method: 'post',
            url: '/api/teacher_identity',
            data:{
                "u_id":$scope.current_id,
                "name":name,
                "gender":gender,
                "birthday":birthday,
                "education":education,
                "major":major,
                "certificate":"https://.jpg",
                "describe":describe
            }
        };
        $http(p).then(function (d) {
            if (d.data.success === true) {
                console.log("successful");
                return $window.location.href = "authentication";
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