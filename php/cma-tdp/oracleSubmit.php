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

//Resource Folder name
//<br><input type="text" name="fn"><br>
//<small>eg: create-obi-rds-server</small>
//<br><br>

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
<br><small>eg: cma-tdp/obi/obi-infra/obi-rds-sandbox/terraform.tfstate</small>
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
<option value="&quot;vpc-0a2fea3b8a8bdbdf9&quot;">vpc-0a2fea3b8a8bdbdf9</option>
<option value="&quot;vpc-0c9eb9ef4c81a81fe&quot;">vpc-0c9eb9ef4c81a81fe</option>
</select>
<br><br>

subnet_ids<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-00e122b5a026c124d&quot;">subnet-00e122b5a026c124d<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-0e5ed56cf9e5c8d17&quot;">subnet-30e5ed56cf9e5c8d17<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-02ef5f357f0fe71b3&quot;">subnet-02ef5f357f0fe71b3<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-06aa584af64664db8&quot;">subnet-06aa584af64664db8<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-0e5b9d2ac35eaab60&quot;">subnet-0e5b9d2ac35eaab60<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-0b37a05220f8a9695&quot;">subnet-0b37a05220f8a9695<br>
<br><br>

rds_allocated_storage<br><input type="text" name="rds_storage"><br>
<small>eg: 20</small>
<br><br>

infra_sg_name<br>
<select name="infra">
<option value="&quot;INF-TDP&quot;">INF-TDP</option>
<option value="&quot;INF-TDP-US-SG01&quot;">INF-TDPUS-SG01</option>
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



<a href="../cmatdpresource.php" class="previous">&laquo; Back</a>


</body>
</html>

</form>
</html>

