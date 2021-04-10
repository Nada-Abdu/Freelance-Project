<?php
include('config-DB.php');
if (isset($_POST['blogID'])) {
    $blogID = $_POST['blogID'];
    $result = "";

    $sql = 'DELETE FROM blog WHERE `Id`=' . $blogID;
    if (mysqli_query($conn, $sql)) {
        $data = $blogID . ".txt";
        $dir = "../blogs";
        $dirHandle = opendir($dir);
        while ($file = readdir($dirHandle)) {
            if ($file == $data) {
                unlink($dir . '/' . $file);
                $result = "Success";
            }
        }
        closedir($dirHandle);
        $result = "Success";
    }
    $response['result'] = $result;
    echo json_encode($response);
}
