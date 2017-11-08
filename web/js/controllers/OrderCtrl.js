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

tutorApp.controller('OrderCtrl', function ($scope, $location, $http, $window) {  // 得到订单信息（根据订单ID）
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
            $scope.status = d.data.status;
            $scope.t_id = d.data.t_id;
            $scope.address = d.data.address
            var status = $scope.status = d.data.status;
            $scope.t_id = d.data.t_id[0]


            switch (d.data.status) {
                case -1 :
                    $scope.status = "等待接单";
                    $scope.teacher = "待确定";

                    break
                case 0 :
                    $scope.status = "等待完成";
                    var c = {
                        method: 'post',
                        url: '/api/get_teacher_data',
                        data: {
                            "t_id": $scope.t_id,
                        }
                    };
                    $http(c).then(function (e) {
                        $scope.teacher = e.data[0].name
                    });
                    break
                case -2:
                    $scope.status = "等待评价";
                    var c = {
                        method: 'post',
                        url: '/api/get_teacher_data',
                        data: {
                            "t_id": $scope.t_id,
                        }
                    };
                    $http(c).then(function (e) {
                        $scope.teacher = e.data[0].name
                    });
                    break
                case -3:
                    $scope.status = "已完成";
                    var c = {
                        method: 'post',
                        url: '/api/get_teacher_data',
                        data: {
                            "t_id": $scope.t_id,
                        }
                    };
                    $http(c).then(function (e) {
                        $scope.teacher = e.data[0].name
                    });
                    break
                default:
                    $scope.status = "已经有" + d.data.status + "名老师发出申请";
                    $scope.teacher = "待确定";

                    break
            }
            var isstudent = false
            var isteacher = false

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

                if (d.data.student != null) {
                    isstudent = true;
                    $scope.isStudent = isstudent;
                    $scope.isPreparing = (isstudent == true && status > 0) //判断学生可以确认老师
                    $scope.onSure = (isstudent==true && status == 0)
                    $scope.teacherList = new Array();
                    //获取待确认老师列表
                    if ($scope.isPreparing) {
                        console.log($scope.orderId)
                        var c = {
                            method: 'post',
                            url: '/api/get_pick_teachers',
                            data: {
                                'o_id': $scope.orderId,
                            }
                        };
                        $http(c).then(function (e) {
                            $scope.teacherList = e.data
                            console.log(e.data)
                        });
                    }
                }
                if (d.data.teacher != null) {
                    isteacher = true;
                    var p = {
                        method: 'post',
                        url: '/api/get_order_status',
                        data: {
                            't_id': d.data.teacher.id,
                            'o_id': $scope.orderId,
                        }
                    };
                    $http(p).then(function (e) {
                        switch (e.data.status) {
                            case -1 :
                                $scope.teacher = "待选择教师";

                                break
                            case 0 :
                                $scope.status = "等待完成";
                                var c = {
                                    method: 'post',
                                    url: '/api/get_teacher_data',
                                    data: {
                                        "t_id": $scope.t_id,
                                    }
                                };
                                $http(c).then(function (e) {
                                    $scope.teacher = e.data[0].name
                                });

                                break
                            case -2:
                                $scope.status = "等待评价";
                                console.log($scope.t_id)
                                var c = {
                                    method: 'post',
                                    url: '/api/get_teacher_data',
                                    data: {
                                        "t_id": $scope.t_id,
                                    }
                                };
                                $http(c).then(function (e) {
                                    $scope.teacher = e.data[0].name
                                });

                                break
                            case -3:
                                $scope.status = "已完成";
                                var c = {
                                    method: 'post',
                                    url: '/api/get_teacher_data',
                                    data: {
                                        "t_id": $scope.t_id,
                                    }
                                };
                                $http(c).then(function (e) {
                                    $scope.teacher = e.data[0].name
                                });
                                break
                            default:
                                if (e.data.success == false) {
                                    $scope.status = "已被拒"
                                    $scope.teacher = "保密"
                                }
                                else {
                                    $scope.status = "已经有" + e.data.status + "名老师接单";
                                }
                                break
                        }
                    });
                }

            });

        });




    }
    $scope.onComplete = function () {
        var p = {
            method: 'post',
            url: '/api/complete_order',
            data: {
                'o_id': $scope.orderId
            }
        };
        $http(p).then(function (e) {
            if(e.data.success == true){
                return $window.location.href = "orderlist";
            }
        });
    }
    $scope.onSelect = function (t_id) {
        var p = {
            method: 'post',
            url: '/api/stu_check_order',
            data: {
                't_id': t_id,
                'o_id': $scope.orderId,
            }
        };
        $http(p).then(function (e) {
            if(e.data.success == true){
                return $window.location.href = "orderlist";
            }
        });
    }

});