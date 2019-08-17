
<!DOCTYPE html>
<html>

<head>
<style>


.button {
display: inline-block;
    border-radius: 4px;
    background-color: #A8A8A8;
border: none;
color: white;
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

<h1 ng-style="myObj">Comerica's Automation Terraform Template</h1>

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
<h2>Select a Role:</h2>
<form id="form1">
<body>

<button class="button" onclick="submitForm('/php/devresource.php')" style="vertical-align:middle"><span>cma-dev </span></button>

<br><br><button class="button" onclick="submitForm('/php/nonprodresource.php')" style="vertical-align:middle"><span>cma-nonprod </span></button>

<br><br>
<button class="button" onclick="submitForm('/php/prodresource.php')" style="vertical-align:middle"><span>cma-prod </span></button>

<br><br>
<button class="button" onclick="submitForm('/php/sandboxresource.php')" style="vertical-align:middle"><span>cma-sandbox </span></button>


<br><br>
<button class="button" onclick="submitForm('/php/cmatdpresource.php')" style="vertical-align:middle"><span>cma-tdp </span></button>

<br>
<br><button class="button" onclick="submitForm('/php/dmznonprodresource.php')" style="vertical-align:middle"><span>dmz-nonprod </span></button>

<br><br>
<button class="button" onclick="submitForm('/php/dmzprodresource.php')" style="vertical-align:middle"><span>dmz-prod </span></button>

<br><br>
<button class="button" onclick="submitForm('/php/dmztdpresource.php')" style="vertical-align:middle"><span>dmz-tdp </span></button>
<br></body></form>
</html>



