
// to get current year

document.addEventListener("DOMContentLoaded", function () {
    getYear();
});

function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    var yearElement = document.querySelector("#displayYear");
    
    if (yearElement) {
        yearElement.innerHTML = currentYear;
    }
}


// /** google_map js **/

// function initMap() {
//   var map = new google.maps.Map(document.getElementById("map"), {
//     center: { lat: 28.644800, lng: 77.216721 },
//     zoom: 10,
//   });
// }

  