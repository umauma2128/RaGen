<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

<body ng-app="myApp" ng-controller="myCtrl">

<h1 ng-style="myObj">RDS SQL</h1>

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



<form action="sql.php" method="post">



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
<br><small>eg: dmz-nonprod/obi/obi-infra/obi-rds-sandbox/terraform.tfstate</small>
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
<small>eg: obidbrds001awsq</small>
<br><br>

rds_instance_class<br><input type="text" name="rds_ins"><br>
<small>eg: db.m5.xlarge</small>
<br><br>

rds_engine_type<br><input type="text" name="rds_typ"><br>
<small>eg: sqlserver-se</small>
<br><br>

rds_engine_version<br><input type="text" name="rds"><br>
<small>eg: 14.00.3035.2.v1</small>
<br><br>

vpc_id<br>
<select name="vpc">
<option value="&quot;vpc-01c11d4936f129115&quot;">vpc-01c11d4936f129115</option>
</select>
<br><br>

subnet_ids<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-0ec610612f891e784&quot;">subnet-0ec610612f891e784<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-05deb9c6362be854d&quot;">subnet-05deb9c6362be854d<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-0097c0963493da708&quot;">subnet-0097c0963493da708<br>
<br><br>

rds_allocated_storage<br><input type="text" name="rds_storage"><br>
<small>eg: 20</small>
<br><br>

infra_sg_name<br>
<select name="infra">
<option value="&quot;INF-DMZ-QA&quot;">INF-DMZ-QA</option>
</select>
<br><br>

ad_domain_id<br>
<select name="ad_id">
<option value="&quot;d-9a673276a&quot;">d-9a673276a</option>
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



<a href="../dmznonprodresource.php" class="previous">&laquo; Back</a>


</body>
</html>

</form>
</html>

