function validateNumber(event) {
    var keyCode = event.keyCode || event.which;
    var keyValue = String.fromCharCode(keyCode);

    // Allow backspace, delete, tab, and arrow keys
    if (keyCode == 8 || keyCode == 46 || keyCode == 9 || keyCode == 37 || keyCode == 39) {
        return;
    }

    // Allow digits (0-9)
    if (!/^\d+$/.test(keyValue)) {
        event.preventDefault();
    }
}
