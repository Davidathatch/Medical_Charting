<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Orders</title>

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
        <div class="form-container new-order">
            <div class="container-header new-order" style="grid-area: form-header">
                <h2>New Order</h2>
            </div>
            <div class="column-header-container new-order" style="grid-area: column-headers">
                <h3 class="column-header" style="grid-column: 1">Parameter</h3>
                <h3 class="column-header" style="grid-column: 2">Value</h3>
            </div>
            <form action="server.php" method="post" style="grid-area: form" class="tpr-form">
                <hr>
                <div class="form-row new-order">
                    <h3 class="row-header">Order Type</h3>
                    <select id="order-type">
                        <option value="default">Choose order type</option>
                        <option value="Prescription">Prescription</option>
                        <option value="Home Meds">Home Meds</option>
                        <option value="Infusion Meds">Infusion Meds</option>
                    </select>
                </div>
                <hr>
                <div class="form-row new-order">
                    <h3 class="row-header">Date:</h3>
                    <input type="datetime-local" id="new-order-date">
                </div>
                <hr>
                <div class="form-row new-order">
                    <h3 class="row-header">Medication:</h3>
                    <div class="horizontal-group">
                        <input type="text" id="medication-name" style="height: 80%" readonly>
                        <button id="medication-search" type="button">Search</button>
                    </div>

                </div>
                <hr>
                <div class="form-row new-order">
                    <h3 class="row-header">Display Name:</h3>
                    <input type="text" id="display-name">
                </div>
                <hr>
                <div class="form-row new-order">
                    <h3 class="row-header">Dosage:</h3>
                    <select name="dosage-amount" id="dosage-amount">
                        <option value="default">Choose Dosage</option>
                    </select>
                </div>
                <hr>
                <div class="form-row new-order">
                    <h3 class="row-header">Include DEA/NPI Number:</h3>
                    <input type="checkbox" id="include-dea-npi">
                </div>
                <hr>
                <div class="form-row new-order">
                    <h3 class="row-header">Child-resistant caps:</h3>
                    <input type="checkbox" id="resistant-caps">
                </div>
                <hr>
                <div class="form-row new-order">
                    <h3 class="row-header">Route:</h3>
                    <select type="text" id="medication-route">
                        <option value="default">Choose Route</option>
                        <?php
                        $routeValues = ['Arterial', 'Both Ears (AU)', 'Both Eyes', 'Both Eyes (OU)', 'Buccal', 'By Mouth (PO)', 'Epidural', 'G Tube', 'Inhalation', 'Inhalation (INH)', 'Intraarticular', 'Intracardiac', 'Intradermal', 'Intramuscular (IM)', 'Intranasal', 'Intraosseous', 'Intraperitoneal', 'Intrasynovial', 'Intrathecal', 'Intrauterine', 'Intravenous (IV)', 'Irrigation', 'IV Piggyback (IVPB)', 'IV Push (IVP)', 'J Tube', 'Left Ear (AS)', 'Left Eye (OS)', 'Misc', 'Nasal', 'Nasogastric', 'Nebulised', 'NG Tube', 'Oral', 'PCA', 'Percutaneous', 'Percutaneous enteral gastrostomy (PEG)', 'Peripherally inserted central catheter (PICC)', 'Peritoneal', 'Rectal', 'Right Ear (AD)', 'Right Eye (OD)', 'Spinal', 'Subcutaneous (SQ)', 'Sublingual (SL)', 'Topical', 'Trach', 'Transdermal', 'Urethral', 'Vaginal'];
                        for ($i = 0; $i < sizeof($routeValues); $i++) {
                            ?>
                            <option value="<?php echo $routeValues[$i] ?>"><?php echo $routeValues[$i] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <hr>
                <div class="form-row new-order">
                    <h3 class="row-header">Frequency:</h3>
                    <select type="text" id="medication-frequecy">
                        <option value="default">Choose Frequency</option>
                        <?php
                        $frequencyValues = ['1800',
                            '3 times a week',
                            'ACQHS',
                            'After food',
                            'AS DIRECTED',
                            'AS DIRECTED PRN',
                            'Before food',
                            'BID',
                            'BID (0900 - 1800)',
                            'BID (1000 - 2200)',
                            'BIDAC',
                            'BIDCC',
                            'CCQHS',
                            'CONTINUOUS',
                            'DAILY',
                            'DAILY (0800)',
                            'DAILY (1000)',
                            'DAILY (NOON)',
                            'Every 12 hours',
                            'Every 12 hours, when required',
                            'Every 2 days',
                            'Every 2 hours',
                            'Every 2 hours, when required',
                            'Every 2 weeks',
                            'Every 4 hours',
                            'Every 4 hours, when required',
                            'Every 6 hours',
                            'Every 6 hours, when required',
                            'Every 8 hours',
                            'Every 8 hours, when required',
                            'Every hour',
                            'Every hour, when required',
                            'EVERY OTHER DAY',
                            'For 1 day',
                            'For 3 days',
                            'Four times a day',
                            'Immediately',
                            'MO-WE-FR',
                            'NOW',
                            'ONCE',
                            'Once a day',
                            'Once a day at midday',
                            'Once a day at night',
                            'Once a day in the morning',
                            'PRN Q12H',
                            'PRN Q24H',
                            'PRN Q2H',
                            'PRN Q4H',
                            'PRN Q6H',
                            'PRN Q8H',
                            'PRN QHS',
                            'Q10MIN',
                            'Q12H',
                            'Q12H (0800 - 2000)',
                            'Q15MIN',
                            'Q18H',
                            'Q1H',
                            'Q24H',
                            'Q2H',
                            'Q30MIN',
                            'Q36H',
                            'Q3H',
                            'Q48H',
                            'Q4H',
                            'Q4H (0000 - 0400 - 0800 - 1200 - 1600 - 2000)',
                            'Q5MIN',
                            'Q6H',
                            'Q6H (0000 - 0600 - 1200 - 1800)',
                            'Q8H',
                            'Q8H (0000 - 0800 - 1600)',
                            'QAC',
                            'QAC (0700 - 1100 - 1700)',
                            'QAC, HS',
                            'QAM',
                            'QAMAC',
                            'QAMCC',
                            'QHS',
                            'QHS (2100)',
                            'QID',
                            'QID (0800 - 1200 - 1600 - 2000)',
                            'QPC',
                            'QPC (0900 - 1300 - 1900)',
                            'QPM',
                            'STAT',
                            'Three times a day',
                            'TID',
                            'TID (0800 - 1400 - 2000)',
                            'TID AC',
                            'TID AC (0730 - 1130 - 1630)',
                            'TID PC',
                            'TID PRN',
                            'TIDAC',
                            'TIDCC',
                            'TIDWM',
                            'TODAY',
                            'TOMORROW',
                            'Twice a day',
                            'TWICE A WEEK',
                            'WEEKLY',
                            'When required',
                            'With food'];
                        for ($i = 0; $i < sizeof($frequencyValues); $i++) {
                            ?>
                            <option value="<?php echo $frequencyValues[$i] ?>"><?php echo $frequencyValues[$i] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <hr>
                <div class="form-row new-order">
                    <h3 class="row-header">Directions:</h3>
                    <textarea id="medication-directions" cols="20" rows="2"></textarea>
                </div>
                <hr>
                <div class="form-row new-order">
                    <h3 class="row-header">Dispense Quantity:</h3>
                    <input type="text" id="dispense-quantity">
                </div>
                <hr>
                <div class="form-row new-order">
                    <h3 class="row-header">Status:</h3>
                    <select type="text" id="medication-status">
                        <option value="default">Choose Status</option>
                        <?php
                        $statusValues = ['Expired',
                            'Discontinued',
                            'Complete',
                            'Changed',
                            'Rejected',
                            'Inactive',
                            'Active',
                            'Pending',
                            'Unsigned',
                            'On Hold',
                            'Flagged',
                            'Non-Verified',
                            'Not Filled'];
                        for ($i = 0; $i < sizeof($statusValues); $i++) {
                            ?>
                            <option value="<?php echo $statusValues[$i] ?>"><?php echo $statusValues[$i] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <hr>
                <div class="form-row new-order">
                    <h3 class="row-header">Start Date/Time:</h3>
                    <input type="datetime-local" id="start-date">
                </div>
                <hr>
                <div class="form-row new-order">
                    <h3 class="row-header">End Date/Time:</h3>
                    <input type="datetime-local" id="end-date">
                </div>
                <hr>
                <div class="form-row new-order">
                    <h3 class="row-header">NDC#:</h3>
                    <input type="text" id="ndc">
                </div>
                <hr>
                <div class="form-row new-order">
                    <h3 class="row-header">Rx Origin:</h3>
                    <input type="text" id="rx-origin">
                </div>
                <hr>
                <div class="form-row new-order">
                    <h3 class="row-header">Days Supply:</h3>
                    <input type="text" id="days-supply">
                </div>
                <hr>
                <div class="form-row new-order">
                    <h3 class="row-header">Refills:</h3>
                    <input type="checkbox" id="refills-value">
                </div>
                <hr>
                <div class="form-row new-order new-order-smaller">
                    <h3 class="row-header">Substitution Allowed:</h3>

                    <div class="horizontal-group">
                        <div class="radio-group">
                            <label for="substitution-allowed-yes">Yes</label>
                            <input type="radio" name="substitution-allowed" id="substitution-allowed-yes" value="Yes">
                        </div>
                        <div class="radio-group">
                            <label for="substitution-allowed-no">No</label>
                            <input type="radio" name="substitution-allowed" id="substitution-allowed-no" value="No">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-row new-order">
                    <h3 class="row-header">DAW Code:</h3>
                    <select type="text" id="daw-value">
                        <option value="default">Choose DAW Code</option>
                        <?php
                        $dawValues = ['DAW 0: No product selection indicated',
                            'DAW 1: Substitution not allowed by prescriber',
                            'DAW 2: Substitution allowed - patient requested product dispensed',
                            'DAW 3: Substitution allowed - pharmacy requested product dispensed',
                            'DAW 4: Substitution allowed - generic drug not in stock',
                            'DAW 5: Substitution allowed - brand drug dispensed as generic',
                            'DAW 6: Undefined (not in general use; reserved for future use)',
                            'DAW 7: Substitution not allowed - brand drug mandated by law/regulation',
                            'DAW 8: Substitution not allowed - generic drug not available in marketplace',
                            'DAW 9: Undefined (not in general use, reserved for future use)'];
                        for ($i = 0; $i < sizeof($dawValues); $i++) {
                            ?>
                            <option value="<?php echo $dawValues[$i] ?>"><?php echo $dawValues[$i] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <hr>
            </form>
        </div>
        <div class="form-container order-comments">
            <div class="container-header order-comments" style="grid-area: form-header">
                <h2>Additional Comments</h2>
            </div>
            <div class="column-header-container order-comments" style="grid-area: column-headers">
                <h3 class="column-header" style="grid-column: 1">Date</h3>
                <h3 class="column-header" style="grid-column: 2">Author</h3>
                <h3 class="column-header" style="grid-column: 3">Comment</h3>
            </div>
            <form action="server.php" method="post" style="grid-area: form" class="order-comments-form">
                <hr>
                <div class="form-row order-comments">
                    <input type="datetime-local" id="order-comment-date">
                    <div class="horizontal-group">
                        <input type="text" id="order-comment-author" style="height: 80%" readonly>
                        <button id="author-search" type="button">Search</button>
                    </div>
                    <div class="horizontal-group">
                        <textarea name="medication-comments" id="order-comment-text" cols="32" rows="2" style="flex: 3"></textarea>
                        <button class="glance-button" id="comment-submit" type="button" style="flex: 1">Submit</button>
                    </div>
                </div>
                <hr>
                <div class="form-row order-comments">
                    <h3>4/25/2022</h3>
                    <h3>David Thatcher</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam blanditiis eos, hic ipsam ipsum
                        neque nihil, non odit placeat qui quisquam quos sit voluptate! Nulla numquam perferendis placeat
                        quasi repellendus sequi ullam velit voluptatem voluptatum.</p>
                </div>
            </form>
        </div>
    </div>
</main>

<div class="searchContainer" id="medSearch" style="display: none;">
    <img src="../assets/close.svg" alt="close icon" id="med-search-close">
    <input type="text" id="medSearchInput" placeholder="Search query..." onkeyup="medSearch(this.value)"
           style="margin: 10px auto">
    <div id="center-div">
        <h1 id="no-result-label">No Results</h1>
    </div>

    <div class="queryResultContainer">
    </div>
</div>

<button id="orders-submit">Submit</button>

<script src="../local/orderDataGather.js"></script>

<script src="../local/ordersJs.js"></script>
</body>
</html>