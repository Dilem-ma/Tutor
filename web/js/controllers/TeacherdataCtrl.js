/**
 * Created by Dilemma丶 on 2017/3/22.
 */

var storage, tutorApp;

tutorApp = angular.module('tutorApp', []);

storage = window.localStorage;

tutorApp.controller('TeacherdataCtrl', function ($scope, $http,$location) {
    console.log($location)
    if ($location.search().id)
        var id = $location.search().id;
    var q = {
        method: 'get',
        url: '/api/get_teacher_data',
        params: {
            'id': id
        }
    };
    if(id) {
        $http(q).then(function (d) {
            $scope.current_url = d.data.url;
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
    }
});