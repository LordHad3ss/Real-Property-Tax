function showSideAlert() {
    var alertElement = document.getElementById('sideAlert');
    alertElement.classList.remove('d-none');
    setTimeout(function() {
        alertElement.classList.add('d-none'); // Hide the alert after 3 seconds
    }, 3000);
}   