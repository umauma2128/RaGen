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
<br><small>eg: cma-tdp/obi/obi-infra/alb/terraform.tfstate</small>
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
<small>eg: obi-prod.us.comerica.net</small>
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
<small>eg: obi.prod.r53comerica.net</small>
<br><br>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
alb_name<br><input type="text" name="alb"><br>
<small>eg: obialb001awsp</small>
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



<a href="../cmatdpresource.php" class="previous">&laquo; Back</a>


</body>
</html>

</form>
</html>

