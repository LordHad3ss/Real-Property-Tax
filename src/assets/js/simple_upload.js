fileInput.addEventListener('change', handleFileSelect);
    function handleFileSelect(event) {
        const files = event.target.files
        fileList.innerHTML = '';
        fileList.innerHTML = files[0].name
        removeFile.style.display = 'block';
        subTitle.style.display = 'none';
        iconUploaded.style.display = 'block';
        const reader = new FileReader();
        reader.onload = function(e) {
            const imageUrl = URL.createObjectURL(files[0]);
            uploadedImageLink.href = imageUrl;
        };
        reader.readAsDataURL(files[0]);
    }

    // Add an event listener to the file input
    fileInput.addEventListener('change', function() {
        if (fileInput.files.length > 0) {
            // If a file is selected, add a CSS class to hide the label
            fileLabel.classList.add('hide-choose-file');
        } else {
            // If no file is selected, remove the CSS class to show the label
            fileLabel.classList.remove('hide-choose-file');
        }
    });

    // Add an event listener to the remove button
    removeFile.addEventListener('click', function() {
        // Clear the file input field, uploaded image source, and hide the remove button
        fileList.innerHTML = '';
        fileInput.value = '';

        removeFile.style.display = 'none';
        subTitle.style.display = 'block'
        fileLabel.classList.remove('hide-choose-file');
        iconUploaded.style.display = 'none';
    });