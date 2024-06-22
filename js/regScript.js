document.addEventListener("DOMContentLoaded", () => {
  const form1 = document.getElementById("form-1");
  const inputs1 = form1 ? form1.querySelectorAll("input[required], textarea[required]") : [];
  const submitButton = form1 ? form1.querySelector("button[type='submit']") : null;
  const phoneHint = document.querySelector(".phone-hint");

  if (submitButton) {
    submitButton.disabled = true;
  }

  function checkFormValidity() {
    let allFilled = true;
    let allValid = true;

    inputs1.forEach((input) => {
      if (!input.value.trim()) {
        allFilled = false;
      }
      if (!validateField(input, false)) {
        allValid = false;
      }
    });

    if (submitButton) {
      submitButton.disabled = !(allFilled && allValid);
    }
  }

  function validateField(input, showError = true) {
    const svgContainer = input.parentElement.querySelector(".svg-container");
    const errorMessage = input.parentElement.nextElementSibling;
    const formatErrorMessage = errorMessage ? errorMessage.nextElementSibling : null;

    console.log(`Validating field: ${input.id}`);
    console.log(`Value: ${input.value}`);
    console.log(`ShowError: ${showError}`);

    if (!input.value.trim()) {
      if (showError) {
        input.classList.add("error");
        errorMessage.style.display = "block";
        if (phoneHint) phoneHint.style.display = "block"; // Show hint when input is empty
        if (svgContainer) {
          svgContainer.querySelector(".invalid-icon").classList.add("show");
          svgContainer.querySelector(".invalid-icon").classList.remove("hide");
          svgContainer.querySelector(".valid-icon").classList.add("hide");
          svgContainer.querySelector(".valid-icon").classList.remove("show");
        }
      }
      if (input.id === "phone" || input.id === "email" || input.id === "org-link") {
        if (formatErrorMessage) formatErrorMessage.style.display = "none";
      }
      return false;
    } else {
      if (showError) {
        input.classList.remove("error");
        errorMessage.style.display = "none";
        if (phoneHint) phoneHint.style.display = "none"; // Hide hint when input is valid or has an error
        if (svgContainer) {
          svgContainer.querySelector(".invalid-icon").classList.add("hide");
          svgContainer.querySelector(".invalid-icon").classList.remove("show");
          svgContainer.querySelector(".valid-icon").classList.add("show");
          svgContainer.querySelector(".valid-icon").classList.remove("hide");
        }
      }

      if (input.id === "phone") {
        const phoneNumber = input.value.replace(/\D/g, "");
        console.log(`Phone number: ${phoneNumber}`);
        if (!/^7\d{10}$/.test(phoneNumber) && !/^375\d{9}$/.test(phoneNumber)) {
          if (showError) {
            input.classList.add("error");
            if (formatErrorMessage) formatErrorMessage.style.display = "block";
            if (phoneHint) phoneHint.style.display = "none"; // Hide hint when there is a format error
            if (svgContainer) {
              svgContainer.querySelector(".invalid-icon").classList.add("show");
              svgContainer.querySelector(".invalid-icon").classList.remove("hide");
              svgContainer.querySelector(".valid-icon").classList.add("hide");
              svgContainer.querySelector(".valid-icon").classList.remove("show");
            }
          }
          return false;
        } else {
          if (showError) {
            if (formatErrorMessage) formatErrorMessage.style.display = "none";
            if (phoneHint) phoneHint.style.display = "none"; // Hide hint when input is valid
            if (svgContainer) {
              svgContainer.querySelector(".invalid-icon").classList.add("hide");
              svgContainer.querySelector(".invalid-icon").classList.remove("show");
              svgContainer.querySelector(".valid-icon").classList.add("show");
              svgContainer.querySelector(".valid-icon").classList.remove("hide");
            }
          }
        }
      }

      if (input.id === "email") {
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        console.log(`Email pattern test: ${emailPattern.test(input.value)}`);
        if (!emailPattern.test(input.value)) {
          if (showError) {
            input.classList.add("error");
            if (formatErrorMessage) formatErrorMessage.style.display = "block";
            if (phoneHint) phoneHint.style.display = "none"; // Hide hint when there is a format error
            if (svgContainer) {
              svgContainer.querySelector(".invalid-icon").classList.add("show");
              svgContainer.querySelector(".invalid-icon").classList.remove("hide");
              svgContainer.querySelector(".valid-icon").classList.add("hide");
              svgContainer.querySelector(".valid-icon").classList.remove("show");
            }
          }
          return false;
        } else {
          if (showError) {
            if (formatErrorMessage) formatErrorMessage.style.display = "none";
            if (phoneHint) phoneHint.style.display = "none"; // Hide hint when input is valid
            if (svgContainer) {
              svgContainer.querySelector(".invalid-icon").classList.add("hide");
              svgContainer.querySelector(".invalid-icon").classList.remove("show");
              svgContainer.querySelector(".valid-icon").classList.add("show");
              svgContainer.querySelector(".valid-icon").classList.remove("hide");
            }
          }
        }
      }

      if (input.id === "org-link") {
        const urlPattern = /^(https?:\/\/)?([\da-z.-]+)\.([a-z.]{2,6})([/\w .-]*)*\/?$/;
        console.log(`URL pattern test: ${urlPattern.test(input.value)}`);
        if (!urlPattern.test(input.value)) {
          console.log(`Invalid URL detected: ${input.value}`);
          if (showError) {
            input.classList.add("error");
            if (errorMessage) errorMessage.style.display = "block"; // Display the URL error message
            if (formatErrorMessage) formatErrorMessage.style.display = "none";
            if (svgContainer) {
              svgContainer.querySelector(".invalid-icon").classList.add("show");
              svgContainer.querySelector(".invalid-icon").classList.remove("hide");
              svgContainer.querySelector(".valid-icon").classList.add("hide");
              svgContainer.querySelector(".valid-icon").classList.remove("show");
            }
          }
          return false;
        } else {
          if (showError) {
            if (errorMessage) errorMessage.style.display = "none"; // Hide the URL error message
            if (svgContainer) {
              svgContainer.querySelector(".invalid-icon").classList.add("hide");
              svgContainer.querySelector(".invalid-icon").classList.remove("show");
              svgContainer.querySelector(".valid-icon").classList.add("show");
              svgContainer.querySelector(".valid-icon").classList.remove("hide");
            }
          }
        }
      }

      return true;
    }
  }

  inputs1.forEach((input) => {
    input.addEventListener("blur", () => {
      validateField(input);
      checkFormValidity();
    });

    input.addEventListener("focus", () => {
      input.classList.remove("error");
      const svgContainer = input.parentElement.querySelector(".svg-container");
      const errorMessage = input.parentElement.nextElementSibling;
      const formatErrorMessage = errorMessage ? errorMessage.nextElementSibling : null;

      errorMessage.style.display = "none";
      if (formatErrorMessage) formatErrorMessage.style.display = "none";
      if (svgContainer) {
        svgContainer.querySelector(".invalid-icon").classList.add("hide");
        svgContainer.querySelector(".invalid-icon").classList.remove("show");
        svgContainer.querySelector(".valid-icon").classList.add("hide");
        svgContainer.querySelector(".valid-icon").classList.remove("show");
      }
    });

    input.addEventListener("input", () => {
      validateField(input, true);
      checkFormValidity();
    });
  });

  checkFormValidity();

  const phoneInput = document.getElementById("phone");
  if (phoneInput) {
    IMask(phoneInput, {
      mask: [
        {
          mask: "+{7} (000) 000-00-00",
          startsWith: "7",
          lazy: false,
        },
        {
          mask: "+{375} (00) 000-00-00",
          startsWith: "3",
          lazy: false,
        },
      ],
      dispatch: function (appended, dynamicMasked) {
        const number = (dynamicMasked.value + appended).replace(/\D/g, "");
        return dynamicMasked.compiledMasks.find(function (m) {
          return number.indexOf(m.startsWith) === 0;
        });
      },
    });
  }

  const backButton = document.getElementById("back-button");
  const form2 = document.getElementById("form-2");

  if (backButton) {
    backButton.addEventListener("click", () => {
      form2.classList.add("hidden");
      form1.classList.remove("hidden");
      document.getElementById("animatedElement").classList.remove("animate");
      document.getElementById("animatedElement").classList.add("animate2");
      document.getElementById("secondCircle").classList.remove("animateCircle");
      document.getElementById("secondCircleText").classList.remove("animateText");
      document.getElementById("secondCircle").classList.add("backAnimateCircle");
      document.getElementById("secondCircleText").classList.add("backAnimateText");
    });
  }

  if (submitButton) {
    submitButton.addEventListener("click", (event) => {
      event.preventDefault();
      document.getElementById("hidden-full-name").value = document.getElementById("full-name").value;
      document.getElementById("hidden-phone").value = document.getElementById("phone").value;
      document.getElementById("hidden-email").value = document.getElementById("email").value;

      form1.classList.add("hidden");
      form2.classList.remove("hidden");
      document.getElementById("animatedElement").classList.remove("animate2");
      document.getElementById("animatedElement").classList.add("animate");
      document.getElementById("secondCircle").classList.remove("backAnimateCircle");
      document.getElementById("secondCircleText").classList.remove("backAnimateText");
      document.getElementById("secondCircle").classList.add("animateCircle");
      document.getElementById("secondCircleText").classList.add("animateText");
    });
  }

  const requiredFields = form2 ? form2.querySelectorAll("input[required], textarea[required]") : [];
  const modeRadios = form2 ? form2.querySelectorAll('input[name="mode"]') : [];
  const modeError = document.getElementById("mode-error");
  const personalDataCheckbox = document.getElementById("personal-data");
  const urlField = document.getElementById("org-link");
  const urlError = urlField ? urlField.nextElementSibling.nextElementSibling : null;
  const sectionSelect = document.getElementById("section");
  const sectionErrorMessage = sectionSelect ? sectionSelect.nextElementSibling : null;
  const checkboxContainer = document.getElementById("checkbox-container");
  const positionGroup = document.getElementById("position-group");
  const postField = document.getElementById("post");

  const submitButton2 = form2 ? form2.querySelector("button[type='submit']") : null;
  if (submitButton2) {
    submitButton2.disabled = true;
  }

  const urlPattern = /^(https?:\/\/)?([\da-z.-]+)\.([a-z.]{2,6})([/\w .-]*)*\/?$/;

  requiredFields.forEach((field) => {
    field.addEventListener("blur", () => {
      validateField2(field);
      updateSubmitButton();
    });

    field.addEventListener("focus", () => {
      field.classList.remove("error");
      const svgContainer = field.parentElement.querySelector(".svg-container");
      const errorMessage = field.parentElement.nextElementSibling;

      errorMessage.style.display = "none";
      if (field.id === "org-link" && urlError) {
        urlError.style.display = "none";
      }
      if (svgContainer) {
        svgContainer.querySelector(".invalid-icon").classList.add("hide");
        svgContainer.querySelector(".invalid-icon").classList.remove("show");
        svgContainer.querySelector(".valid-icon").classList.add("hide");
        svgContainer.querySelector(".valid-icon").classList.remove("show");
      }
    });

    field.addEventListener("input", () => {
      validateField2(field, true);
      updateSubmitButton();
    });
  });

  if (sectionSelect) {
    sectionSelect.addEventListener("change", () => {
      validateField2(sectionSelect);
      updateSubmitButton();
    });
  }

  if (personalDataCheckbox) {
    personalDataCheckbox.addEventListener("change", () => {
      validateCheckbox();
      updateSubmitButton();
    });
  }

  modeRadios.forEach((radio) => {
    radio.addEventListener("change", () => {
      validateRadios();
      updateSubmitButton();
    });
  });

  function validateAllFields() {
    return Array.from(requiredFields).every((field) => validateField2(field, false));
  }

  function validateAllRadios() {
    return Array.from(modeRadios).some((radio) => radio.checked);
  }

  function validateField2(field, showError = true) {
    const svgContainer = field.parentElement.querySelector(".svg-container");
    const errorMessage = field.parentElement.nextElementSibling;
    if (field.value.trim() === "") {
      if (showError) {
        field.classList.add("error");
        errorMessage.style.display = "inline";
        if (svgContainer) {
          svgContainer.querySelector(".invalid-icon").classList.add("show");
          svgContainer.querySelector(".invalid-icon").classList.remove("hide");
          svgContainer.querySelector(".valid-icon").classList.add("hide");
          svgContainer.querySelector(".valid-icon").classList.remove("show");
        }
      }
      return false;
    } else {
      field.classList.remove("error");
      errorMessage.style.display = "none";
      if (svgContainer) {
        svgContainer.querySelector(".invalid-icon").classList.add("hide");
        svgContainer.querySelector(".invalid-icon").classList.remove("show");
        svgContainer.querySelector(".valid-icon").classList.add("show");
        svgContainer.querySelector(".valid-icon").classList.remove("hide");
      }
      if (field.id === "org-link" && !urlPattern.test(field.value)) {
        console.log(`URL is invalid: ${field.value}`);
        if (showError) {
          field.classList.add("error");
          if (urlError) {
            urlError.style.display = "inline";
          }
          if (svgContainer) {
            svgContainer.querySelector(".invalid-icon").classList.add("show");
            svgContainer.querySelector(".invalid-icon").classList.remove("hide");
            svgContainer.querySelector(".valid-icon").classList.add("hide");
            svgContainer.querySelector(".valid-icon").classList.remove("show");
          }
        }
        return false;
      }
      if (field.id === "org-link" && urlError) {
        urlError.style.display = "none";
      }
      return true;
    }
  }

  function validateRadios() {
    const selected = Array.from(modeRadios).some((radio) => radio.checked);
    if (!selected) {
      if (modeError) {
        modeError.style.display = "inline";
      }
      modeRadios.forEach((radio) => radio.classList.add("error"));
      return false;
    } else {
      if (modeError) {
        modeError.style.display = "none";
      }
      modeRadios.forEach((radio) => radio.classList.remove("error"));
      return true;
    }
  }

  function validateCheckbox() {
    return personalDataCheckbox && personalDataCheckbox.checked;
  }

  function updateSubmitButton() {
    const allFieldsValid = validateAllFields();
    const allRadiosValid = validateAllRadios();
    const checkboxValid = validateCheckbox();
    const isValid = allFieldsValid && allRadiosValid && checkboxValid;

    if (submitButton2) {
      submitButton2.disabled = !isValid;
    }

    const sectionSelect = document.getElementById("section");
    if (sectionSelect && sectionErrorMessage) {
      if (!sectionSelect.value) {
        sectionErrorMessage.style.display = "inline";
      } else {
        sectionErrorMessage.style.display = "none";
      }
    }

    if (checkboxContainer) {
      checkboxContainer.style.display = "block";
    }

    if (positionGroup && positionGroup.classList.contains("hidden")) {
      postField.value = "не имеется";
    }
    if (!(positionGroup.classList.contains("hidden"))) {
      postField.value = "";
    }
  }

  if (form2) {
    form2.addEventListener("input", updateSubmitButton);
    form2.addEventListener("change", updateSubmitButton);

    form2.addEventListener("submit", function (event) {
      let isValid = true;

      requiredFields.forEach((field) => {
        if (!validateField2(field)) {
          isValid = false;
        }
      });

      if (!validateRadios()) {
        isValid = false;
      }

      if (!validateCheckbox()) {
        isValid = false;
      }

      if (!validateURL(urlField)) {
        isValid = false;
      }

      if (!isValid) {
        event.preventDefault();
      } else {
      }
    });
  }
});

function validateURL(urlField) {
  const urlPattern = /^(https?:\/\/)?([\da-z.-]+)\.([a-z.]{2,6})([/\w .-]*)*\/?$/;
  const urlValue = urlField.value;
  console.log(`Validating URL: ${urlValue} - Result: ${urlPattern.test(urlValue)}`);
  return urlPattern.test(urlValue);
}
