/**
 * Created by cuiyuxuan on 2017/9/24.
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

tutorApp.controller('TaskCtrl', function ($scope, $location, $http, $window) {  // 得到订单信息（根据订单ID）
    if ($location.search().id) {
        $scope.orderId = $location.search().id;
        var p = {
            method: 'post',
            url: '/api/get_current_order',
            data: {
                'id': $scope.orderId,
            }
        };
        $http(p).then(function (d) {
            console.log(d.data);
            $scope.technique = d.data.technique;
            $scope.description = d.data.description;
            $scope.area = d.data.area;
            $scope.time = d.data.teach_time;
            $scope.gender = d.data.gender;
            $scope.price = d.data.price;
            $scope.address = d.data.address;
            $scope.title = d.data.title;
        });
    }


    var isteacher = false
    var isstudent = false
    var isguest = false

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
    $http(q).then(function (d) {

            if (d.data.teacher != null) {
                isteacher = true;
            }
            else if (d.data.student != null) {
                isstudent = true;
            }
            else {
                isguest = true;
            }
            $scope.isTeacher = isteacher;
            $scope.isStudent = isstudent;
            $scope.isGuest = isguest;
        // console.log($scope.isTeacher)
        // console.log($scope.isStudent)
        // console.log($scope.isGuest)
        console.log(isteacher)
        console.log(isstudent)
        console.log(isguest)
    });



    var b =  {
        method: 'get',
        url: '/api/get_current_user',
        params: {
            'token': $scope.token
        }
    };
    $http(b).then(function (d) {
        $scope.u_id = d.data.id
    });


    //教师--是否剋接单

    var isWaiting = (isteacher == true && $scope.status != 0) //判断教师可以接单

    $scope.postRequirement = function(){
        if(isteacher){
            var c = {
                method: 'post',
                url: '/api/get_teacher_data',
                data: {
                    "id":$scope.u_id
                }
            };
            $http(c).then(function (d) {
                console.log(d.data);
                var t_id = d.data[0].t_id;
                console.log(t_id)
                var b = {
                    method: 'post',
                    url: '/api/pick_up_order',
                    data: {
                        "o_id":$scope.orderId,
                        "t_id":t_id
                    }
                };
                console.log(t_id)

                $http(b).then(function (d) {
                    return $window.location.href = "orderlist";
                });
            });
        }
    }



});