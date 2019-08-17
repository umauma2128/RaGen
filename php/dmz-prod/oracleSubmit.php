<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

<body ng-app="myApp" ng-controller="myCtrl">

<h1 ng-style="myObj">RDS ORACLE</h1>

<script>
var app = angular.module("myApp", []);
app.controller("myCtrl", function($scope) {
               $scope.myObj = {
               "color" : "white",
               "background-color" : "#000080",
               "font-size" : "40px",
               "padding" : "40px"
               }
               });
</script>



<form action="oracle.php" method="post">

Resource Folder name
<br><input type="text" name="fn"><br>
<small>eg: create-obi-rds-server</small>
<br><br>

s3 Bucket Name<br>
<select name="buc">
<option value="&quot;cma-tf-state-dccm&quot;">cma-tf-state-dccm</option>
<option value="&quot;cma-tf-state-pdti&quot;">cma-tf-state-pdti</option>
<option value="&quot;cma-tf-state-cper&quot;">cma-tf-state-cper</option>
<option value="&quot;cma-tf-state-crld&quot;">cma-tf-state-crld</option>
<option value="&quot;cma-tf-state-entd&quot;">cma-tf-state-entd</option>
<option value="&quot;cma-tf-state-istr&quot;">cma-tf-state-istr</option>
<option value="&quot;cma-tf-state-apie&quot;">cma-tf-state-apie</option>
</select><br><br>

Terraform.tf key<br><input type="text" name="ky">
<br><small>eg: dmz-prod/obi/obi-infra/obi-rds-sandbox/terraform.tfstate</small>
<br><br>

module name<br><input type="text" name="mod"><br>
<small>eg: obi-rds</small>
<br><br>

env<br>
<select name="en">
<option value="sandbox">sandbox</option>
<option value="dev">dev</option>
<option value="qa">qa</option>
<option value="qa1">qa1</option>
<option value="qa2">qa2</option>
<option value="prod">prod</option>
<option value="dr">dr</option>
</select>
<br><br>

db_name<br><input type="text" name="db"><br>
<small>eg: obidbrds001awsp</small>
<br><br>

rds_engine_version<br><input type="text" name="rds"><br>
<small>eg: 12.2.0.1.ru-2019-04.rur-2019-04.r1</small>
<br><br>

vpc_id<br>
<select name="vpc">
<option value="&quot;vpc-056261968890fc342&quot;">vpc-056261968890fc342</option>
</select>
<br><br>

subnet_ids<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-03364d59521f830a4&quot;">subnet-03364d59521f830a4<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-0dfbb563fe9ff487f&quot;">subnet-0dfbb563fe9ff487f<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-0bdf2fccc5c631408&quot;">subnet-0bdf2fccc5c631408<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-092f77c8a5445a6d5&quot;">subnet-092f77c8a5445a6d5<br>
<br><br>

rds_allocated_storage<br><input type="text" name="rds_storage"><br>
<small>eg: 20</small>
<br><br>

infra_sg_name<br>
<select name="infra">
<option value="&quot;INF-DMZ-Prod-DR-Greenfield&quot;">INF-DMZ-Prod-DR-Greenfield</option>
<option value="&quot;INF-DMZ-PROD&quot;">INF-DMZ-PROD</option>
<option value="&quot;INF-DMZ-Prod-DR-Test&quot;">INF-DMZ-Prod-DR-Test</option>
</select>
<br><br>

multi_az<br><input type="text" name="multi"><br>
<small>eg: true or false</small>
<br><br>



<input type="submit">
<br><br>
</body>



<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
a {
    text-decoration: none
display: inline-block;
padding: 8px 10px;
}

.previous {
    background-color: #ddd;
color: black;
}



}
</style>
</head>
<body>



<a href="http://localhost/php/dmzprodresource.php" class="previous">&laquo; Back</a>


</body>
</html>

</form>
</html>

