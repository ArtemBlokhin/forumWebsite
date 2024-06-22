<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./styles/main.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  </head>
<style>
.header {
    text-align: center;
    margin-bottom: 40px;
}

@media (max-width: 600px) {
    .timeline::before {
        left: 20px;
    }
    .timeline-event {
        width: 100%;
        padding-left: 40px;
        padding-right: 25px;
        text-align: left;
    }
    .timeline-event:nth-child(odd) {
        padding-right: 25px;
    }
    .timeline-event:nth-child(even) {
        left: 0;
        padding-left: 40px;
    }
    .timeline-event::after {
        left: 20px;
        top: 20px;
        right: auto;
        transform: none;
    }
}
.image-container {
    max-width: 100%;
    overflow: hidden;
}
  </style>
  <body>
    <?php require_once './components/header.php'?>
    <img class="background" src="./images/back.jpg" />
    <div class="main-greetings">
      <div class="greetings-header">
        XIII Форум вузов инженерно-технологического профиля Союзного государства
      </div>
      <div class="greetings-text">с 23 сентября по 27 сентября 2024 года</div>
      <button class="greetings-btn"><a href="registration.php">Регистрация</a></button>
    </div>
  <div class="container">
    <div class="block">
      <div class="block-1440">
        <div class="block-top-wrapper">
          <div class="block-top-with-href">
            <div class="hidden-elem" style="visibility:hidden; margin-left:50px;">qwe2121212121122212111rty</div>
            <div class="block-header">О форуме</div>
            <a class="btn-wth-arr" href="/forumWebsite/news.php">
              <p>Посмотреть историю форума &rarr;</p>
            </a>
          </div>
        </div>
        <div class="block-text">
          Форум  вузов инженерно-технологического профиля Союзного государства -
          это важное событие, собирающее ведущие учебные заведения, специалистов и
          студентов из России и Белоруссии, объединённых общими интересами в
          области инженерии и технологий. <br /><br />Цель форума - концентрация
          усилий всех участников по формированию единого образовательного и
          научно-технологического пространства Союзного государства и создание
          межвузовской платформы для реализации основных направлений
          белорусско-российского интеграционного сотрудничества по приоритетным
          направлениям развития образования, науки и техники.
          <br /><br />Первостепенными задачами форума являются: обмен опытом между
          университетами по развитию инженерного образования в условиях
          трансформации экономики, формирование и укрепление имиджа Союзного
          государства, популяризация науки и активизация творческой деятельности
          среди обучающейся молодежи Союзного государства, создание условий для
          развития молодежного инновационного предпринимательства в рамках
          Союзного государства.
        </div>
      </div>

    </div>
    <div class="block with-bg">
      <div class="block-header" style="color:white">Тематика форума</div>
      <div class="block-content">
        <div class="block-content-item">
          <svg
            fill="#0072BC"
            width="56px"
            height="56px"
            viewBox="0 0 16 16"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M16 6.28a1.23 1.23 0 0 0-.62-1.07l-6.74-4a1.27 1.27 0 0 0-1.28 0l-6.75 4a1.25 1.25 0 0 0 0 2.15l1.92 1.12v2.81a1.28 1.28 0 0 0 .62 1.09l4.25 2.45a1.28 1.28 0 0 0 1.24 0l4.25-2.45a1.28 1.28 0 0 0 .62-1.09V8.45l1.24-.73v2.72H16V6.28zm-3.73 5L8 13.74l-4.22-2.45V9.22l3.58 2.13a1.29 1.29 0 0 0 1.28 0l3.62-2.16zM8 10.27l-6.75-4L8 2.26l6.75 4z"
            />
          </svg>
          <div class="block-content-headertext">
            Приоритетные направления деятельности вузов Союзного государства
          </div>
          <div class="block-content-text">
            Вузы Союзного государства развивают совместные научные проекты и
            образовательные программы, укрепляя интеграцию образовательных
            систем.
          </div>
        </div>
        <div class="block-content-item">
          <svg
            width="56px"
            height="56px"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M4.87171 1.58811C4.18324 1.9184 4.34293 2.75714 4.79289 3.20711L9.08579 7.5L7.5 9.08579L3.20711 4.79289C2.75711 4.3429 1.90944 4.19971 1.58419 4.87995C0.985604 6.1319 0.769329 7.54124 0.975579 8.9287C1.23113 10.6478 2.11708 12.2104 3.46105 13.3124C4.80502 14.4144 6.51089 14.977 8.24676 14.8908C8.89048 14.8588 9.52124 14.7385 10.1228 14.537L17.8787 22.2929C19.0503 23.4645 20.9497 23.4645 22.1213 22.2929L22.2929 22.1213C23.4645 20.9497 23.4645 19.0503 22.2929 17.8787L14.537 10.1228C14.7395 9.51835 14.8601 8.8844 14.8913 8.2375C14.9753 6.50151 14.4104 4.79638 13.3066 3.45387C12.2028 2.11135 10.6391 1.22746 8.91964 0.974169C7.53192 0.769745 6.12286 0.987876 4.87171 1.58811ZM12.0945 10.5087C12.5356 9.7995 12.793 8.98448 12.834 8.13802C12.8932 6.91285 12.4946 5.70946 11.7156 4.76198C10.9366 3.8145 9.83297 3.19069 8.61946 3.01193C8.21216 2.95193 7.80225 2.94351 7.39883 2.98462L10.5 6.08579C11.2811 6.86684 11.281 8.13317 10.5 8.91421L8.91421 10.5C8.13317 11.281 6.86684 11.281 6.08579 10.5L2.98467 7.39888C2.94336 7.8044 2.95209 8.21647 3.01295 8.62584C3.1933 9.8391 3.81856 10.9419 4.76707 11.7196C5.71557 12.4974 6.91949 12.8944 8.14458 12.8336C8.98967 12.7916 9.80314 12.5338 10.511 12.093L11.9946 13.5766L11.9924 13.5782L19.2929 20.8787C19.6834 21.2692 20.3166 21.2692 20.7071 20.8787L20.8787 20.7071C21.2692 20.3166 21.2692 19.6834 20.8787 19.2929L12.0945 10.5087Z"
              fill="#0072BC"
            />
          </svg>
          <div class="block-content-headertext">
            Развитие инженерного образования в Союзном государстве
          </div>
          <div class="block-content-text">
            Инженерное образование ориентировано на подготовку специалистов,
            способных решать современные технические задачи с использованием
            новейших технологий.
          </div>
        </div>
        <div class="block-content-item">
          <svg
            width="56px"
            height="56px"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <circle cx="12" cy="12" r="10" stroke="#0072BC" stroke-width="2" />
            <path
              d="M9 14H12"
              stroke="#0072BC"
              stroke-width="1.5"
              stroke-linecap="round"
            />
            <path
              d="M10 12V8.2C10 8.0142 10 7.9213 10.0123 7.84357C10.0801 7.41567 10.4157 7.08008 10.8436 7.01231C10.9213 7 11.0142 7 11.2 7H13.5C14.8807 7 16 8.11929 16 9.5C16 10.8807 14.8807 12 13.5 12H10ZM10 12V17M10 12H9"
              stroke="#0072BC"
              stroke-width="1.5"
              stroke-linecap="round"
            />
          </svg>
          <div class="block-content-headertext">
            Молодежное инновационное предпринимательство
          </div>
          <div class="block-content-text">
            Поддержка молодежного предпринимательства осуществляется через
            инкубаторы и акселерационные программы для стартапов.
          </div>
        </div>
      </div>
    </div>



    <div class="block">
      <div class="swiper-container">
        <div class="swiper-top">
          <div class="hidden-elem" style="visibility: hidden;"> s2121211212ome text</div>
          <div class="swiper-header">Организационный комитет</div>
          <div class="btns-block">
            <div class="s-button-prev">
              <button class="org-slider-Btn nav-btn" id="prevBtn" disabled>
                <svg
                  style="transform: scaleX(-1)"
                  width="56"
                  height="56"
                  viewBox="0 0 40 40"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <circle
                    cx="20"
                    cy="20"
                    r="19"
                    stroke="#0072BC"
                    stroke-width="2"
                  />
                  <path
                    d="M30.7071 20.7071C31.0976 20.3166 31.0976 19.6834 30.7071 19.2929L24.3431 12.9289C23.9526 12.5384 23.3195 12.5384 22.9289 12.9289C22.5384 13.3195 22.5384 13.9526 22.9289 14.3431L28.5858 20L22.9289 25.6569C22.5384 26.0474 22.5384 26.6805 22.9289 27.0711C23.3195 27.4616 23.9526 27.4616 24.3431 27.0711L30.7071 20.7071ZM10 21H30V19H10V21Z"
                    fill="#0072BC"
                  />
                </svg>
              </button>
            </div>
            <div class="s-button-next">
              <button class="org-slider-Btn nav-btn" id="nextBtn">
                <svg
                  width="56"
                  height="56"
                  viewBox="0 0 40 40"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <circle
                    cx="20"
                    cy="20"
                    r="19"
                    stroke="#0072BC"
                    stroke-width="2"
                  />
                  <path
                    d="M30.7071 20.7071C31.0976 20.3166 31.0976 19.6834 30.7071 19.2929L24.3431 12.9289C23.9526 12.5384 23.3195 12.5384 22.9289 12.9289C22.5384 13.3195 22.5384 13.9526 22.9289 14.3431L28.5858 20L22.9289 25.6569C22.5384 26.0474 22.5384 26.6805 22.9289 27.0711C23.3195 27.4616 23.9526 27.4616 24.3431 27.0711L30.7071 20.7071ZM10 21H30V19H10V21Z"
                    fill="#0072BC"
                  />
                </svg>
              </button>
            </div>
          </div>
        </div>
        <div class="swiper-wrapper">
          <div class="swiper-slide slide">
            <img class="slide-photo" src="./images/org/DSM.jpeg" />
            <div class="slide-header">Дмитриев Сергей Михайлович</div>
            <div class="slide-text">Ректор</div>
          </div>
          <div class="swiper-slide slide">
            <img class="slide-photo" src="./images/org/ИЕГ.jpg" />
            <div class="slide-header">Ивашкин Евгений Геннадьевич</div>
            <div class="slide-text">Первый проректор</div>
          </div>
          <div class="swiper-slide slide">
            <img class="slide-photo" src="./images/org/КАА.jpg" />
            <div class="slide-header">Куркин Андрей Александрович</div>
            <div class="slide-text">Проректор по научной работе</div>
          </div>
          <div class="swiper-slide slide">
            <img class="slide-photo" src="./images/org/ХАЕ.jpg" />
            <div class="slide-header">Хробостов Александр Евгеньевич</div>
            <div class="slide-text">Проректор по программам развития</div>
          </div>
          <div class="swiper-slide slide">
            <img class="slide-photo" src="./images/org/ОСЮ.jpg" />
            <div class="slide-header">Обыденнова Светлана Юрьевна</div>
            <div class="slide-text">Проректор по экономике</div>
          </div>
          <div class="swiper-slide slide">
            <img class="slide-photo" src="./images/org/ГКО.jpg" />
            <div class="slide-header">Гончаров Кирилл Олегович</div>
            <div class="slide-text">
              Проректор по внеучебной работе и молодежной политике
            </div>
          </div>
          <div class="swiper-slide slide">
            <img class="slide-photo" src="./images/org/КВЕ.jpg" />
            <div class="slide-header">Кочешков Владислав Евгеньевич</div>
            <div class="slide-text">
              Проректор по управлению имущественным комплексом
            </div>
          </div>
          <div class="swiper-slide slide">
            <img class="slide-photo" src="./images/org/ННД.jpg" />
            <div class="slide-header">Николаев Николай Дмитриевич</div>
            <div class="slide-text">Проректор по безопасности</div>
          </div>
          <div class="swiper-slide slide">
            <img class="slide-photo" src="./images/org/ЗОС.jpg" />
            <div class="slide-header">Зорина Ольга Сергеевна</div>
            <div class="slide-text">
              Начальник управления международного образования и сотрудничества
            </div>
          </div>
          <div class="swiper-slide slide">
            <img class="slide-photo" src="./images/org/ХОА.jpg" />
            <div class="slide-header">Ходыкина Ольга Александровна</div>
            <div class="slide-text">Начальник отдела международных связей</div>
          </div>
        </div>
      </div>
    </div>
    <div class="block with-bg">
  <div class="block-header" style="color:white">Основные этапы XIII форума</div>
  <div class="timeline-container">
    <div class="timeline-item">
      <div class="timeline-date">27.04.2024</div>
      <div class="timeline-content">
        <div class="timeline-header">Первый этап XIII форума в Москве, на ВДНХ</div>
      </div>
    </div>
    <div class="timeline-item">
      <div class="timeline-date">до 15.09.2024</div>
      <div class="timeline-content">
        <div class="timeline-header">Прием заявок на регистрацию</div>
        <p>Для участия в форуме необходимо пройти процедуру регистрации через кнопку «Регистрация» на данной странице. После успешного прохождения регистрации на почту, указанную при регистрации, появится сообщение об успешной регистрации.</p>
      </div>
    </div>
    <div class="timeline-item">
      <div class="timeline-date">15.09.2024</div>
      <div class="timeline-content">
        <div class="timeline-header">Окончание приема заявок на регистрацию</div>
      </div>
    </div>
    <div class="timeline-item">
      <div class="timeline-date">20.09.2024</div>
      <div class="timeline-content">
        <div class="timeline-header">Решение орг. комитета по окончательному списку статей</div>
        <p>После проверки всех статей, организационный комитет вынесет решение по каждой статье. Решение будет выслано на почту, указанную при регистрации.</p>
      </div>
    </div>
    <div class="timeline-item">
      <div class="timeline-date">20.09.2024</div>
      <div class="timeline-content">
        <div class="timeline-header">Формирование расписания форума</div>
        <p>На основе окончательного списка статей формируется расписание выступлений, после чего расписание публикуется на сайте.</p>
      </div>
    </div>
    <div class="timeline-item">
      <div class="timeline-date">23.09.2024 - 26.09.2024</div>
      <div class="timeline-content">
        <div class="timeline-header">Проведение форума на базе НГТУ им. Р.Е. Алексеева</div>
      </div>
    </div>
    <div class="timeline-item">
      <div class="timeline-date">27.09.2024</div>
      <div class="timeline-content">
        <div class="timeline-header">Подведение итогов форума, награждение призеров</div>
      </div>
    </div>
  </div>
