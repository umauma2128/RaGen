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
<br><small>eg: cma-nonprod/obi/obi-infra/obi-rds-sandbox/terraform.tfstate</small>
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
<option value="&quot;vpc-4d486724&quot;">vpc-4d486724</option>
<option value="&quot;vpc-7c7e0314&quot;">vpc-7c7e0314</option>
</select>
<br><br>

subnet_ids<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-18497671&quot;">subnet-18497671<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-0e9fcc30b9f3c66f1&quot;">subnet-0e9fcc30b9f3c66f1<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-089a4137c89d822f8&quot;">subnet-089a4137c89d822f8<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-09a818a93afb4941a&quot;">subnet-09a818a93afb4941a<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-a9bed7c1&quot;">subnet-a9bed7c1<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-076c99c5fcf616bab&quot;">subnet-076c99c5fcf616bab<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-7ccbb407&quot;">subnet-7ccbb407<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-4344e239&quot;">subnet-4344e239<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-0021bf55a7c83a402&quot;">subnet-0021bf55a7c83a402<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-03721d0615b3eac8e&quot;">subnet-03721d0615b3eac8e<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-a1ef6bec&quot;">subnet-a1ef6bec<br>
<br><br>

rds_allocated_storage<br><input type="text" name="rds_storage"><br>
<small>eg: 20</small>
<br><br>

infra_sg_name<br>
<select name="infra">
<option value="&quot;INF-QA-CMA&quot;">INF-QA-CMA</option>
<option value="&quot;INF-NonProd&quot;">INF-NonProd</option>
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



<a href="http://localhost/php/devresource.php" class="previous">&laquo; Back</a>


</body>
</html>

</form>
</html>

