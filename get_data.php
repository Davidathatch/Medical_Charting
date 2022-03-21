<?php

    $serverName = 'localhost';
    $username = 'phpAccess';
    $password = '1234';

    $conn = new mysqli($serverName, $username, $password, 'patient data');

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM `pulse_vitals` WHERE patient_id=2";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"] . " patient_id: " . $row["patient_id"] . " value: " . $row["value"] . " method: " . $row["method"] . " ";
        }
    }else {
        echo "no entries";
    }

?>