</div>
    <div class="block">
  <div class="block-header">Место проведения</div>
  <div class="creative-block-container">
    <div class="container creative-block">
      <div class="image-container">
        <img src="./images/NN.webp" alt="Нижний Новгород">
      </div>
      <div class="text-content">
        <div class="hhh">Город проведения: Нижний Новгород</div>
        <p>Городом проведения второго этапа XIII форум вузов инженерно-технологического профиля Союзного государства является Нижний Новгород. Этот исторический город, расположенный на слиянии рек Волги и Оки, славится своими живописными пейзажами и богатым культурным наследием. Город также известен своими музеями, театрами и концертными залами, которые предлагают разнообразные культурные мероприятия и выставки. Современный Нижний Новгород является важным промышленным и научным центром, где расположены ведущие университеты и научно-исследовательские институты.</p>
        <div class="button-wrapper">
          <a href="./places.php">Посмотреть интересные места →</a>
        </div>
      </div>
    </div>
    <div class="container creative-block">
      <div class="image-container">
        <img src="./images/ngtu.jpg" alt="Москва">
      </div>
      <div class="text-content">
        <div class="hhh">Место проведения: НГТУ им. Р.Е. Алексеева</div>
        <p>Местом проведения второго этапа XIII Форум вузов инженерно-технологического профиля Союзного государства является Нижегородский Государственный Технический университет имени Р. Е. Алексеева.Это ведущий университет Нижнего Новгород, который на протяжении долгого времени успешно готовит для России высококвалифицированных специалистов, которые пополняют отечественную экономику надежными кадрами, трудящимися на благо процветания родной страны.</p>
        <div class="button-wrapper">
          <a href="#">Узнать историю НГТУ →</a>
        </div>
      </div>
    </div>
  </div>
