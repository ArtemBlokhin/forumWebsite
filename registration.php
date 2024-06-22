<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./styles/registration.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="./js/regScript.js"></script>
  <script src="./js/formPost.js"></script>
  <script src="https://unpkg.com/imask"></script>
  <style>
.hidden {
  opacity: 0;
  visibility: hidden;
  transition: opacity 2s, visibility 2s;
}

.visible {
  opacity: 1;
  visibility: visible;
  transition: opacity 2s, visibility 2s;
}

h1 {
  margin: 0;
}

</style>
</head>
<body class="centered">
    <img src="./images/flags.jpg" alt="Example Image" class="back-image" />
    <div class="form-section-wrapper">
      <div class="form-section">
        <div class="head-bl">
          <h1>Регистрация</h1>
          <?php include './components/breadcrumbs.php'; ?>
          <?php echo get_breadcrumb(); ?>
        </div>
        <div class="progress-bar">
          <div class="step">
            <div class="circle">1</div>
            <div class="step-text">Личные данные</div>
          </div>
          <div class="line">
            <div class="line-fill" id="animatedElement"></div>
          </div>
          <div class="step">
            <div class="circle inactive" id="secondCircle">2</div>
            <div class="step-text inactive" id="secondCircleText">Выступление</div>
          </div>
        </div>
        <form id="form-1">
          <div class="form-group">
            <label for="full-name">Ваше ФИО <b>*</b></label>
            <div class="input-container">
              <input type="text" id="full-name" required placeholder="Введите ФИО" maxlength="150" />
              <div class="svg-container">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="valid-icon">
                  <circle cx="12" cy="12" r="11" stroke="#52A34B" stroke-width="2"/>
                  <path d="M6 12.2941L9.5 16L18 7" stroke="#52A34B" stroke-width="3"/>
                </svg>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="invalid-icon">
                  <circle cx="12" cy="12" r="11" stroke="#E95B5B" stroke-width="2"/>
                  <path d="M8 16L16 8M8 8L16 16" stroke="#E95B5B" stroke-width="2"/>
                </svg>
              </div>
            </div>
            <span class="error-message">Поле обязательно для заполнения</span>
          </div>
          <div class="form-group">
            <label for="phone">Ваш номер телефона <b>*</b></label>
            <div class="input-container">
              <input type="tel" id="phone" required placeholder="Введите номер телефона" />
              <div class="svg-container">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="valid-icon">
                  <circle cx="12" cy="12" r="11" stroke="#52A34B" stroke-width="2"/>
                  <path d="M6 12.2941L9.5 16L18 7" stroke="#52A34B" stroke-width="3"/>
                </svg>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="invalid-icon">
                  <circle cx="12" cy="12" r="11" stroke="#E95B5B" stroke-width="2"/>
                  <path d="M8 16L16 8M8 8L16 16" stroke="#E95B5B" stroke-width="2"/>
                </svg>
              </div>
            </div>
            <span class="phone-hint">Начните ввод с 7 или 3</span>
            <span class="error-message">Поле обязательно для заполнения</span>
            <span class="error-message format-error">Неверный формат номера телефона</span>
          </div>
          <div class="form-group">
            <label for="email">Ваша электронная почта <b>*</b></label>
            <div class="input-container">
              <input type="email" id="email" required placeholder="Введите электронную почту" maxlength="254" />
              <div class="svg-container">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="valid-icon">
                  <circle cx="12" cy="12" r="11" stroke="#52A34B" stroke-width="2"/>
                  <path d="M6 12.2941L9.5 16L18 7" stroke="#52A34B" stroke-width="3"/>
                </svg>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="invalid-icon">
                  <circle cx="12" cy="12" r="11" stroke="#E95B5B" stroke-width="2"/>
                  <path d="M8 16L16 8M8 8L16 16" stroke="#E95B5B" stroke-width="2"/>
                </svg>
              </div>
            </div>
            <span class="error-message">Поле обязательно для заполнения</span>
            <span class="error-message email-format-error">Неверный формат электронной почты</span>
          </div>
          <div class="form-footer">
            <button type="submit" id="next-button" class="form-done" disabled>Далее</button>
          </div>
        </form>
        <form id="form-2" class="hidden" method="POST">
          <input type="hidden" id="hidden-full-name" name="full-name" />
          <input type="hidden" id="hidden-phone" name="phone" />
          <input type="hidden" id="hidden-email" name="email" />
          <div class="form-group">
            <label for="org-name">Наименование обр. организации <b>*</b></label>
            <div class="input-container">
              <input type="text" id="org-name" name="organization-name" required placeholder="Введите обр. организацию" />
              <div class="svg-container">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="valid-icon">
                  <circle cx="12" cy="12" r="11" stroke="#52A34B" stroke-width="2"/>
                  <path d="M6 12.2941L9.5 16L18 7" stroke="#52A34B" stroke-width="3"/>
                </svg>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="invalid-icon">
                  <circle cx="12" cy="12" r="11" stroke="#E95B5B" stroke-width="2"/>
                  <path d="M8 16L16 8M8 8L16 16" stroke="#E95B5B" stroke-width="2"/>
                </svg>
              </div>
            </div>
            <span class="error-message">Поле обязательно для заполнения</span>
          </div>
          <div class="form-group">
            <label for="org-link">Ссылка на сайт обр. организации <b>*</b></label>
            <div class="input-container">
              <input type="text" id="org-link" name="organization-link" required placeholder="Введите ссылку" />
              <div class="svg-container">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="valid-icon">
                  <circle cx="12" cy="12" r="11" stroke="#52A34B" stroke-width="2"/>
                  <path d="M6 12.2941L9.5 16L18 7" stroke="#52A34B" stroke-width="3"/>
                </svg>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="invalid-icon">
                  <circle cx="12" cy="12" r="11" stroke="#E95B5B" stroke-width="2"/>
                  <path d="M8 16L16 8M8 8L16 16" stroke="#E95B5B" stroke-width="2"/>
                </svg>
              </div>
            </div>
            <span class="error-message">Поле обязательно для заполнения</span>
            <span class="error-message url-error">Некорректный URL</span>
          </div>
          <div class="radio-btns">
            <div class="radio-btn-group">
              <input type="radio" id="employee" name="role" value="employee" onclick="Selected(this)"/>
              <label for="employee">Сотрудник</label>
            </div>
            <div class="radio-btn-group">
              <input type="radio" id="student" name="role" value="student" onclick="Selected(this)"/>
              <label for="student">Студент</label>
            </div>
          </div>
          <div class="form-group hidden" id="position-group">
            <label for="post">Ваша должность <b>*</b></label>
            <div class="input-container">
              <input id="post" name="position" required placeholder="Введите должность" />
              <div class="svg-container">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="valid-icon">
                  <circle cx="12" cy="12" r="11" stroke="#52A34B" stroke-width="2"/>
                  <path d="M6 12.2941L9.5 16L18 7" stroke="#52A34B" stroke-width="3"/>
                </svg>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="invalid-icon">
                  <circle cx="12" cy="12" r="11" stroke="#E95B5B" stroke-width="2"/>
                  <path d="M8 16L16 8M8 8L16 16" stroke="#E95B5B" stroke-width="2"/>
                </svg>
              </div>
            </div>
            <span class="error-message">Поле обязательно для заполнения</span>
          </div>
          <div class="radio-btns">
            <div class="radio-btn-group">
              <input type="radio" id="ochno" name="mode" value="ochno" />
              <label for="ochno">Очно</label>
            </div>
            <div class="radio-btn-group">
              <input type="radio" id="dist" name="mode" value="dist" />
              <label for="dist">Дистанционно</label>
            </div>
          </div>
          <div class="form-group custom-select">
            <label for="section">Секция <b>*</b></label>
            <select id="section" name="section" required>
              <option value="">Выберите секцию</option>
              <option value="1">Секция 1. Приоритетные направления деятельности вузов Союзного государства</option>
              <option value="2">Секция 2. Развитие инженерного образования в Союзном государстве с рассмотрением основных вопросов</option>
              <option value="3">Секция 3. Молодежное инновационное предпринимательство. Лекция: “Стартап как диплом”</option>
              <option value="4">Секция 4. Карьера инженера - трек с участием студентов и ответственных</option>
              <option value="5">Секция 5. Векторы молодежной политики</option>
            </select>
            <span class="error-message">Выбор секции обязателен</span>
          </div>

          <div class="radio-btns" id="checkbox-container">
            <div class="radio-btn-group">
              <input type="checkbox" id="personal-data" name="personal-data" value="agree" />
              <label for="personal-data">Я согласен с обработкой персональных данных</label>
            </div>
          </div>
    
          <div class="form-footer">
            <button class="form-back" type="button" id="back-button">Назад</button>
            <button class="form-done" id="form-done2" type="submit">Регистрация</button>
          </div>
        </form>
      </div>
    </div>
    <script>
      function Selected(a) {
        const positionGroup = document.getElementById("position-group");
        if (a.value == "employee") {
          positionGroup.classList.remove("hidden");
          positionGroup.classList.add("visible");
        } else {
          positionGroup.classList.remove("visible");
          positionGroup.classList.add("hidden");
          document.getElementById("post").value = ""; // Clear the input value when hidden
        }
      }

      document.addEventListener("DOMContentLoaded", function () {
        const form1 = document.getElementById("form-1");
        const form2 = document.getElementById("form-2");
        const submitButton = form1.querySelector("button[type='submit']");
        const backButton = document.getElementById("back-button");
        const phoneInput = document.getElementById("phone");

        // Initially disable the submit button
        submitButton.disabled = true;

        // Function to check form validity
        function checkFormValidity() {
          let allFilled = true;
          form1.querySelectorAll("input[required]").forEach((input) => {
            if (!input.value.trim()) {
              allFilled = false;
            }
          });
          submitButton.disabled = !allFilled;
        }

        // Add event listeners to inputs
        form1.querySelectorAll("input[required]").forEach((input) => {
          input.addEventListener("blur", checkFormValidity);
          input.addEventListener("input", checkFormValidity);
        });

        // Initial check to disable the submit button without showing errors
        checkFormValidity();

        // Apply input mask for phone number
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

        // Event listener for "Назад" button
        backButton.addEventListener("click", () => {
          form2.classList.add("hidden");
          form1.classList.remove("hidden");
        });

        // Event listener for form submission
        submitButton.addEventListener("click", (event) => {
          event.preventDefault();
          // Copy data from form-1 to hidden fields in form-2
          document.getElementById("hidden-full-name").value = document.getElementById("full-name").value;
          document.getElementById("hidden-phone").value = document.getElementById("phone").value;
          document.getElementById("hidden-email").value = document.getElementById("email").value;

          form1.classList.add("hidden");
          form2.classList.remove("hidden");
        });
      });
    </script>
</body>
</html>
