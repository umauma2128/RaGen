<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body ng-app="myApp" ng-controller="myCtrl">

<h1 ng-style="myObj">Windows EC2</h1>

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


<form action="w_program_sandbox.php" method="post">
//Resource Folder name
//<br><input type="text" name="fn"><br>
//<small>eg: create-obi-app</small>
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
<br><small>eg: cma-sandbox/obi/obi-infra/app/terraform.tfstate</small>
<br><br>

module name<br><input type="text" name="mod"><br>
<small>eg: obi-app</small>
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

infra_sg<br>
<select name="infra">
<option value="&quot;INF-Sandbox&quot;">INF-Sandbox</option>
</select>
<br><br>

ec2_instance_names<br><input type="text" name="ins_name"><br>
<small>eg: ["obiwsw001awsd", "obiwsw002awsd"]</small>
<br><br>

ec2_instance_count<br>
<select name="count">
<option value="&quot;1&quot;">1</option>
<option value="&quot;2&quot;">2</option>
<option value="&quot;3&quot;">3</option>
<option value="&quot;4&quot;">4</option>
<option value="&quot;5&quot;">5</option>
<option value="&quot;6&quot;">6</option>
<option value="&quot;7&quot;">7</option>
<option value="&quot;8&quot;">8</option>
<option value="&quot;9&quot;">9</option>
<option value="&quot;10&quot;">10</option>
</select>
<br><br>

instane_type<br><input type="text" name="ins_typ"><br>
<small>eg: "t2.medium" or ["t2.medium", "m4.large"]</small>
<br><br>

vpc_id<br>
<select name="vpc">
<option value="&quot;vpc-37bc915e&quot;">vpc-37bc915e</option>
</select>
<br><br>

subnet_ids<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-3f96ab56&quot;">subnet-3f96ab56<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-baff83c1&quot;">subnet-baff83c1<br>
<input type="checkbox" name="checks[]" value="&quot;subnet-93da5fde&quot;">subnet-93da5fde<br>
<small>Note: order is az A,B,C</small>
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

private_ips<br><input type="text" name="priv_ip"><br>
<small>eg: ["10.200.22.33", "10.200.22.44"]</small>
<br><br>

ebs_mw_volume_size<br><input type="text" name="ebs_size"><br>
<small>eg: "100" or ["100", "200"]</small>
<br><br>

key_name<br><input type="text" name="pem"><br>
<small>eg: "AWS-Windows-SandBox.pem"</small>
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



<a href="../sandboxresource.php" class="previous">&laquo; Back</a>


</body>
</html>

</form>
</html>

