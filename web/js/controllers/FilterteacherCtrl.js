/**
 * Created by Dilemma丶 on 2017/3/21.
 */

var storage, tutorApp;

tutorApp = angular.module('tutorApp', []);

storage = window.localStorage;

tutorApp.controller('FilterCtrl', function ($scope,$http,$rootScope) {

    $scope.techs = ["不限", "编程语言", "数据库", "web技术", "计算机概念", "环境配置"];
    $scope.genders = ["不限", "男性", "女性"];
    $scope.areas = ["不限","黄浦区","徐汇区","长宁区","静安区","普陀区","虹口区","杨浦区","浦东新区","闵行区","宝山区","嘉定区","金山区","松江区","青浦区","奉贤区","崇明区"];
    $scope.prices = ["不限", "50/h以下","50/h-100/h", "100/h-150/h","150/h以上"];

    $scope.doFilter = function (tech,gender,area,price,text) {
        window.location.href = 'search?tech='+tech+'&gender='+gender+'&area='+area+'&price='+price+'&text='+text;
    };
});