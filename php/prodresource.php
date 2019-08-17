
<!DOCTYPE html>
<html>

<head>
<style>
.button {
display: inline-block;
    border-radius: 4px;
    background-color: #A8A8A8;
border: none;
color: #FFFFFF;
    text-align: center;
    font-size: 28px;
padding: 15px;
width: 250px;
transition: all 0.5s;
cursor: pointer;
margin: 5px;
}

.button span {
cursor: pointer;
display: inline-block;
position: relative;
transition: 0.5s;
}

.button span:after {
content: '\00bb';
position: absolute;
opacity: 0;
top: 0;
right: -20px;
transition: 0.5s;
}

.button:hover span {
    padding-right: 25px;
}

.button:hover span:after {
opacity: 1;
right: 0;
}
</style>
</head>


<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body ng-app="myApp" ng-controller="myCtrl">

<h1 ng-style="myObj">Select the AWS Resource : cma-prod</h1>

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
<script type="text/javascript">
function submitForm(action) {
    var form = document.getElementById('form1');
    form.action = action;
    form.submit();
}
</script>

<form id="form1">
<body>

<button class="button" onclick="submitForm('./cma-prod/windowsSandboxSubmit.php')" style="vertical-align:middle"><span>windows Setup </span></button>
<br>
<button class="button" onclick="submitForm('cma-prod/linuxSandboxSubmit.php')" style="vertical-align:middle"><span>Linux Setup </span></button><br>
<br>
<button class="button" onclick="submitForm('cma-prod/albSubmit.php')" style="vertical-align:middle"><span>ALB Setup </span></button><br>
<br>
<button class="button" onclick="submitForm('cma-prod/oracleSubmit.php')" style="vertical-align:middle"><span>RDS Oracle Setup </span></button><br>
<br>
<button class="button" onclick="submitForm('cma-prod/sqlSubmit.php')" style="vertical-align:middle"><span>RDS SQL Setup </span></button><br>
<br>
</body>

</form>



<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
a {
    text-decoration: none
display: inline-block;
padding: 8px 10px;
}

a:hover {
    background-color: #ddd;
color: black;
}

.previous {
    background-color: #ddd;
color: black;
}



}
</style>
</head>
<body>
<br><br>


<a href="../Index.php" class="previous">&laquo; Back</a>


</body>
</html>



