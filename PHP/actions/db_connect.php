<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "cr10_beniaminHutyra_biglibrary";

$conn = mysqli_connect($hostName,$userName,$password,$dbName);


if(!$conn){
    echo "error";

}

?>