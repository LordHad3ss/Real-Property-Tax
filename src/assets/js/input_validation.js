function formatInput(event,type) {

  if(type == 'tax_declaration') {
    const tdn = document.getElementById('property_tdn');
    let currentValue = tdn.value;

    let digitsOnly = currentValue.replace(/\D/g, '');

    if (!digitsOnly.startsWith('E-')) {
      digitsOnly = 'E-' + digitsOnly;
      const countryCode = digitsOnly.slice(0, 5);
      const areaCode = digitsOnly.slice(5, 7);
      const firstPart = digitsOnly.slice(7, 10);
      const secondPart = digitsOnly.slice(10, 13);
      const thirdPart = digitsOnly.slice(13, 16);
      const formattedValue = `${countryCode}-${areaCode}-${firstPart}-${secondPart}-${thirdPart}`;

      tdn.value = formattedValue;
    }
  }

  if(type == 'property_pin') {
    console.log('yest');
    const pin = document.getElementById('property_pin');
    let currentValue = pin.value;

    let digitsOnly = currentValue.replace(/\D/g, '');

    const countryCode = digitsOnly.slice(0, 3);
    const areaCode = digitsOnly.slice(3, 7);
    const firstPart = digitsOnly.slice(7, 11);
    const secondPart = digitsOnly.slice(11, 14);

    const formattedValue = `${countryCode}-${areaCode}-${firstPart}-${secondPart}`;

    pin.value = formattedValue;
  }
}

  