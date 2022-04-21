<?php
    if (isset($_POST['vitalsData'])) {
        $vitalsDecoded = json_decode($_POST['vitalsData'],true);
        print_r($vitalsDecoded);
    }
?>
