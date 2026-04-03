<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Json Array</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/angular.min.js"></script>
    <script>
        var module = angular.module("mymodule", []);
        module.controller("mycontroller", function($scope) {
            $scope.jsonArray = [{
                    name: "abc",
                    pwd: "ABC",
                    mobile: "123"
                },
                {
                    name: "ghi",
                    pwd: "GHI",
                    mobile: "789"
                },
                {
                    name: "def",
                    pwd: "JKL",

                    mobile: "456"
                },
                {
                    name: "jkl",
                    pwd: "DEF",
                    mobile: "012"
                },
                {
                    name: "mno",
                    pwd: "MNO",
                    mobile: "345"
                }
            ];

            //            functions
            $scope.doDelete = function(name) {
                alert(name);
            }
            $scope.doSort = function(mycategory) {
                $scope.colname = mycategory;
            }
        })

    </script>
    <style>
        th:hover {
            cursor: pointer;
            background-color: antiquewhite;
        }

    </style>
</head>
<!--only sorting is added-->
<body ng-app="mymodule" ng-controller="mycontroller">
    <center>
        <table width="500" border="1" rules="all">
            <tr>
                <th>S.no.</th>
                <th ng-click="doSort('name')">Name</th>
                <th ng-click="doSort('pwd')">Password</th>
                <th ng-click="doSort('mobile')">Mobile</th>
                <th>Operations</th>
            </tr>
            <tr ng-repeat="obj in jsonArray | orderBy:colname">
                <!--            <td>{{$index}}</td>   starts with 0 by-default-->
                <td>{{$index +1}}</td>
                <td>{{obj.name}}</td>
                <td>{{obj.pwd}}</td>
                <td>{{obj.mobile}}</td>
                <td><input type="button" value="Delete" ng-click="doDelete(obj.name);"></td>
            </tr>
        </table>
    </center>
</body>

</html>
