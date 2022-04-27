let queryType = '';

function medSearch(query) {
    //REMOVE ALL CURRENT QUERY RESULTS
    let currentResults = document.getElementsByClassName("queryResult");
    for (let i = 0; i < currentResults.length; i++) {
        currentResults[i].remove();
        i--;
    }
    if (queryType === 'medication') {
        //IF QUERY IS PRESENT (INPUT NOT BLANK) SEND TO SERVER
        if (query.length > 0) {
            $.ajax({
                type: 'POST',
                url: '../server.php',
                data: {medQuery: query},
                success: function (response) {
                    //WHEN RESPONSE IS RECEIVED, TRY TO DECODE JSON AND RENDER RESULTS (JSON ONLY RETURNED WHEN VALUES ARE FOUND)
                    try {
                        document.getElementById("center-div").style.display = "none";
                        let parsedResponse = JSON.parse(response);
                        if (parsedResponse.length > 0) {
                            for (let i = 0; i < parsedResponse.length; i++) {
                                renderMedResult(parsedResponse[i])
                            }
                        }
                    } catch (e) {

                    }
                }
            })
            //IF THE QUERY IS BLANK, UN-HIDE THE "No Results" TEXT
        } else {
            document.getElementById("center-div").style.display = "flex";
        }
    } else if (queryType === 'author') {
        if (query.length > 0) {
            $.ajax({
                type: 'POST',
                url: '../server.php',
                data: {authorQuery: query},
                success: function (response) {
                    //WHEN RESPONSE IS RECEIVED, TRY TO DECODE JSON AND RENDER RESULTS (JSON ONLY RETURNED WHEN VALUES ARE FOUND)
                    try {
                        document.getElementById("center-div").style.display = "none";
                        let parsedResponse = JSON.parse(response);
                        if (parsedResponse.length > 0) {
                            for (let i = 0; i < parsedResponse.length; i++) {
                                renderAuthorResult(parsedResponse[i]);
                            }
                        }
                    } catch (e) {

                    }
                }
            })
        }else {
            document.getElementById("center-div").style.display = "flex";
        }
    }
}

function renderMedResult(medData) {

    let result = document.createElement("div");
    result.classList.add("queryResult");

    let dataContainer = document.createElement("div");
    dataContainer.classList.add("resultDataContainer");

    let medName = document.createElement("h2");
    medName.innerText = medData["genericName"]
    let medBrand = document.createElement("h3");
    medBrand.innerText = medData["brandName"];
    let medForm = document.createElement("h4");
    medForm.innerText = medData["dosageForm"];

    dataContainer.append(medName);
    dataContainer.append(medBrand);
    dataContainer.append(medForm);

    let buttonDiv = document.createElement("div");
    buttonDiv.classList.add("resultButtonContainer");

    let resultButton = document.createElement("button");
    resultButton.innerText = "Select"
    resultButton.addEventListener("click", function () {
        //WHEN SELECT BUTTON IS CLICKED ENTER DRUG NAME INTO FORM, HIDE SEARCH CONTAINER, CLEAR TEXT INPUT, REMOVE
        //QUERY RESULT ELEMENTS, AND SHOW THE "No Results" H1
        document.getElementById("medication-name").value = medData["genericName"]
        document.getElementsByClassName("searchContainer")[0].style.display = "none";
        document.getElementById("medSearchInput").value = '';

        let currentResults = document.getElementsByClassName("queryResult");
        for (let i = 0; i < currentResults.length; i++) {
            currentResults[i].remove();
            i--;
        }

        document.getElementById("center-div").style.display = "flex";

        //REMOVE ANY CURRENT DOSAGE OPTIONS FROM DOSAGE DROPDOWN
        let currentDosageOptions = document.getElementById("dosage-amount").children;
        if (currentDosageOptions.length > 1) {
            for (let i = 1; i < currentDosageOptions.length; i++) {
                currentDosageOptions[i].remove();
                i--;
            }
        }

        //ADD ALL APPLICABLE DOSAGES TO THE DOSAGE DROPDOWN
        let dosageArr = medData["dosage"].split(',');
        for (let i = 0; i < dosageArr.length; i++) {
            let newDosageOption = document.createElement("option");
            newDosageOption.value = dosageArr[i];
            newDosageOption.innerText = dosageArr[i];
            document.getElementById("dosage-amount").append(newDosageOption);
        }

    })
    buttonDiv.append(resultButton);

    result.append(dataContainer);
    result.append(buttonDiv);


    document.getElementsByClassName("searchContainer")[0].append(result);
}

