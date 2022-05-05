<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <?php
    include "../local/sidebarReq.html"
    ?>

    <link rel="stylesheet" href="../local/formStyles.css">
    <link rel="stylesheet" href="../local/styles.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>
<body>

<?php
$profilePath = "../assets/empty-profile.png";
$headerLogoPath = "../assets/catalyst-logo.png";
include "../local/patientGlanceHeader.php";
?>

<main>
    <?php
    include "../sidebar.html"
    ?>
    <div class="form-overflow-container">
        <div class="form-container patient-draft">
            <div class="container-header patient-draft" style="grid-area: form-header">
                <h2>Patient Information</h2>
            </div>
            <form action="server.php" method="post" style="grid-area: form" class="patient-draft-form">
                <hr>
                <div class="form-row patient-draft-img">
                    <img src="../assets/empty-profile.png" alt="patient profile">
                    <div class="row-span-container">
                        <div class="form-row patient-span">
                            <div class="input-group">
                                <label for="first-name">First Name</label>
                                <input type="text" id="first-name">
                            </div>
                            <div class="input-group">
                                <label for="alias-name">Alias or Non-Legal Name</label>
                                <input type="text" id="alias-name">
                            </div>
                            <div class="input-group">
                                <label for="dob">Date of Birth</label>
                                <input type="text" id="dob">
                            </div>
                            <div class="input-group">
                                <label for="suffix">Suffix</label>
                                <input type="text" id="suffix">
                            </div>
                        </div>
                        <div class="form-row patient-span">
                            <div class="input-group">
                                <label for="last-name">Last Name</label>
                                <input type="text" id="last-name">
                            </div>
                            <div class="input-group">
                                <label for="sex">Sex</label>
                                <input type="text" id="sex">
                            </div>
                            <div class="input-group">
                                <label for="mrn">Medical Record Number</label>
                                <input type="text" id="mrn">
                            </div>
                            <div class="input-group">
                                <label for="marital-status">Marital Status</label>
                                <input type="text" id="marital-status">
                            </div>
                        </div>
                        <div class="form-row patient-span">
                            <div class="input-group">
                                <label for="middle-name">Middle Name/ Initial</label>
                                <input type="text" id="middle-name">
                            </div>
                            <div class="input-group">
                                <label for="gender-identity">Current Gender Identity</label>
                                <input type="text" id="gender-identity">
                            </div>
                            <div class="input-group">
                                <label for="ssn">SSN</label>
                                <input type="text" id="ssn">
                            </div>
                            <div class="input-group">
                                <label for="language">Language</label>
                                <input type="text" id="language">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-row patient-draft">
                    <div class="input-group">
                        <label for="race-ethnicity">Race/ Ethnicity</label>
                        <input type="text" id="race-ethnicity">
                    </div>
                    <div class="row-placeholder"></div>
                    <div class="row-placeholder"></div>
                    <div class="row-placeholder"></div>
                    <div class="row-placeholder"></div>
                </div>

                <div class="form-row patient-draft" style="grid-template-columns: 2fr 1fr 1fr 1fr">
                    <div class="input-group">
                        <label for="street-address">Street Address</label>
                        <input type="text" id="street-address">
                    </div>
                    <div class="input-group">
                        <label for="apartment-num">Apartment #</label>
                        <input type="text" id="apartment-num">
                    </div>
                    <div class="input-group">
                        <label for="city">City</label>
                        <input type="text" id="city">
                    </div>
                    <div class="input-group">
                        <label for="state-province">State/ Province</label>
                        <input type="text" id="state-province">
                    </div>
                </div>

                <div class="form-row patient-draft">
                    <div class="input-group">
                        <label for="zip-code">ZIP/ Postal Code</label>
                        <input type="text" id="zip-code">
                    </div>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="text" id="email">
                    </div>
                    <div class="input-group">
                        <label for="home-phone">Home Phone</label>
                        <input type="text" id="home-phone">
                    </div>
                    <div class="input-group">
                        <label for="cell-phone">Cell Phone</label>
                        <input type="text" id="cell-phone">
                    </div>
                    <div class="input-group">
                        <label for="employment-status">Employment Status</label>
                        <input type="text" id="employment-status">
                    </div>
                </div>

                <div class="form-row patient-draft">
                    <div class="input-group">
                        <label for="employer">Employer</label>
                        <input type="text" id="employer">
                    </div>
                    <div class="input-group">
                        <label for="work-phone">Work Phone</label>
                        <input type="text" id="work-phone">
                    </div>
                    <div class="input-group">
                        <label for=occupation">Occupation</label>
                        <input type="text" id=occupation">
                    </div>
                    <div class="row-placeholder"></div>
                    <div class="row-placeholder"></div>
                </div>
        </div>
        </form>
    </div>
    </div>
</main>
<button id="patient-draft-submit">Submit</button>
</body>
</html>
