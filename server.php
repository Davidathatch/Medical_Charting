<?php
    if (isset($_POST['vitalsData'])) {
        $vitalsDecoded = json_decode($_POST['vitalsData'],true);
        print_r($vitalsDecoded);
    }

if (isset($_POST["medQuery"])) {

    //DATABASE CREDENTIALS
    $servername = 'localhost';
    $userName = 'phpAccess';
    $password = '1234';
    $dbName = 'medications';

    //DATABASE CONNECTION
    $conn = new mysqli($servername, $userName, $password, $dbName);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    //SEARCH FOR MEDS
    $brandNameSql = "SELECT * FROM medications WHERE brandName LIKE \"%{$_POST["medQuery"]}%\";";
    $brandNameResults = $conn->query($brandNameSql);

    $genericNameSql = "SELECT * FROM medications WHERE genericName LIKE \"%{$_POST["medQuery"]}%\";";
    $genericNameResults = $conn->query($genericNameSql);

    $queryResults = array();
    $resultIds = [];

    while($row = $brandNameResults->fetch_assoc()) {
        $workingTask = array(
            "id" => $row["id"],
            "brandName" => $row["brandName"],
            "genericName" => $row["genericName"],
            "brandPronounce" => $row["brandPronounce"],
            "genericPronounce" => $row["genericPronounce"],
            "dosageForm" => $row["dosageForm"],
            "dosage" => $row["dosage"],
            "drugClass" => $row["drugClass"],
        );
        $queryResults[] = $workingTask;
        $resultIds[] = $row["id"];
    }

    while($row = $genericNameResults->fetch_assoc()) {
        $workingTask = array(
            "id" => $row["id"],
            "brandName" => $row["brandName"],
            "genericName" => $row["genericName"],
            "brandPronounce" => $row["brandPronounce"],
            "genericPronounce" => $row["genericPronounce"],
            "dosageForm" => $row["dosageForm"],
            "dosage" => $row["dosage"],
            "drugClass" => $row["drugClass"],
        );
        if (array_search($row["id"], $resultIds) == '') {
            $queryResults[] = $workingTask;
        }
    }

    if (sizeof($queryResults) > 0) {
        echo json_encode($queryResults);
    }else {
        echo 'empty';
    }
    }

if (isset($_POST["authorQuery"])) {
    //DATABASE CREDENTIALS
    $servername = 'localhost';
    $userName = 'phpAccess';
    $password = '1234';
    $dbName = 'medical_assisting';

    //DATABASE CONNECTION
    $conn = new mysqli($servername, $userName, $password, $dbName);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $authorFirstSql = "SELECT * FROM `users` WHERE `firstName` LIKE \"%{$_POST["authorQuery"]}%\"";
    $firstNameResults = $conn->query($authorFirstSql);

    $authorSecondSql = "SELECT * FROM `users` WHERE `lastName` LIKE \"%{$_POST["authorQuery"]}%\"";
    $lastNameResults = $conn->query($authorSecondSql);

    $queryResults = array();
    $resultIds = [];

    while($row = $firstNameResults->fetch_assoc()) {
        $workingTask = array(
            "id" => $row["id"],
            "firstName" => $row["firstName"],
            "lastName" => $row["lastName"],
        );
        $queryResults[] = $workingTask;
        $resultIds[] = $row["id"];
    }

    while($row = $lastNameResults->fetch_assoc()) {
        $workingTask = array(
            "id" => $row["id"],
            "firstName" => $row["firstName"],
            "lastName" => $row["lastName"],
        );
        if (array_search($row["id"], $resultIds) == '') {
            $queryResults[] = $workingTask;
        }
    }

    if (sizeof($queryResults) > 0) {
        echo json_encode($queryResults);
    }else {
        echo 'empty';
    }
}

if (isset($_POST["orderComment"])) {
    $decodedArr = json_decode($_POST["orderComment"], true);
    print_r($decodedArr);
}
?>