//RENDERS RESULTS FOR AUTHOR SEARCH FOR ADDITIONAL COMMENTS SECTION
function renderAuthorResult(authorData) {
    let result = document.createElement("div");
    result.classList.add("queryResult");
    result.style.padding = "15px 10px"

    let dataContainer = document.createElement("div");
    dataContainer.classList.add("resultDataContainer");

    let medName = document.createElement("h2");
    medName.innerText = authorData["firstName"] + " " + authorData["lastName"];

    dataContainer.append(medName);

    let buttonDiv = document.createElement("div");
    buttonDiv.classList.add("resultButtonContainer");

    let resultButton = document.createElement("button");
    resultButton.innerText = "Select"
    resultButton.addEventListener("click", function () {
        //WHEN SELECT BUTTON IS CLICKED ENTER DRUG NAME INTO FORM, HIDE SEARCH CONTAINER, CLEAR TEXT INPUT, REMOVE
        //QUERY RESULT ELEMENTS, AND SHOW THE "No Results" H1
        document.getElementsByClassName("searchContainer")[0].style.display = "none";
        document.getElementById("order-comment-author").value = authorData["firstName"] + ' ' + authorData["lastName"];

        let currentResults = document.getElementsByClassName("queryResult");
        for (let i = 0; i < currentResults.length; i++) {
            currentResults[i].remove();
            i--;
        }

        document.getElementById("medSearchInput").value = '';
        document.getElementById("center-div").style.display = "flex";
    })
    buttonDiv.append(resultButton);

    result.append(dataContainer);
    result.append(buttonDiv);


    document.getElementsByClassName("searchContainer")[0].append(result);
}

//WHEN SEARCH BUTTON IN ORDERS FORM IS CLICKED, DISPLAY MED-SEARCH CONTAINER
document.getElementById("medication-search").addEventListener("click", function () {
    document.getElementsByClassName("searchContainer")[0].style.display = "flex";
    queryType = 'medication';
})

document.getElementById("author-search").addEventListener("click", function () {
    document.getElementsByClassName("searchContainer")[0].style.display = "flex";
    queryType = 'author';
})

//WHEN CLOSE ICON IS CLICKED, HIDE THE MED-SEARCH CONTAINER
document.getElementById("med-search-close").addEventListener("click", function () {
    document.getElementsByClassName("searchContainer")[0].style.display = "none";
    document.getElementById("medSearchInput").value = '';

    let currentResults = document.getElementsByClassName("queryResult");
    for (let i = 0; i < currentResults.length; i++) {
        currentResults[i].remove();
        i--;
    }

    document.getElementById("center-div").style.display = "flex";
})

function getData() {
    let postValues = {};

    postValues["orderDate"] = quickId("new-order-date");
    postValues["orderMedication"] = quickId("medication-name");
    postValues["orderdisplayName"] = quickId("display-name");
    postValues["orderDosage"] = quickId("dosage-amount");
    postValues["orderIncludeDEA"] = quickId("include-dea-npi");
    postValues["orderChildResist"] = quickId("resistant-caps");
    postValues["orderRoute"] = quickId("medication-route");
    postValues["orderFrequency"] = quickId("medication-frequency");
    postValues["orderDirections"] = quickId("medication-directions");
    postValues["orderQuantity"] = quickId("dispense-quantity");
    postValues["orderStatus"] = quickId("medication-status");
    postValues["orderStartDate"] = quickId("start-date");
    postValues["orderEndDate"] = quickId("end-date");
    postValues["orderNDC"] = quickId("ndc");
    postValues["orderOrigin"] = quickId("rx-origin");
    postValues["orderSupply"] = quickId("days-supply");
    postValues["orderRefills"] = quickId("refills-value");
    postValues["orderSubstitution"] = quickRadio("substitution-allowed");
    postValues["orderDAW"] = quickId("daw-value");
    postValues["orderComments"] = quickId("medication-comments");

    //TODO POST DATA ACCORDING TO TYPE OF DATA (PRESCRIPTION, HOME MEDS, ETC.)

    // $.ajax({
    //     type: 'POST',
    //     url: '../server.php',
    //     data: {}
    // });
}

function getCommentData() {
    let commentValues = {};

    commentValues["commentDate"] = quickId("order-comment-date");
    commentValues["commentAuthor"] = quickId("order-comment-author");
    commentValues["commentBody"] = quickId("order-comment-text");

    $.ajax({
       type: 'POST',
       url: '../server.php',
       data: {orderComment: JSON.stringify(commentValues)},
       success: function(response) {
           console.log(response);
       }
    });
}

//Takes id of HTML input element as parameter, returns value of element if not empty; if empty, it returns null
function quickId(elementId) {
    if (document.getElementById(elementId).value !== "" && document.getElementById(elementId).value !== "default") {
        return document.getElementById(elementId).value;
    } else {
        return null;
    }
}

//Takes name of html radio element as parameter and returns the value of the selected radio button, if none is checked
//returns null
function quickRadio(elementName) {
    let radioButtons = document.getElementsByName(elementName);

    for (let i = 0; i < radioButtons.length; i++) {
        if (radioButtons[i].checked === true) {
            return radioButtons[i].value;
        }
    }
    return null;
}

//WHEN SUBMIT COMMENT BUTTON IS CLICKED, SEND DATA TO SERVER
document.getElementById("comment-submit").addEventListener("click", function () {
    getCommentData();
})