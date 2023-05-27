// Get the input element
phoneInput.addEventListener('input', function(event) {
    // Get the current input value
    var inputValue = event.target.value;
  
    // Remove any non-digit characters from the input value
    var cleanValue = inputValue.replace(/\D/g, '');
  
    // Check if the input value already starts with "+63"
    var hasPrefix = cleanValue.startsWith('63');
  
    // If the input value does not have the prefix, add it
    if (!hasPrefix) {
      cleanValue = '63' + cleanValue;
    }
  
    cleanValue = cleanValue.slice(0, 12);
  
  
    // Format the phone number with the masking format "(+63)111-111-1111"
    var formattedValue = cleanValue.replace(/(\d{2})(\d{3})(\d{3})(\d{4})/, '(+$1)$2-$3-$4');
  
    // Set the formatted value back to the input element
    phoneInput.value = formattedValue;
  });