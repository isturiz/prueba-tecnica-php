// Only letters 
// data-validate-only-letters="true" <- property
const validateOnlyLettersInput = (inputField) => {
  inputField.addEventListener("input", () => {
    const inputValue = inputField.value;
    const isValid = /^[A-Za-zÁáÉéÍíÓóÚúÜüÑñ´.]*$/.test(inputValue);

    if (!isValid) {
      inputField.value = inputValue.replace(/[^A-Za-zÁáÉéÍíÓóÚúÜüÑñ´.]+/g, "");
    }
  });
};
const validateLetterInputs = document.querySelectorAll("[data-validate-only-letters='true']");
validateLetterInputs.forEach((input) => {
  validateOnlyLettersInput(input);
});


// Only numbers
// data-validate-only-numbers="true" <- property
const validateOnlyNumbers = (inputField) => {
  inputField.addEventListener("input", () => {
    const inputValue = inputField.value;
    const isValid = /^\d+$/.test(inputValue);


    if (!isValid) {
      inputField.value = inputValue.replace(/[^\d]+/g, ""); // Delete non-numbers
    }
  });
};

const validateNumberInputs = document.querySelectorAll("[data-validate-only-numbers='true']");
validateNumberInputs.forEach((input) => {
  validateOnlyNumbers(input);
});

// Only porcentage
// data-validate-only-porcentage="true" <- property
const validateOnlyPorcentage = (inputField) => {
  inputField.addEventListener("input", () => {
    let inputValue = inputField.value;

    // Ajustamos la expresión regular para permitir solo números válidos hasta 100
    const isValid = /^(100(\.0{1,2})?|\d{0,2}(\.\d{0,2})?)$/.test(inputValue);

    if (!isValid) {
      // Eliminamos caracteres no válidos y garantizamos que el valor esté dentro del rango de 0 a 100
      inputValue = inputValue.replace(/[^\d.]+/g, "");
      inputValue = Math.min(100, parseFloat(inputValue)).toString();
      inputField.value = inputValue;
    }
  });
};

const validatePorcentageInputs = document.querySelectorAll("[data-validate-only-porcentage='true']");
validatePorcentageInputs.forEach((input) => {
  validateOnlyPorcentage(input);
});


// Only identify
// data-validate-only-identify="true" <- property
const validateIdentify = (inputField) => {
  inputField.addEventListener("input", () => {
    let inputValue = inputField.value;

    // Allow E, V, F (Upper or Lower) followed by numbers
    const isValid = /^[EVRevr]\d+$/.test(inputValue);


    if (!isValid) {
      // Eliminar caracteres no permitidos
      inputField.value = inputValue.replace(/[^EVRevr\d]+/g, "");
    }
  });
};

const validateIdentifyInputs = document.querySelectorAll("[data-validate-only-identify='true']");
validateIdentifyInputs.forEach((input) => {
  validateIdentify(input);
});


// data-validate-only-numbers-with-dot="true" <- property
const validateOnlyNumbersWithDot = (inputField) => {
  inputField.addEventListener("input", () => {
    const inputValue = inputField.value;
    const isValid = /^(\d+|\d*\.\d*|\d*,\d*)$/.test(inputValue);


    if (!isValid) {
      inputField.value = inputValue.replace(/[^\d]+/g, ""); // Delete non-numbers
    }
  });
};

const validateNumberWithDotInputs = document.querySelectorAll("[data-validate-only-numbers-with-dot='true']");
validateNumberWithDotInputs.forEach((input) => {
  validateOnlyNumbersWithDot(input);
});



// Only dates
// data-validate-only-dates="true" <- property
const validateOnlyDates = (inputField) => {
  inputField.addEventListener("input", () => {
    const inputValue = inputField.value;
    // El regex permite solo números y / en el formato dd/mm/yyyy
    const isValid = /^(\d{0,2}\/\d{0,2}\/\d{0,4})$/.test(inputValue);

    if (!isValid) {
      // Eliminar caracteres no válidos y corregir el formato
      const cleanedValue = inputValue.replace(/[^0-9/]/g, "");
      const parts = cleanedValue.split('/');
      if (parts[0] && parts[0].length > 2) {
        parts[0] = parts[0].slice(0, 2);
      }
      if (parts[1] && parts[1].length > 2) {
        parts[1] = parts[1].slice(0, 2);
      }
      if (parts[2] && parts[2].length > 4) {
        parts[2] = parts[2].slice(0, 4);
      }
      inputField.value = parts.join('/');
    }
  });
};

const validateDateInputs = document.querySelectorAll("[data-validate-only-dates='true']");
validateDateInputs.forEach((input) => {
  validateOnlyDates(input);
});