</div>


    <!--<div class="block with-bg">
      <div class="block-header">Место проведения</div>
      <div class="location-block">
        <div class="location-text">
          <div>Учебный корпус №1, улица Минина, 24к1;</div>
          <svg
            width="81"
            height="20"
            viewBox="0 0 81 20"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path d="M0.5 0H80.5L40.5 20L0.5 0Z" fill="#0072BC" />
          </svg>
          <div>Многофункциональный зал "Взлет", улица Минина, 28Б;</div>
          <svg
            width="81"
            height="20"
            viewBox="0 0 81 20"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path d="M0.5 0H80.5L40.5 20L0.5 0Z" fill="#0072BC" />
          </svg>
          <div>Учебный корпус №6, Казанское шоссе, 12к6</div>
        </div>
        <div class="location-map">
          <script
            style="margin-right: 5"
            type="text/javascript"
            charset="utf-8"
            async
            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A41e1da93ba56e3444ffc658a52dab0c6de2a8aee34b5b00608f764b163be482c&amp;&amp;lang=ru_RU&amp;scroll=false"
          ></script>
        </div>
      </div>
    </div>-->
    <div class="block">
      <div class="block-top-wrapper">
        <div class="block-top-with-href">
          <div class="hidden-elem" style="visibility:hidden; margin-left:50px;">qwe2121212121122212111rty</div>
          <div class="block-header">Последние новости</div>
          <a class="btn-wth-arr" href="/forumWebsite/news.php">
            <p>Посмотреть все новости &rarr;</p>
          </a>
        </div>
      </div>

      <div class="swiper2-container">
        <div class="swiper-wrapper wrap">
          <div class="swiper-slide slide2">
            <img src="./images/news/1.jpg" alt="Background Image" class="slide2-image">
            <div class="slide2-text">
                <div class="slide2-head-text">Открытие форума в Москве</div>
                <div class="slide2-sup-text">24 Августа, 2024</div>
            </div>
          </div>
          <div class="swiper-slide slide2">
            <img src="./images/news/2.jpg" alt="Background Image" class="slide2-image">
            <div class="slide2-text">
                <div class="slide2-head-text">Открытие форума в Москве</div>
                <div class="slide2-sup-text">24 Августа, 2024</div>
            </div>
          </div>
          <div class="swiper-slide slide2">
            <img src="./images/news/3.jpg" alt="Background Image" class="slide2-image">
            <div class="slide2-text">
                <div class="slide2-head-text">Открытие форума в Москве</div>
                <div class="slide2-sup-text">24 Августа, 2024</div>
            </div>
          </div>
          <div class="swiper-slide slide">
            <img src="./images/news/4.jpg" alt="Background Image" class="slide2-image">
            <div class="slide2-text">
                <div class="slide2-head-text">Открытие форума в Москве</div>
                <div class="slide2-sup-text">24 Августа, 2024</div>
            </div>
          </div>
      </div>
    </div>      
    </div>
    <div class="block with-bg">
      <div class="block-content2">
        <div class="feedback">
          <div class="input-block-texts">
            <div class="input-block-header" style="color:white">Остались вопросы?</div>
            <div class="input-block-text">
              Если у вас есть какие-то вопросы по поводу проведение форума или
              же вы хотите выдвинуть какие-либо рекомендации по поводу
              проведения, напишите нам и мы ответим вам в ближайшее время.
            </div>
          </div>
          <form>
            <div class="form-input-block" style="margin-bottom:20px;">
              <label>Ваше ФИО</label>
              <input class="form-input" name="name" placeholder="Петров Иван Иванович" required />
            </div>
            <div class="form-input-block" style="margin-bottom:20px;">
              <label>Ваша почта</label>
                <input class="form-input" name="email" type="email" placeholder="example@yandex.ru" required />
            </div>
            <div class="form-input-block" style="margin-bottom:20px;">
              <label>Ваш вопрос</label>
              <input class="form-input" name="question" placeholder="Скажите нам что-нибудь..." required />
              </div>
            <button type="submit" class="feedback-btn">Отправить</button>
        </form>
        </div>
      </div>
    </div>
  </div>
    <?php require_once './components/footer.php'?>
    <script src="./js/script.js"></script>
    <script>
        document.getElementById('contact-form').addEventListener('submit', function(event) {
          event.preventDefault();
          const formData = new FormData(this);

          fetch('send_email.php', {
            method: 'POST',
            body: formData
          })
          .then(response => response.text())
          .then(data => {
            alert(data);
          })
          .catch(error => {
            console.error('Error:', error);
          });
        });
  </script>
  </body>
</html>
