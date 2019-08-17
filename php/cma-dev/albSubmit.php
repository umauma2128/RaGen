<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

<body ng-app="myApp" ng-controller="myCtrl">

<h1 ng-style="myObj">Application Load Balancer</h1>

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



<form action="alb.php" method="post">

Resource Folder name
<br><input type="text" name="fn"><br>
<small>eg: create-obi-app</small>
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
<br><small>eg: cma-dev/obi/obi-infra/alb/terraform.tfstate</small>
<br><br>

module name<br><input type="text" name="mod"><br>
<small>eg: obi-alb</small>
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


app_cert_fqdn<br><input type="text" name="cert"><br>
<small>eg: obi-ofsaa-sandbox.us.comerica.net</small>
<br><br>

vpc_id<br>
<select name="vpc">
<option value="&quot;vpc-0021cd269fb8a6a03&quot;">vpc-0021cd269fb8a6a03</option>
<option value="&quot;vpc-07e9d22975394ea8c&quot;">vpc-07e9d22975394ea8c</option>
</select>
<br><br>


subnet_ids<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-03d10605de323bc17&quot;">subnet-3f96ab56<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-0cd0eb584372af812&quot;">subnet-baff83c1<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-01614b9b0831798a0&quot;">subnet-93da5fde<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-0c597b82b1b8416a1&quot;">subnet-93da5fde<br>
<br><br>


region<br>
<select name="reg"><br>
<option value="&quot;us-east-2&quot;">us-east-2</option>
</select>
<br><br>

availability_zones<br>
<input type="checkbox" name="check[]" value="&quot;us-east-2a&quot;">us-east-2a<br>
<input type="checkbox" name="check[]" value="&quot;us-east-2b&quot;">us-east-2b<br>
<input type="checkbox" name="check[]" value="&quot;us-east-2c&quot;">us-east-2c<br>
<br>

r53_zone_domain_name<br><input type="text" name="r53_zone"><br>
<small>eg: dev.r53.comerica.net</small>
<br><br>

r53_lb_record_name<br><input type="text" name="r53_record"><br>
<small>eg: obi.dev.r53comerica.net</small>
<br><br>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
alb_name<br><input type="text" name="alb"><br>
<small>eg: obialb001awsd</small>
<br><br>

alb_probe_url<br><input type="text" name="alburl"><br>
<small>eg: /HelloComerica/probe.html</small>
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

