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
tutorApp.controller('TeacherdataCtrl', function ($window,$scope, $location,$http) {
    console.log($location.search().id);
    if (localStorage.getItem(storage) !== void 0) {
        $scope.token = localStorage.getItem(storage);
        console.log($scope.token);
    } else {
        $scope.token = void 0;
    }
    var k = {
        method: 'get',
        url: '/api/get_current_user',
        params: {
            'token': $scope.token
        }
    };
    $http(k).then(function (d) {
        $scope.current_id = d.data.id;
    });
    $scope.jump = function () {
        console.log($scope.token)
        return $window.location.href = 'teachersearch';
    }
    $scope.postTask = function (id) {
        if(id==undefined)
            id=$scope.current_id;
        console.log(id);
        var p = {
            method: 'post',
            url: '/api/add_to_favourite',
            data:{
                "id":$scope.current_id,
                "tid":$scope.current_t_id
            }
        };
        $http(p).then(function (d) {
            console.log($scope.token)
            if (d.data.success === true) {
                console.log("successful")
                return $window.location.href = "../site/favorite";
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
    var q = {
        method: 'post',
        url: '/api/get_user_data',
        data: {
            "id":$location.search().id
        }
    };
    $http(q).then(function (d) {
        $scope.current_t_id = d.data[0].t_id;
        $scope.current_url = d.data[0].url;
        $scope.current_num = d.data[0].username;
        $scope.current_name = d.data[0].name;
        $scope.current_area = d.data[0].area;
        $scope.current_major = d.data[0].major;
        $scope.current_star = d.data[0].star;
        $scope.current_describe = d.data[0].describe;
        $scope.current_education = d.data[0].education;
        console.log($scope.current_url);
        console.log($scope.current_name);
        console.log($scope.current_area);
        if(d.data[0].gender=="male")
            $scope.current_gender="男";
        else
            $scope.current_gender="女";
        if(d.data[0].birthday==null)
            $scope.current_birthday=" ";
        else
            $scope.current_birthday=d.data[0].birthday;
        console.log($scope.current_birthday);
    });


});