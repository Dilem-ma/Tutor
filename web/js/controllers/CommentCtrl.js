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

tutorApp.controller('CommentCtrl', function ($scope, $location, $http, $window) {  // 得到订单信息（根据订单ID）
    if ($location.search()) {
        console.log($location.search())
    }

    if (localStorage.getItem(storage) !== void 0) {
        $scope.token = localStorage.getItem(storage);
        console.log($scope.token);
    } else {
        $scope.token = void 0;
    }
    $scope.theo_id=$location.search().o_id;
    $scope.thet_id=$location.search().t_id;
    $scope.theu_id=$location.search().u_id;



    $scope.postComment = function (grade,comment) {
        console.log($scope.theo_id);
        console.log($scope.thet_id);
        console.log($scope.theu_id);
        console.log(grade);
        console.log(comment);
        var p = {
            method: 'post',
            url: '/api/add_comment',
            data: {
                "o_id":$scope.theo_id,
                "t_id":$scope.thet_id,
                "u_id":$scope.theu_id,
                "content":comment,
                "star":grade
            }
        };
        $http(p).then(function (e) {
            if(e.data.success == true){
                return $window.location.href ='order?id='+$scope.theo_id
            }
        });
    }



});