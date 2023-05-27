    
document.getElementById('country').addEventListener('change', function () {
    var country = this.value;

    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'https://restcountries.com/v3.1/name/' + country, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            var provinces = JSON.parse(xhr.responseText);
            var provinceSelect = document.getElementById('province');
            provinceSelect.innerHTML = '<option value="">Select a province</option>';

            for (var i = 0; i < provinces.length; i++) {
                var option = document.createElement('option');
                option.value = provinces[i];
                option.text = provinces[i];
                provinceSelect.appendChild(option);
            }
            provinceSelect.disabled = false;
        } else {
            // Handle error
        }
    };
    xhr.send();
});