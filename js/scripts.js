function confirmationLoad(){
    checkOptions();
    checkText();
}

function checkOptions() {
    var displayOptions;

    if(document.getElementById("wheelchairCheck").innerHTML == "on") {
        displayOptions = true;
        document.getElementById("wheelchairCheck").style.visibility ="visible";
        document.getElementById("wheelchairCheck").innerHTML = "-Wheelchair";
    }
    else {
        document.getElementById("wheelchairCheck").style.visibility="hidden";
    }

    if(document.getElementById("highchairCheck").innerHTML == "on") {
        displayOptions = true;
        document.getElementById("highchairCheck").style.visibility ="visible";
        document.getElementById("highchairCheck").innerHTML = "-Highchair";
    }
    else {
        document.getElementById("highchairCheck").style.visibility ="hidden";
    }

    if(document.getElementById("strollerCheck").innerHTML == "on") {
        displayOptions = true;
        document.getElementById("strollerCheck").style.visibility ="visible";
        document.getElementById("strollerCheck").innerHTML = "-Stroller";
    }
    else {
        document.getElementById("strollerCheck").style.visibility ="hidden";
    }

    if(document.getElementById("outdoorCheck").innerHTML == "on") {
        displayOptions = true;
        document.getElementById("outdoorCheck").style.visibility ="visible";
        document.getElementById("outdoorCheck").innerHTML = "-Outdoor Seating";
    }
    else {
        document.getElementById("outdoorCheck").style.visibility ="hidden";
    }

    if (displayOptions) {
        document.getElementById("resOptions").style.visibility ="visible";
    }
    else {
        document.getElementById("resOptions").style.visibility ="hidden";
    }
}

function checkText() {
    if(document.getElementById("specInstructionText").innerHTML == "") {
        document.getElementById("specText").style.visibility ="hidden";
    }
    else {
        document.getElementById("specText").style.visibility ="visible";
    }
}

