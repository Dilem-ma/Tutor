/**
 * Created by cuiyuxuan on 2017/9/24.
 */
var storage, tutorApp;

tutorApp = angular.module('tutorApp', []);

storage = window.localStorage;

tutorApp.controller('StutaskCtrl', function ($scope, $http, $window) {


    $scope.techs = ["编程语言", "数据库", "web技术", "计算机概念", "环境配置", "app开发", "服务器脚本", "运维技术", "其它"];
    $scope.genders = ["男性", "女性","不限"];
    $scope.areas = ["黄浦区","徐汇区","长宁区","静安区","普陀区","虹口区","杨浦区","浦东新区","闵行区","宝山区","嘉定区","金山区","松江区","青浦区","奉贤区","崇明区"];

    $scope.postTask = function (technique, area, title, description, price, teachTime, gender, address) {
        if (localStorage.getItem(storage) !== void 0) {
            $scope.token = localStorage.getItem(storage);
            console.log($scope.token);
        } else {
            $scope.token = void 0;
        }

        var a = {
            method: 'get',
            url: '/api/get_current_user',
            params: {
                'token': $scope.token
            }
        };
        $http(a).then(function (d) {
            $scope.current_id = d.data.id;
            var c = {
                method: 'post',
                url: '/api/get_stu_data',
                data: {
                    "u_id": $scope.current_id
                }
            };
            $http(c).then(function (e) {
                $scope.s_id=e.data.id
                console.log($scope.current_id,$scope.s_id, technique, area, title, description, price, teachTime, gender,address);


                var p = {
                    method: 'post',
                    url: '/api/stu_add_order',
                    data: {
                        "s_id":$scope.s_id,
                        "technique":technique,
                        "area":area,
                        "title":title,
                        "description":description,
                        "price":price,
                        "teach_time":teachTime,
                        "is_urgent":false,
                        "gender":gender,
                        "address":address
                    }
                };
                $http(p).then(function (f) {
                    if (f.data.success === true) {
                        return $window.location.href = "search";
                    } else {
                        return $().toastmessage('showToast', {
                            text: f.data.errors,
                            sticky: false,
                            position: 'top-center',
                            type: 'error',
                            stayTime: 1500
                        });
                    }
                });
            });
        });




    };
});