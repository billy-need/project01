//Confirmation page load scripts
function confirmationLoad(){
    checkOptions();
    checkText();
}

//Reservation page load scripts
function reservationLoad(){
    setDate();
    setTime();
}

//Check to see which options were selected in the reservation form to display on confirmation page
function checkOptions() {
    var displayOptions;

    if(document.getElementById("wheelchairCheck").innerHTML == "on") {
        displayOptions = true;
        document.getElementById("wheelchairCheck").style.display = "block";
        document.getElementById("wheelchairCheck").innerHTML = "Wheelchair";
    }

    if(document.getElementById("highchairCheck").innerHTML == "on") {
        displayOptions = true;
        document.getElementById("highchairCheck").style.display = "block";
        document.getElementById("highchairCheck").innerHTML = "Highchair";
    }

    if(document.getElementById("strollerCheck").innerHTML == "on") {
        displayOptions = true;
        document.getElementById("strollerCheck").style.display = "block";
        document.getElementById("strollerCheck").innerHTML = "Stroller";
    }

    if(document.getElementById("outdoorCheck").innerHTML == "on") {
        displayOptions = true;
        document.getElementById("outdoorCheck").style.display = "block";
        document.getElementById("outdoorCheck").innerHTML = "Outdoor Seating";
    }

    if (displayOptions) {
        document.getElementById("resOptions").style.display = "block";
    }
}

//Check to see if special instructions were given in the reservation form to display on confirmation page
function checkText() {
    if(document.getElementById("specInstructionText").innerHTML != "") {
        document.getElementById("specText").style.display = "block";
    }
}

//Set the date on the form to today's date
function setDate() {
    var date = new Date();
    var y = date.getFullYear();
    var m = ("0" + (date.getMonth() + 1)).slice(-2);
    var d = ("0" + date.getDate()).slice(-2);

    var today = y + "-" + m + "-" + d;

    document.getElementById("resDate").defaultValue = today;
}

//Set the time on the reservation form to 1 hour from now
function setTime() {
    var date = new Date();
    date.setHours( date.getHours() + 1 );

    var h = ("0" + date.getHours()).slice(-2);
    var m = ("0" + date.getMinutes()).slice(-2);

    var time = h + ":" + m;

    document.getElementById("resTime").defaultValue = time;
}
