<?php

    $userName = "davidathatch";
    $pass = "1234";

    if (isset($_POST["loginData"])) {
        $returnData = array(
            'messageType' => 'login attempt'
        );
        $decodedLogin = json_decode($_POST["loginData"], true);
        if ($decodedLogin["username"] == $userName && $decodedLogin["password"] == $pass) {
            $returnData["code"] = 1;
        }else {
            $returnData["code"] = 2;
        }
        echo json_encode($returnData);
    }

?>
