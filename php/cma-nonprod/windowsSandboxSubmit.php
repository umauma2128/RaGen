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
<br><small>eg: cma-nonprod/obi/obi-infra/app/terraform.tfstate</small>
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
<option value="&quot;INF-QA-CMA&quot;">INF-QA-CMA</option>
<option value="&quot;INF-NonProd&quot;">INF-NonProd</option>
</select>
<br><br>

ec2_instance_names<br><input type="text" name="ins_name"><br>
<small>eg: ["obiwsw001awsq", "obiwsw002awsq"]</small>
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
<small>eg: "AWS-Windows-qa.pem"</small>
<br><br>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
alb_name<br><input type="text" name="alb"><br>
<small>eg: obialb001awsq</small>
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



<a href="../nonprodresource.php" class="previous">&laquo; Back</a>


</body>
</html>

</form>
</html>

