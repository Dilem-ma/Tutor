/**
 * Created by cuiyuxuan on 2017/11/6.
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

tutorApp.controller('OrderListCtrl', function ($scope, $http) {

    if (localStorage.getItem(storage) !== void 0) {
        $scope.token = localStorage.getItem(storage);
    } else {
        $scope.token = void 0;
    }
    var b =  {
        method: 'get',
        url: '/api/get_current_user',
        params: {
            'token': $scope.token
        }
    };
    $http(b).then(function (d) {
        $scope.u_id = d.data.id
        console.log($scope.u_id)
        var q = {
            method: 'post',
            url: '/api/get_user_orders',
            data: {
                "id": $scope.u_id
            }
        };
        $http(q).then(function (d) {
            $scope.orders = d.data;
            $scope.orders.forEach(function (v) {
                console.log(v)
                switch(v.status){
                    case -1 : v.status = "等待确认";
                        break
                    case 0 : v.status = "等待完成";break
                    case -2: v.status = "等待评价";break
                    case -3: v.status = "已完成";break
                    default: v.status = "已经有" + d.data.status+ "名老师接单";
                    break
                }
            })
        });
    });

    $scope.toOrder = function (id) {
        window.location.href = 'task?id='+id;
    };

});
