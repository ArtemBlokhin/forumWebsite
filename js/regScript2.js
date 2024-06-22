document.addEventListener("DOMContentLoaded", function () {
    const form2 = document.getElementById("form-2");
    const requiredFields = form2.querySelectorAll("input[required], select[required]");
    const modeRadios = form2.querySelectorAll('input[name="mode"]');
    const modeError = document.getElementById("mode-error");
    const personalDataCheckbox = document.getElementById("personal-data");
    const submitButton = form2.querySelector(".form-done");
    const urlField = document.getElementById("first-name");
    const urlError = urlField.nextElementSibling.nextElementSibling; // Span для ошибки URL

    // Изначально кнопка заблокирована
    submitButton.disabled = true;

    // Регулярное выражение для проверки URL
    const urlPattern = /^(https?:\/\/)?([\da-z.-]+)\.([a-z.]{2,6})([/\w .-]*)*\/?$/;

    // Добавление обработчиков событий на все обязательные поля
    requiredFields.forEach((field) => {
        field.addEventListener("blur", () => {
            validateField(field);
            updateSubmitButton();
        });

        field.addEventListener("input", () => {
            validateField(field);
            updateSubmitButton();
        });
    });

    // Добавление обработчика события на чекбокс
    personalDataCheckbox.addEventListener("change", () => {
        validateCheckbox();
        updateSubmitButton();
    });

    // Добавление обработчика события на радиокнопки
    modeRadios.forEach((radio) => {
        radio.addEventListener("change", () => {
            validateRadios();
            updateSubmitButton();
        });
    });

    // Функция проверки всех полей
    function validateAllFields() {
        return Array.from(requiredFields).every((field) => validateField(field, false));
    }

    // Функция проверки всех радиокнопок
    function validateAllRadios() {
        return Array.from(modeRadios).some((radio) => radio.checked);
    }

    // Функция проверки одного поля
    function validateField(field, showError = true) {
        const errorMessage = field.nextElementSibling;
        if (field.value.trim() === "") {
            if (showError) {
                field.classList.add("error");
                errorMessage.style.display = "inline";
            }
            return false;
        } else {
            field.classList.remove("error");
            errorMessage.style.display = "none";
            return true;
        }
    }
    // Функция проверки радиокнопок
    function validateRadios() {
        const selected = Array.from(modeRadios).some((radio) => radio.checked);
        if (!selected) {
            modeError.style.display = "inline";
            modeRadios.forEach((radio) => radio.classList.add("error"));
            return false;
        } else {
            modeError.style.display = "none";
            modeRadios.forEach((radio) => radio.classList.remove("error"));
            return true;
        }
    }

    // Функция проверки чекбокса
    function validateCheckbox() {
        if (!personalDataCheckbox.checked) {
            return false;
        } else {
            return true;
        }
    }

    // Функция обновления состояния кнопки
    function updateSubmitButton() {
        const allFieldsValid = validateAllFields();
        const allRadiosValid = validateAllRadios();
        const checkboxValid = validateCheckbox();
        const isValid = allFieldsValid && allRadiosValid && checkboxValid;
        submitButton.disabled = !isValid;
    }

    // Добавление обработчика события на форму
    form2.addEventListener("input", updateSubmitButton);
    form2.addEventListener("change", updateSubmitButton);

    form2.addEventListener("submit", function (event) {
        let isValid = true;

        requiredFields.forEach((field) => {
            if (!validateField(field)) {
                isValid = false;
            }
        });

        if (!validateRadios()) {
            isValid = false;
        }

        if (!validateCheckbox()) {
            isValid = false;
        }

        if (!isValid) {
            event.preventDefault();
        }
    });
});