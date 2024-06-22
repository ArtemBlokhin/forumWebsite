<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../styles/materials.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <style>
      .active{
        color:var(--main-color2) !important;
      }
      .schedule-schedule { display: none; }
      .swiper {
        width: 100%;
        display: none;
      }
      .swiper-slide {
        cursor: pointer;
      }
      .slide-text {
        font-family: InterM;
        text-align: center;
      }
      .slide-day-text {
        font-size: 14px;
      }
      .slide-sup-text {
        font-size: 32px;
        font-family: InterM;
      }
      .slide-help-text {
        font-size: 14px;
      }
      .materials-materials {
        display: none;
        margin-bottom:24px;
      }
      .materials-materials.active {
        display: flex;
        flex-direction:column;
        gap:15px;
      }
      @media (max-width: 480px) {
        .nav {
          display: none;
        }
        .swiper {
          display: block;
        }
      }

      .nav-item2:hover{
        color: var(--main-color2);
      }
      @media (max-width: 768px) {
        .nav-item2{
          font-size:15px;
        }
        .nav-block{
          display: block;
        }
        nav{
          justify-content: space-evenly;
          text-align: center;
        }
      }
      .nav-item2{
        font-size: 16px;
        cursor: pointer;
        transition: color 0.3s ease;
        color:var(--black);
        font-family: InterS;
      }
    </style>
  </head>
  <body>
    <?php require_once '../components/header.php'?>
    <div class="container">
      <div class=page-head>
        <h1>Дополнительные материалы</h1>
        <?php include '../components/breadcrumbs.php'; ?>
        <?php echo get_breadcrumb(); ?>
      </div>
      <div class="materials-content">
        <div class="materials-text">
          Здесь вы найдете все статьи с конференции и другие материалы: идеи,
          новшества, полезные знания. <br />
          Погрузитесь в мир открытий и обмена опытом, читайте и вдохновляйтесь
        </div>
        <nav class="nav">
          <div class="nav-item2 active" data-target="materials1">Секция 1</div>
          <div class="nav-item2" data-target="materials2">Секция 2</div>
          <div class="nav-item2" data-target="materials3">Секция 3</div>
          <div class="nav-item2" data-target="materials4">Секция 4</div>
          <div class="nav-item2" data-target="materials5">Секция 5</div>
        </nav>
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide active" data-target="materials1">
              <div class="slide-text">
                <div class="slide-sup-text">1</div>
                <div class="slide-help-text">Секция</div>
              </div>
            </div>
            <div class="swiper-slide" data-target="materials2">
              <div class="slide-text">
                <div class="slide-sup-text">2</div>
                <div class="slide-help-text">Секция</div>
              </div>
            </div>
            <div class="swiper-slide" data-target="materials3">
              <div class="slide-text">
                <div class="slide-sup-text">3</div>
                <div class="slide-help-text">Секция</div>
              </div>
            </div>
            <div class="swiper-slide" data-target="materials4">
              <div class="slide-text">
                <div class="slide-sup-text">4</div>
                <div class="slide-help-text">Секция</div>
              </div>
            </div>
            <div class="swiper-slide" data-target="materials5">
              <div class="slide-text">
                <div class="slide-sup-text">5</div>
                <div class="slide-help-text">Секция</div>
              </div>
            </div>
          </div>
        </div>
        <div class="materials-materials materials1 active">
          <a class="materials-link">О.А. Козлов, "Искусственный интеллект в медицине: современные тенденции"</a> 
          <a class="materials-link">Д.Н. Смирнова, "Экологические аспекты устойчивого развития городов"</a>
          <a class="materials-link">С.В. Ильин, "Блокчейн-технологии: перспективы и риски"</a>
          <a class="materials-link">В.Г. Новиков, "Финансовая грамотность населения как фактор экономического развития"</a>
          <a class="materials-link">Л.М. Кузнецова, "Искусство руководства: секреты успешного лидерства"</a>
        </div>
        <div class="materials-materials materials2">
          <a class="materials-link">А.И. Иванов, "Инновационные подходы к управлению персоналом"</a>
          <a class="materials-link">Е.П. Сидорова, "Роль технологий в образовании будущего"</a>
          <a class="materials-link">В.Г. Новиков, "Финансовая грамотность населения как фактор экономического развития"</a>
          <a class="materials-link">Л.М. Кузнецова, "Искусство руководства: секреты успешного лидерства"</a>
        </div>
        <div class="materials-materials materials3">
          <a class="materials-link">А.И. Иванов, "Инновационные подходы к управлению персоналом"</a>
          <a class="materials-link">Е.П. Сидорова, "Роль технологий в образовании будущего"</a>
          <a class="materials-link">М.С. Петров, "Цифровая трансформация: вызовы и возможности"</a>
        </div>
        <div class="materials-materials materials4">
          <a class="materials-link">Д.Н. Смирнова, "Экологические аспекты устойчивого развития городов"</a>
          <a class="materials-link">С.В. Ильин, "Блокчейн-технологии: перспективы и риски"</a>
          <a class="materials-link">В.Г. Новиков, "Финансовая грамотность населения как фактор экономического развития"</a>
          <a class="materials-link">Л.М. Кузнецова, "Искусство руководства: секреты успешного лидерства"</a>
        </div>
        <div class="materials-materials materials5">
          <a class="materials-link">А.И. Иванов, "Инновационные подходы к управлению персоналом"</a>
          <a class="materials-link">Е.П. Сидорова, "Роль технологий в образовании будущего"</a>
          <a class="materials-link">М.С. Петров, "Цифровая трансформация: вызовы и возможности"</a>
        </div>
      </div>
    </div>
    <script>
        function centerSlide(swiper, index) {
          swiper.slideTo(index, 500, false);
        }
        document.addEventListener('DOMContentLoaded', () => {
                  const swiper = new Swiper('.swiper', {
            direction: 'horizontal',
            centeredSlides: true,
            slidesPerView: 3,
            spaceBetween: 16,
          });
          document.querySelectorAll('.nav-item2').forEach(item => {
            item.addEventListener('click', function() {
              // Удаление активного класса со всех элементов навигации
              document.querySelectorAll('.nav-item2').forEach(nav => nav.classList.remove('active'));
              // Добавление активного класса к текущему элементу навигации
              this.classList.add('active');
              
              // Скрытие всех блоков materials
              document.querySelectorAll('.materials-materials').forEach(material => material.classList.remove('active'));
              
              // Отображение соответствующего блока materials
              const targetClass = this.getAttribute('data-target');
              document.querySelector(`.${targetClass}`).classList.add('active');
              
              // Удаление активного класса со всех слайдов
              document.querySelectorAll('.swiper-slide').forEach(slide => slide.classList.remove('active'));
              // Добавление активного класса к соответствующему слайду
              document.querySelector(`.swiper-slide[data-target="${targetClass}"]`).classList.add('active');
            });
          });

          // Обработчики событий для слайдов
          document.querySelectorAll('.swiper-slide').forEach((slide,index) => {
            slide.addEventListener('click', function() {
              document.querySelectorAll('.swiper-slide').forEach(s => s.classList.remove('active'));
              this.classList.add('active');
              document.querySelectorAll('.materials-materials').forEach(material => material.classList.remove('active'));
              const targetClass = this.getAttribute('data-target');
              document.querySelector(`.${targetClass}`).classList.add('active');
              document.querySelectorAll('.nav-item').forEach(nav => nav.classList.remove('active'));
              centerSlide(swiper, index);
            });
          });
        });
    </script>
    <?php require_once '../components/footer.php'?>
  </body>
</html>
