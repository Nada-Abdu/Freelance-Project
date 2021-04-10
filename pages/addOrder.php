
<?php
include "config-DB.php";

ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);


$id = $_POST["id"];
$userId = $_COOKIE['userID'];


$date=date("Y-m-d");
$msg;
$serviceorder= mysqli_query($conn,"INSERT INTO `serviceorder` (`Id`, `serviceId`, `userId`, `orderDate`, `state`) 
VALUES (0, '$id', '$userId','$date','Uncomplete')");
if($serviceorder){
    $msg='Success adding the order';
   }
   else {
    $msg='Failed adding the order';
   }

   $response['result']=$msg;
   echo json_encode($response);


?>



