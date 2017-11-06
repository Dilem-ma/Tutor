/**
 * Created by cuiyuxuan on 2017/9/23.
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

tutorApp.controller('OrderCtrl', function ($scope, $location, $http) {  // 得到订单信息（根据订单ID）
    if ($location.search().orderId) {
        $scope.orderId = $location.search().orderId;
        var p = {
            method: 'post',
            url: '/api/get_current_order',
            data: {
                'id': orderId,
            }
        };
        $http(p).then(function (d) {
            $scope.orders = d.data;
            console.log($scope.orders);
            $scope.title = d.title;
            $scope.technique = d.technique;
            $scope.description = d.description;
            $scope.area = d.area;
            $scope.time = d.time;
            $scope.gender = d.gender;
            $scope.price = d.price;
            $scope.status = d.status;
            $scope.t_id = d.t_id;
        });
    }

    $scope.isTeacher = false; //判断身份
    $scope.isStudent = false;
    $scope.isGuest = false;
    var isteacher, isstudent, isguest

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
        if (d.data.success === true) {
            if (d.data.teacher != null) {
                isteacher = true;
            }
            else if (d.data.student != null) {
                isstudent = true;
            }
            else {
                isguest = true;
            }
            console.log(isstudent)
            $scope.isTeacher = isteacher;
            $scope.isStudent = isstudent;
            $scope.isGuest = isguest;
        }
    });
    console.log($scope.isTeacher)
    console.log($scope.isStudent)
    console.log($scope.isGuest)

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

    var isWaiting = (isteacher == true && $scope.status != 0) //判断教师可以接单
    var isPreparing = (isstudent == srue && $scope.status != 0)
    console.log("iswaiting")
    console.log(isWaiting)
    console.log(isPreparing)

    $scope.teacherList = new Array();

    //获取待确认老师列表
    if(isPreparing){
        t_id.forEach(function(v) {
            console.log(v);
            var p = {
                method: 'post',
                url: '/api/get_teacher_data',
                data: {
                    'id': v,
                }
            };
            $http(p).then(function (d) {
                if (d.data.success === true) {
                    $scope.teacherList.push(d.data)
                }

            });
        });
    }

    //老师：接单（判断是否已经结束了）
    function receiveOrder(id) {
        if(isWaiting){
            var a = {
                method: 'post',
                url: '/api/pick_up_order',
                data: {
                    t_id: $scope.u_id,
                    o_id: $scope.orderId,
                }
            };
            $http(a).then(function (d) {
                if (d.data.success === true) {
                    return $window.location.href = "../site/orders"; //返回order列表
                }
                else {
                    return $().toastmessage('showToast', {
                        text: d.data.errors,
                        sticky: false,
                        position: 'top-center',
                        type: 'error',
                        stayTime: 1500
                    });
                }
            });
        }
    }


});