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

    //PAIN DATA
    painScaleValues["pain-scale-value"] = quickRadio("pain-scale-value");

    //ADD DATA TO "postValues"
    postValues["pain-scale"] = painScaleValues;

}

function quickId(elementId) {
    if (document.getElementById(elementId).value !== "" && document.getElementById(elementId).value !== "default") {
        return  document.getElementById(elementId).value;
    } else {
        return null;
    }
}

function quickRadio(elementName) {
    let radioButtons = document.getElementsByName(elementName);

    for (let i=0; i<radioButtons.length; i++) {
        if (radioButtons[i].checked === true) {
            return radioButtons[i].value;
        }
    }
    return null;
}