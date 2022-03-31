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
            border: solid 3px #C4C4C4;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.25);
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
            grid-template-columns: 1.5fr 1fr 1fr 6fr 2fr;
        }
        .column-header-container h3 {
            font-weight: bolder;
        }
        .form-row.tpr {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr 2fr 2fr 2fr 2fr;
        }
        .column-header-container {
            margin-left: 10px;
        }
        .column-header-container * {
            font-weight: normal;
        }
        .container-header h2 {
            margin: 10px 0 10px 25px;
        }
        input, select {
            margin: 5px 10px 5px 0;
            border: #C4C4C4 solid 2px;
            border-radius: 5px;
            color: #7e7e7e;
            overflow: hidden;
        }
        .form-container form {
            margin: 0 10px 0 10px;
        }
        .row-header {
            font-weight: lighter;
            font-style: italic;
        }
        .form-container hr {
            border: none;
            border-top: dashed #c4c4c4;
            border-width: 3px;
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
            <hr>
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
            <hr>
            <div class="form-row tpr">
                <h3 class="row-header tpr">Respiration:</h3>
                <input type="text" id="tpr-respiration-value">
                <div class="row-placeholder"></div>
                <select name="tpr-respiration-method" id="tpr-respiration-method">
                    <option value="default">Method</option>
                    <option value="Assisted Ventilation">Assisted Ventilation</option>
                    <option value="Controlled">Controlled</option>
                    <option value="Ventilation">Ventilation</option>
                    <option value="Spontaneous">Spontaneous</option>
                </select>
                <div class="row-placeholder"></div>
                <div class="row-placeholder"></div>
                <input type="text" id="tpr-respiration-description">
            </div>
            <hr>
            <div class="form-row tpr">
                <h3 class="row-header tpr">Blood Pressure:</h3>
                <input type="text" id="tpr-bp-value">
                <div class="row-placeholder"></div>
                <select name="tpr-bp-location" id="tpr-bp-location">
                    <option value="default">Location</option>
                    <option value="L Arm">L Arm</option>
                    <option value="L Leg">L Leg</option>
                    <option value="Other">Other</option>
                    <option value="R Arm">R Arm</option>
                    <option value="R Leg">R Leg</option>
                </select>
                <select name="tpr-bp-method" id="tpr-bp-method">
                    <option value="default">Method</option>
                    <option value="Actual">Actual</option>
                    <option value="Cuff">Cuff</option>
                    <option value="Doppler">Doppler</option>
                    <option value="Non-Invasive">Non-Invasive</option>
                    <option value="Palpated">Palpated</option>

                </select>
                <select name="tpr-bp-position" id="tpr-bp-position">
                    <option value="default">Position</option>
                    <option value="Lying">Lying</option>
                    <option value="Sitting">Sitting</option>
                    <option value="Standing">Standing</option>

                </select>
                <input type="text" id="tpr-bp-description">
            </div>
            <hr>
            <div class="form-row tpr">
                <h3 class="row-header tpr">Pulse Oximetry</h3>
                <input type="text" id="tpr-po-value" placeholder="%">
                <div class="row-placeholder"></div>
                <input type="text" id="tpr-po-flow-rate" placeholder="Flow Rate (l/min)">
                <input type="text" id="tpr-po-o2-percent" placeholder="02%">
                <select name="tpr-po-method" id="tpr-po-method">
                    <option value="default">Method</option>
                    <option value="Aerosol/Humidified Mask">Aerosol/Humidified Mask</option>
                    <option value="Face Tent">Face Tent</option>
                    <option value="Mask">Mask</option>
                    <option value="Nasal Cannula">Nasal Cannula</option>
                    <option value="Non Re-Breather">Non Re-Breather</option>
                    <option value="Partial Re-Breather">Partial Re-Breather</option>
                    <option value="T-Piece">T-Piece</option>
                    <option value="Tracheostomy Collar">Tracheostomy Collar</option>
                    <option value="Ventilator">Ventilator</option>
                    <option value="Ventury Mask">Ventury Mask</option>
                </select>
                <input type="text" id="tpr-po-description">
            </div>
        </form>
    </div>

</body>
</html>