<!--almost same as angularjs-5withdb.php-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Angularjs with DB</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/angular.min.js"></script>

    <script>
        var module = angular.module("mymodule", []);
        module.controller("mycontroller", function($scope, $http) {
            $scope.jsonArray;

            $scope.doFetch = function() {
                //                JSON request
                $http.get("angularjs-5fetchall.php").then(okFx, notOk);

                function okFx(response) { //call back function
                    //response.data has jsonArray

                    alert(JSON.stringify(response.data));
                    $scope.jsonArray = response.data;
                    
                    
                    
            $scope.selObject2=$scope.jsonArray[1];
                    
                    
                }

                function notOk(response) { //in case error comes
                    alert(response.data);
                }

            }
            $scope.doDelete = function(email) { //since in this case profileform(table) had email as primary key
                $http.get("angularjs-5delete.php?email=" + email).then(okFx, notOk);

                function okFx(response) {
                    alert(response.data);
                    $scope.doFetch();//to show immediate effect on table else row will remain appearing but in reality there exist none
                }

                function notOk(response) {
                    alert(response.data);
                }
                //                alert(email);
            }
            $scope.doSort = function(category_kuch_bhi) {
                $scope.colName = category_kuch_bhi;
            }
$scope.doFetchMob=function(){
    $http.get("angularjs-6fetch-mobile.php").then(okFx, notOk);
    function okFx(response) {
        $scope.jsonArrayMob=response.data;
        $scope.selObject1=$scope.jsonArrayMob[0];
    }
    function notOk(response) {
        alert(response.data);
    }
}
$scope.doShow1=function(){
    alert($scope.selObject1.mobile);
}
$scope.doShow2=function(){
    alert($scope.selObject2.name);
}

        });

    </script>
    <style>
        th:hover {
            background-color: antiquewhite;
            cursor: pointer;
        }

    </style>
</head>

<body ng-app="mymodule" ng-controller="mycontroller" ng-init="doFetchMob();">
   <p>
       <input type="button" ng-click="doFetchMob();" value="Fetch Mobile No.s"> 
       <select ng-options="obj.mobile for obj in jsonArrayMob" ng-model="selObject1" ng-change="doShow1();"></select>
   </p>
    <center>
        <h1>All records</h1>
        <div>
            Fetch All records : <input type="button" ng-click="doFetch();" value="Fetch" class="btn btn-primary">
        </div>
        <br>
        Search field:<input type="text" ng-model="googler.name">
          ||  All Names: <select ng-options="obj.name for obj in jsonArray" ng-model="selObject2" ng-change="doShow2();"></select>
        <br>
        <br>
        <table border="2" rules="all" width="600">
            <tr>
                <th>S.no.</th>
                <th ng-click="doSort('name')">Name</th>
                <th ng-click="doSort('email')">Email</th>
                <th ng-click="doSort('pwd')">Password</th>
                <th ng-click="doSort('mobile')">Mobile</th>
                <th>Operations</th>
            </tr>
            <tr ng-repeat="obj in jsonArray| orderBy:colName | filter:googler">
                <td>{{$index+1}}</td>
                <td>{{obj.name}}</td>
                <td>{{obj.email}}</td>
                <td>{{obj.pwd}}</td>
                <td>{{obj.mobile}}</td>
                <td align="center"><input type="button" class="btn btn-danger" value="Delete" ng-click="doDelete(obj.email);"></td>
            </tr>
        </table>
    </center>
    
        <div class="row">
            <div class="col-md-3 mt-3 mr-5 ml-3" ng-repeat="obj in jsonArray | orderBy:colName | filter:googler">
                <div class="card" style="width: 18rem;float:left;">
                    <img src="uploads/{{obj.pic}}" height="150" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{obj.name}}</h5>
                        <p class="card-text">{{obj.pwd}}</p>
                        <p class="card-text">{{obj.mobile}}</p>
                        <a href="#" class="btn btn-primary" ng-click="doDelete(obj.name);">Go somewhere</a>
                    </div>
                </div>

            </div>
        </div>
</body>

</html>
