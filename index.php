<?php
$route=["/"=>"loginform.php",
"/login"=>"loginform.php",
"/signup"=>"signuphtml.php",
"/dashboard"=>"dashboard.php"];

if(array_key_exists($_SERVER["REQUEST_URI"],$route)){
require $route[$_SERVER["REQUEST_URI"]];
}
else{
require "404.php";
}
?>