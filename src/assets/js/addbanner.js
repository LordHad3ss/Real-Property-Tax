function openBanner() {
    var myModal = new bootstrap.Modal(document.getElementById("banner"), {backdrop: 'static', keyboard: false});
    myModal.show();
}

function saveAnnouncement() {
  
    var file  = document.getElementById("file-input").files[0];

    var fd = new FormData();
    fd.append("file-input", file);


    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/real-property-tax/src/store/addbanner.php', true);
    xhr.upload.onprogress = function(e) {
        if (e.lengthComputable) {
          var percentComplete = (e.loaded / e.total) * 100;
          console.log(percentComplete + '% uploaded');
        }
      };
    
      xhr.onload = function() {
        if (this.status == 200) {

            //console.log(xhr.responseText);
            saveAnnouncement2();
        };
      };
    
      xhr.send(fd);
}


function saveAnnouncement2() {

    if ($('#banner_is_button').is(':checked')) 
    {
        var isButton = 'True';
    }
    else
    {
        var isButton = 'False';
    }

    if ($('#banner_is_active').is(':checked'))
    {
        var isActive = 'True';
    }
    else
    {
        var isActive = 'False';
    }
    var banner_title = $('#banner_title').val();
    var banner_link = $('#banner_link').val();
    var fileName = document.getElementById("file-input").files[0].name;
 
    var http = new XMLHttpRequest();
    var url = '/real-property-tax/src/store/addbanner2.php';
    var params = 'banner_title=' + banner_title + '&banner_link=' + banner_link + '&fileName=' + fileName + '&isButton=' + isButton + '&isActive=' + isActive;
    http.open('POST', url, true);

    //Send the proper header information along with the request
    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    http.onreadystatechange = function() {//Call a function when the state changes.
        if(http.readyState == 4 && http.status == 200) 
        {
            location.reload();
        }   
    }
    http.send(params);
    
}