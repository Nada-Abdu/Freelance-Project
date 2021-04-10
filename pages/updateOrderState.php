<?php
include('config-DB.php');
if(isset($_POST['orderID'])){
    $orderID=$_POST['orderID'];
    $result="";

    $sql='UPDATE `serviceOrder` SET `state`= "completed" WHERE `Id`='.$orderID;
    
    if(mysqli_query($conn, $sql)){
        $result="Success";
        
    } else {
        $result= "ERROR: Could not able to execute " . mysqli_error($conn);
        
    }
    
    $response['result'] = $result;
    echo json_encode($response);
}

