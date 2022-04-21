let vitalsSubmit = document.getElementById("vital-submit");

vitalsSubmit.addEventListener("click", getData);

function getData() {
    let postValues = {
        "tpr": null,
        "pain": null,
        "cries-scale": null,
        "npa": null,
        "pain-scale": null,
        "rass": null,
        "growth": null,
        "io": null,
        "po-intake": null,
        "cbgr": null,
        "survey": null,
    };

    //GET TPR DATA
    let tprValues = {};

    //TEMPERATURE VALUES
    tprValues["temperature-value"] = quickId("tpr-temperature-value");
    tprValues["temperature-unit"] = quickId("tpr-temperature-unit");
    tprValues["temperature-location"] = quickId("tpr-temperature-location");
    tprValues["temperature-description"] = quickId("tpr-temperature-description");

    //PULSE VALUES
    tprValues["pulse-value"] = quickId("pulse-value");
    tprValues["pulse-location"] = quickId("pulse-location");
    tprValues["pulse-method"] = quickId("pulse-method");
    tprValues["pulse-position"] = quickId("pulse-position");
    tprValues["pulse-description"] = quickId("pulse-description");

    //RESPIRATION VALUES
    tprValues["respiration-value"] = quickId("respiration-value");
    tprValues["respiration-method"] = quickId("respiration-method");
    tprValues["respiration-description"] = quickId("respiration-description");

    //BLOOD PRESSURE VALUES
    tprValues["tpr-bp-value"] = quickId("tpr-bp-value");
    tprValues["tpr-bp-method"] = quickId("tpr-bp-method");
    tprValues["tpr-bp-position"] = quickId("tpr-bp-position");
    tprValues["tpr-bp-description"] = quickId("tpr-bp-description");

    //PULSE OXIMETRY VALUES
    tprValues["tpr-po-value"] = quickId("tpr-po-value");
    tprValues["tpr-po-flow-rate"] = quickId("tpr-po-flow-rate");
    tprValues["tpr-po-method"] = quickId("tpr-po-o2-percent");
    tprValues["tpr-po-value"] = quickId("tpr-po-method");
    tprValues["tpr-po-value"] = quickId("tpr-po-description");

    //ADD DATA TO "postValues"
    postValues["tpr"] = tprValues;



    //GET PAIN DATA
    let painValues = {};

    //PAIN VALUES
    painValues["pain-value"] = quickId("pain-value");
    tprValues["pain-description"] = quickId("pain-description");

    //ADD DATA TO "postValues"
    postValues["pain"] = painValues;



    //GET CRIES SCALE DATA
    let criesScaleValues = {};

    //CRYING VALUES
    criesScaleValues["crying-value"] = quickId("crying-value");
    criesScaleValues["crying-description"] = quickId("crying-description");

    //REQUIRES O2 FOR SAO2 < 95% VALUES
    criesScaleValues["req-o2-value"] = quickId("req-o2-value");
    criesScaleValues["req-o2-description"] = quickId("req-o2-description");

    //INCREASED VITAL SIGNS (BP & HR) VALUES
    criesScaleValues["inc-vi-value"] = quickId("inc-vi-value");
    criesScaleValues["inc-vi-description"] = quickId("inc-vi-description");

    //EXPRESSION VALUES
    criesScaleValues["expression-value"] = quickId("expression-value");
    criesScaleValues["expression-description"] = quickId("expression-description");

    //SLEEPLESS VALUES
    criesScaleValues["sleepless-value"] = quickId("sleepless-value");
    criesScaleValues["sleepless-description"] = quickId("sleepless-description");

    //ADD DATA TO "postValues"
    postValues["cries-scale"] = criesScaleValues;



    //NONVERBAL PAIN ASSESSMENT DATA
    let nonverbalPainValues = {};

    //FACE VALUES
    nonverbalPainValues["face-value"] = quickId("face-value");
    nonverbalPainValues["face-description"] = quickId("face-description");

    //ACTIVITY VALUES
    nonverbalPainValues["activity-value"] = quickId("activity-value");
    nonverbalPainValues["activity-description"] = quickId("activity-description");

    //GUARDING VALUES
    nonverbalPainValues["guarding-value"] = quickId("guarding-value");
    nonverbalPainValues["guarding-description"] = quickId("guarding-description");

    //PHYSIOLOGY VALUES
    nonverbalPainValues["physiology-value"] = quickId("physiology-value");
    nonverbalPainValues["physiology-description"] = quickId("physiology-description");

    //RESPIRATORY VALUES
    nonverbalPainValues["respiratory-value"] = quickId("respiratory-value");
    nonverbalPainValues["respiratory-description"] = quickId("respiratory-description");

    //ADD DATA TO "postValues"
    postValues["npa"] = nonverbalPainValues;



    //PAIN SCALE DATA
    let painScaleValues = {};

    //PAIN VALUE
    painScaleValues["pain-scale-value"] = quickRadio("pain-scale-value");

    //ADD DATA TO "postValues"
    postValues["pain-scale"] = painScaleValues;


    //RASS DATA
    let rassValues = {};

    //LEVEL OF CONSCIOUSNESS VALUES
    rassValues["loc-value"] = quickId("loc-value");
    rassValues["loc-description"] = quickId("loc-description");

    //ADD DATA TO "postValues"
    postValues["rass"] = rassValues;


    //GROWTH DATA
    let growthData = {};

    //WEIGHT VALUES
    growthData["weight-value"] = quickId("weight-value");
    growthData["weight-unit"] = quickId("weight-unit");
    growthData["weight-percentile"] = quickId("weight-percentile");
    growthData["weight-description"] = quickId("weight-description");

    //HEIGHT/LENGTH VALUES
    growthData["height-length-value"] = quickId("height-length-value");
    growthData["height-length-unit"] = quickId("height-length-unit");
    growthData["height-length-percentile"] = quickId("height-length-percentile");
    growthData["height-length-description"] = quickId("height-length-description");

    //WAIST OR HEAD CIRCUMFERENCE VALUES
    growthData["circumference-value"] = quickId("circumference-value");
    growthData["circumference-unit"] = quickId("circumference-unit");
    growthData["circumference-percentile"] = quickId("circumference-percentile");
    growthData["circumference-description"] = quickId("circumference-description");

    //BMI VALUES
    growthData["bmi-value"] = quickId("bmi-value");
    growthData["bmi-description"] = quickId("bmi-description");

    //ADD DATA TO "postValues"
    postValues["growth"] = growthData;



    // IO DATA
    let ioData = {};

    //INTAKE VALUES
    ioData["intake-value"] = quickId("intake-value");
    ioData["intake-method"] = quickId("intake-method");
    ioData["intake-percent-consumed"] = quickId("percent-consumed");
    ioData["intake-description"] = quickId("intake-description");

    //OUTPUT VALUES
    ioData["output-value"] = quickId("output-value");
    ioData["output-method"] = quickId("output-method");
    ioData["output-description"] = quickId("output-description");

    //IO TOTAL VALUES
    ioData["total-io-value"] = quickId("total-io-value");
    ioData["total-io-method"] = quickId("total-io-method");
    ioData["total-time-io"] = quickId("total-time-io");
    ioData["total-io-description"] = quickId("total-io-description");

    //ADD DATA TO "postValues"
    postValues["io"] = ioData;



    //PO INTAKE DATA
    let poData = {};

    //MEAL CONSUMED VALUES
    poData["meal-consumed-value"] = quickId("meal-consumed-value");
    poData["meal-consumed-description"] = quickId("meal-consumed-description");

    //ADD DATA TO "postValues"
    postValues["po"] = poData;

    //GLUCOSE DATA
    let glucoseData = {};

    //CAPILLARY BLOOD GLUCOSE READING VALUES
    glucoseData["glucose-value"] = quickId("glucose-value");
    glucoseData["glucose-description"] = quickId("glucose-description");

    //ADD DATA TO "postValues"
    postValues["glucose"] = glucoseData;



    //SURVEY DATA
    let surveyData = {};

    //LOCAOS VALUES
    surveyData["person-value"] = quickRadio("person-value");
    surveyData["person-description"] = quickId("person-description");
    surveyData["place-value"] = quickRadio("place-value");
    surveyData["place-description"] = quickId("place-description");
    surveyData["time-value"] = quickRadio("time-value");
    surveyData["time-description"] = quickId("time-description");
    surveyData["purpose-value"] = quickRadio("purpose-value");
    surveyData["purpose-description"] = quickId("purpose-description");

    //SKIN VALUES
    surveyData["wbrl-value"] = quickRadio("wbrl-value");
    surveyData["wbrl-description"] = quickId("wbrl-description");
    surveyData["redness-irritation-value"] = quickRadio("redness-irritation-value");
    surveyData["redness-irritation-description"] = quickId("redness-irritation-description");
    surveyData["moisture-value"] = quickRadio("moisture-value");
    surveyData["moisture-description"] = quickId("moisture-description");
    surveyData["tct-value"] = quickRadio("tct-value");
    surveyData["tct-description"] = quickId("tct-description");
    surveyData["breakdown-value"] = quickRadio("breakdown-value");
    surveyData["breakdown-description"] = quickId("breakdown-description");

    //HEENT/NEURO VALUES
    surveyData["head-value"] = quickRadio("head-value");
    surveyData["head-description"] = quickId("head-description");
    surveyData["eyes-vision-value"] = quickRadio("eyes-vision-value");
    surveyData["eyes-vision-description"] = quickId("eyes-vision-description");
    surveyData["ears-hearing-value"] = quickRadio("ears-hearing-value");
    surveyData["ears-hearing-description"] = quickId("ears-hearing-description");
    surveyData["nose-value"] = quickRadio("nose-value");
    surveyData["nose-description"] = quickId("nose-description");
    surveyData["throat-mouth-value"] = quickRadio("throat-mouth-value");
    surveyData["throat-mouth-description"] = quickId("throat-mouth-description");

    //LUNGS/THORATIC VALUES
    surveyData["lung-sounds-value"] = quickRadio("lung-sounds-value");
    surveyData["lung-sounds-description"] = quickId("lung-sounds-description");
    surveyData["resp-depth-value"] = quickRadio("resp-depth-value");
    surveyData["resp-depth-description"] = quickId("resp-depth-description");
    surveyData["resp-rate-value"] = quickRadio("resp-rate-value");
    surveyData["resp-rate-description"] = quickId("resp-rate-description");
    surveyData["csa-value"] = quickRadio("csa-value");
    surveyData["csa-description"] = quickId("csa-description");
    surveyData["dlss-value"] = quickRadio("dlss-value");
    surveyData["dlss-description"] = quickId("dlss-description");

    //ABDOMEN/COCCYX/GENITALIA VALUES
    surveyData["asa-value"] = quickRadio("asa-value");
    surveyData["asa-description"] = quickId("asa-description");
    surveyData["bowel-sounds-value"] = quickRadio("bowel-sounds-value");
    surveyData["bowel-sounds-description"] = quickId("bowel-sounds-description");
    surveyData["tlbd-value"] = quickRadio("tlbd-value");
    surveyData["tlbd-description"] = quickId("tlbd-description");
    surveyData["tdcs-value"] = quickRadio("tdcs-value");
    surveyData["tdcs-description"] = quickId("tdcs-description");
    surveyData["skin-appearance-value"] = quickRadio("skin-appearance-value");
    surveyData["skin-appearance-description"] = quickId("skin-appearance-description");

    //EXTREMITIES VALUES
    surveyData["tccr-value"] = quickRadio("tccr-value");
    surveyData["tccr-description"] = quickId("tccr-description");
    surveyData["pul-sens-value"] = quickRadio("pul-sens-value");
    surveyData["pul-sens-description"] = quickId("pul-sens-description");
    surveyData["edema-value"] = quickRadio("edema-value");
    surveyData["edema-description"] = quickId("edema-description");
    surveyData["rom-value"] = quickRadio("rom-value");
    surveyData["rom-description"] = quickId("rom-description");
    surveyData["tdsscs-value"] = quickRadio("tdsscs-value");
    surveyData["tdsscs-description"] = quickId("tdsscs-description");

    //PSYCH/MENTAL HEALTH VALUES
    surveyData["mood-affect-value"] = quickRadio("mood-affect-value");
    surveyData["mood-affect-description"] = quickId("mood-affect-description");
    surveyData["cognition-value"] = quickRadio("cognition-value");
    surveyData["cognition-description"] = quickId("cognition-description");
    surveyData["thou-patt-value"] = quickRadio("thou-patt-value");
    surveyData["thou-patt-description"] = quickId("thou-patt-description");
    surveyData["slee-patt-value"] = quickRadio("slee-patt-value");
    surveyData["slee-patt-description"] = quickId("slee-patt-description");

    //GENERAL VALUES
    surveyData["pain-disc-value"] = quickRadio("pain-disc-value");
    surveyData["pain-disc-description"] = quickId("pain-disc-description");
    surveyData["elimination-value"] = quickRadio("elimination-value");
    surveyData["elimination-description"] = quickId("elimination-description");
    surveyData["appetite-value"] = quickRadio("appetite-value");
    surveyData["appetite-description"] = quickId("appetite-description");
    surveyData["gen-activity-value"] = quickRadio("gen-activity-value");
    surveyData["gen-activity-description"] = quickId("gen-activity-description");

    // ADD DATA TO "postValues"
    postValues["survey"] = surveyData;

    //CONVERT "postValues" TO JSON
    let postValuesJson = JSON.stringify(postValues);

    //SEND DATA AS JSON TO "server.php" USING AJAX
    $.ajax({
        type: 'POST',
        url: '../server.php',
        data: {vitalsData: postValuesJson},
        success: function (response) {
            console.log(response)
        }
    })
}

//Takes id of HTML input element as parameter, returns value of element if not empty; if empty, it returns null
function quickId(elementId) {
    if (document.getElementById(elementId).value !== "" && document.getElementById(elementId).value !== "default") {
        return  document.getElementById(elementId).value;
    } else {
        return null;
    }
}

//Takes name of html radio element as parameter and returns the value of the selected radio button, if none is checked
//returns null
function quickRadio(elementName) {
    let radioButtons = document.getElementsByName(elementName);

    for (let i=0; i<radioButtons.length; i++) {
        if (radioButtons[i].checked === true) {
            return radioButtons[i].value;
        }
    }
    return null;
}