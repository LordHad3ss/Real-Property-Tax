function createProperty(otp)
{

    var property_tdn            = document.getElementById('property_tdn').value;
    var property_location       = document.getElementById('property_location').value;
    var property_area           = document.getElementById('property_area').value;
    var property_market_value   = document.getElementById('property_market_value').value;
    var property_assessed_value = document.getElementById('property_assessed_value').value;
    var property_actual_use     = document.getElementById('property_actual_use').value;
    var property_declared_date  = document.getElementById('property_declared_date').value;
    var property_effective_date = document.getElementById('property_effective_date').value;
    var property_pin            = document.getElementById('property_pin').value;
    

    var owner_firstname         = document.getElementById('owner_firstname').value;
    var owner_lastname          = document.getElementById('owner_lastname').value;
    var owner_middlename        = document.getElementById('owner_middlename').value;
    var owner_bldg_no           = document.getElementById('owner_bldg_no').value;
    var owner_street_no         = document.getElementById('owner_street_no').value;
    var owner_street_name       = document.getElementById('owner_street_name').value;
    var owner_block_no          = document.getElementById('owner_block_no').value;
    var owner_lot_no            = document.getElementById('owner_lot_no').value;
    var owner_phase_no          = document.getElementById('owner_phase_no').value;
    var owner_country           = document.getElementById('owner_country').value;
    var owner_province          = document.getElementById('owner_province').value;
    var owner_municipality      = document.getElementById('owner_municipality').value;
    var owner_barangay          = document.getElementById('owner_barangay').value;
    var owner_zip_code          = document.getElementById('owner_zip_code').value;
    var owner_gender            = document.getElementById('owner_gender').value;
    var owner_email             = document.getElementById('owner_email').value;
    var owner_contact_no        = document.getElementById('owner_contact_no').value;
    var owner_telephone_no      = document.getElementById('owner_telephone_no').value;


    var http = new XMLHttpRequest();
        var url = '/real-property-tax/src/store/addingproperty.php';
        var params = 'property_tdn=' + property_tdn + 
                     '&property_location=' + property_location + 
                     '&property_area=' + property_area + 
                     '&property_market_value=' + property_market_value + 
                     '&property_assessed_value=' + property_assessed_value + 
                     '&property_actual_use=' + property_actual_use + 
                     '&property_declared_date=' + property_declared_date + 
                     '&property_effective_date=' + property_effective_date + 
                     '&property_pin=' + property_pin + 
                     '&owner_firstname=' + owner_firstname + 
                     '&owner_lastname=' + owner_lastname + 
                     '&owner_middlename=' + owner_middlename + 
                     '&owner_bldg_no=' + owner_bldg_no + 
                     '&owner_street_no=' + owner_street_no + 
                     '&owner_street_name=' + owner_street_name + 
                     '&owner_block_no=' + owner_block_no + 
                     '&owner_lot_no=' + owner_lot_no + 
                     '&owner_phase_no=' + owner_phase_no + 
                     '&owner_country=' + owner_country + 
                     '&owner_province=' + owner_province + 
                     '&owner_municipality=' + owner_municipality + 
                     '&owner_barangay=' + owner_barangay + 
                     '&owner_zip_code=' + owner_zip_code + 
                     '&owner_gender=' + owner_gender + 
                     '&owner_email=' + owner_email + 
                     '&owner_contact_no=' + owner_contact_no + 
                     '&owner_telephone_no=' + owner_telephone_no;
        http.open('POST', url, true);
    
        //Send the proper header information along with the request
        http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    
        http.onreadystatechange = function() {//Call a function when the state changes.
            if(http.readyState == 4 && http.status == 200) 
            {
                alert(http.responseText);
                window.location.assign("/real-property-tax/src/views/admin/PropertyManagement.php");
            }   
        }
        http.send(params); 

}


function goToPropertyManagement() {
    window.location.assign("/real-property-tax/src/views/admin/PropertyManagement.php");
}

function openModal(email,actual,assessedVal,tdn,quarter) {
    $("#quarter1").prop('checked', false);
    $("#quarter2").prop('checked', false);
    $("#quarter3").prop('checked', false);
    $("#quarter4").prop('checked', false);
    var myModal = new bootstrap.Modal(document.getElementById("exampleModal"), {backdrop: 'static', keyboard: false});
    myModal.show();
    
    if (actual == "Residential Building" || actual == "Residential Lot")
    {
        var percentClass = 0.02;
    }
    else
    {
        var percentClass = 0.03;
    }
    var taxDue = assessedVal * percentClass;
    $("#tdn").val(tdn);
    $("#recipient-name").val(email);
    $("#actual-use").val(actual);
    $("#assessed-value").val(assessedVal);
    $("#tax-due").val(taxDue);
    $("#sendEmail").prop('visibility', visible);
    //document.getElementById("sendEmail").style.visibility = "visible";
    
    const Quarter = quarter.split(",");
    let Q1 = Quarter[0];
    let Q2 = Quarter[1];
    let Q3 = Quarter[2];
    let Q4 = Quarter[3];
    if (Q1 == 'Q1')
    {
        $("#quarter1").prop('checked', true);
        if (Q2 == 'Q2')
        {
            $("#quarter2").prop('checked', true);
            if (Q3 == 'Q3')
            {
                $("#quarter3").prop('checked', true);
                if (Q4 == 'Q4')
                {
                    $("#quarter4").prop('checked', true);
                }
            }
        }
    }

    


}

function sendMail() {
    alert('dasdas');
}