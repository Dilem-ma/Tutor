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

    function findtech(tech){
        for(var i=0;i<$scope.techs.length;i++){
            if (tech === $scope.techs[i])
                return i+1;
        }
    }

    function findgender(tech){
        for(var i=0;i<$scope.genders.length;i++){
            if (tech === $scope.genders[i])
                return i+1;
        }
    }

    function findarea(tech){
        for(var i=0;i<$scope.areas.length;i++){
            if (tech === $scope.areas[i])
                return i+1;
        }
    }

    $scope.postTask = function (technique, area, title, description, price, teachTime, gender, address) {

        if (title === void 0 || title.length === 0)
            return;
        if (description === void 0 || description.length === 0)
            return;
        if (teachTime === void 0 || teachTime.length === 0)
            return;
        if (price === void 0 || price.length === 0)
            return;
        if (address === void 0 || address.length === 0)
            return;
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

                var area_ = findarea(area); // 转成数字的area
                var gender_ = findgender(gender); // 转成数字
                var technique_ = findtech(technique); // 转成数字
                console.log($scope.current_id,$scope.s_id, technique_, area_, title, description, price, teachTime, gender_,address);
                var p = {
                    method: 'post',
                    url: '/api/stu_add_order',
                    data: {
                        "s_id":$scope.s_id,
                        "technique":technique_,
                        "area":area_,
                        "title":title,
                        "description":description,
                        "price":price,
                        "teach_time":teachTime,
                        "is_urgent":false,
                        "gender":gender_,
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