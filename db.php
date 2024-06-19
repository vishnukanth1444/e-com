<?php
date_default_timezone_set("Asia/Calcutta");
$prod = true;
if($prod){
    $sname = "localhost";
    $uname = "vishnu";
    $password = "Jvishnu123@";
    $db_name = "e-com";
}
else{
    $sname = "localhost";
    $uname = "root";
    $password = "";
    $db_name = "e-com";
}


$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection Failed!";
	exit();
}
$currency = "$";
$bz = "VISA9";
$entrysems = [
    "spring" => "Spring",
    "spring2" => "Spring II",
    "summer" => "Summer",
    "summer2" => "Summer II",
    "fall" => "Fall",
    "fall2" => "Fall II",
    "winter" => "Winter"
];

$appStatusList = [
    "pending",
    "approved",
    "rejected"
];

$logoutLimit = 10;
$time = date('H:i');
$date = date('Y-m-d');
$datetime = date('Y-m-d');
$month = date('Y-m');

