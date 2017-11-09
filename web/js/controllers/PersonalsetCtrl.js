/**
 * Created by Dilemma丶 on 2017/3/22.
 */

var storage, tutorApp;

tutorApp = angular.module('tutorApp', []);

storage = window.localStorage;

tutorApp.controller('PersonalsetCtrl', function ($scope, $http, $window, $location) {
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
        if(d.data.birthday==null)
            $scope.current_url="https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=1033329440,3258066026&fm=27&gp=0.jpg";
        else
            $scope.current_url=d.data.url;
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
    $scope.postTask = function (name,gender,area,birthday) {
        if(name==undefined)
            name=$scope.current_name;
        if(gender==undefined)
            gender=$scope.current_gender;
        if(area==undefined)
            area=$scope.current_area;
        if(birthday==undefined)
            birthday=$scope.current_birthday;
        if(gender=="男")
            gender="male";
        else if(gender=="女")
            gender="female";
        console.log(birthday);
        console.log(gender);
        console.log(area);
        console.log(name);
        var p = {
            method: 'post',
            url: '/api/update_person_data',
            data:{

                "id":$scope.current_id,
                "name":name,
                "birthday":birthday,
                "gender":gender,
                "area":area,
                "url":$scope.current_url
            }
        };
        $http(p).then(function (d) {
            if (d.data.success === true) {
                console.log("successful")
                return $window.location.href = "../site/personaldata";
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