<?php
    $profilePath = "../assets/empty-profile.png";
include "../patientGlanceHeader.php"
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="../local/styles.css">

    <style>
        .form-container.tpr {
            display: grid;
            grid-template-areas:
                "form-header"
                "column-headers"
                "form";
        }
        .form-container {
            width: 95%;
            margin: 15px auto 0 auto;
            background: #EEEEEE;
            border-radius: 10px;
            padding: 0 0 10px 0;
        }
        .container-header {
            background: #C4C4C4;
            width: 100%;
            text-align: left;
            border-radius: 10px 10px 0 0;
            margin-top: 0;
        }
        .column-header-container.tpr {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 6fr 2fr;
        }
        .form-row.tpr {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 2fr 2fr 2fr 2fr;
        }
        .column-header-container {
            margin-left: 25px;
        }
        .column-header-container * {
            font-weight: normal;
        }
        .container-header h2 {
            margin: 10px 0 10px 25px;
        }
        input, select {
            margin: 5px 10px 5px 0;
            border: #C4C4C4 solid 3px;
            border-radius: 5px;
            color: #7e7e7e;
            overflow: hidden;
        }
        .form-container form {
            margin: 0 0 0 25px;
        }
        .row-header {
            font-weight: lighter;
            font-style: italic;
        }
    </style>

</head>
<body>


    <div class="form-container tpr">
        <div class="container-header tpr"  style="grid-area: form-header">
            <h2>TPR B/P O2</h2>
        </div>
        <div class="column-header-container tpr" style="grid-area: column-headers">
            <h3 class="column-header" style="grid-column: 1">Vitals</h3>
            <h3 class="column-header" style="grid-column: 2">Value</h3>
            <h3 class="column-header" style="grid-column: 3">Unit</h3>
            <h3 class="column-header" style="grid-column: 4">Qualifier(s)</h3>
            <h3 class="column-header" style="grid-column: 5">Description</h3>
        </div>
        <form action="server.php" method="post" style="grid-area: form">
            <div class="form-row tpr">
                <h3 class="row-header tpr">Temperature:</h3>
                <input type="text" id="tpr-temperature-value">
                <select name="tpr-temperature-unit" id="tpr-temperature-unit">
                    <option value="C">C</option>
                    <option value="F">F</option>
                </select>
                <select name="tpr-temperature-qualifier" id="tpr-temperature-qualifier">
                    <option value="default">Location</option>
                    <option value="None">None</option>
                    <option value="Axillary">Axillary</option>
                    <option value="Core">Core</option>
                    <option value="Oral">Oral</option>
                    <option value="Rectal">Rectal</option>
                    <option value="Skin">Skin</option>
                    <option value="Temporal">Temporal</option>
                    <option value="Tympanic">Tympanic</option>
                </select>
                <div class="row-placeholder"></div>
                <div class="row-placeholder"></div>
                <input type="text" id="tpr-temperature-description">
            </div>
            <div class="form-row tpr">
                <h3 class="row-header tpr">Pulse:</h3>
                <input type="text" id="tpr-pulse-value">
                <div class="row-placeholder"></div>
                <select name="tpr-pulse-location" id="tpr-pulse-location">
                    <option value="default">Location</option>
                    <option value="Apical">Apical</option>
                    <option value="Bilateral Peripheral">Bilateral Peripheral</option>
                    <option value="Brachial">Brachial</option>
                    <option value="Cartoid">Cartoid</option>
                    <option value="Dorsalis Pedial">Dorsalis Pedial</option>
                    <option value="Femoral">Femoral</option>
                    <option value="Other">Other</option>
                    <option value="Peripheral">Peripheral</option>
                    <option value="Popliteal">Popliteal</option>
                    <option value="Posterior Tibial">Posterior Tibial</option>
                    <option value="Radial">Radial</option>
                    <option value="Ulnar">Ulnar</option>
                </select>
                <select name="tpr-pulse-method" id="tpr-pulse-method">
                    <option value="default">Method</option>
                    <option value="Auscultate">Auscultate</option>
                    <option value="Doppler">Doppler</option>
                    <option value="Palpated">Palpated</option>

                </select>
                <select name="tpr-pulse-position" id="tpr-pulse-position">
                    <option value="default">Position</option>
                    <option value="Lying">Lying</option>
                    <option value="Sitting">Sitting</option>
                    <option value="Standing">Standing</option>

                </select>
                <input type="text" id="tpr-pulse-description">
            </div>
        </form>
    </div>

</body>
</html>