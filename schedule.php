<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./styles/schedule.css"/>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  </head>
  <style>
    a{
      color:white;
    }
    .schedule-schedule { display: none; }
    .swiper{
      width:100%;
      display:none;
    }
    .swiper-slide{
      cursor:pointer;
    }
    .slide-text{
      font-family:InterM;
      text-align:center;
    }
    .slide-day-text{
      font-size:14px;
    }
    .slide-sup-text{
      font-size:32px;
      font-family:InterM;
    }
    .slide-help-text{
      font-size:14px;
    }
    @media (max-width: 480px) {
      .nav-block{
        display:none;
      }
      .swiper{
        display:block;
      }
    }

    .section-title { color: var(--main-color1); font-family:InterM}
  </style>
  <body>
  <?php require_once './components/header.php'?>
    <div class="container">
    <div class="schedule-content">
      <div class="page-head">
          <h1>Программа форума</h1>
          <?php include './components/breadcrumbs.php'; ?>
          <?php echo get_breadcrumb(); ?>
      </div>
            <div class="schedule-text">
            Форум проводится в формате «online+offline».<br />
            НГТУ организует видеотрансляцию каждой секции, к которой смогут
            присоединиться как слушатели, так и спикеры.<br />
            Рекомендации для спикеров (и слушателей): /for-speaker.<br />
            </div>
            <div class="nav-block" class="z-index:1;">
              <nav class="nav">
                <div class="nav-item2 active-item" data-day="schedule-container1">День 1, 23.09</div>
                <div class="nav-item2" data-day="schedule-container2">День 2, 24.09</div>
                <div class="nav-item2" data-day="schedule-container3">День 3, 25.09</div>
                <div class="nav-item2" data-day="schedule-container4">День 4, 26.09</div>
                <div class="nav-item2" data-day="schedule-container5">День 5, 27.09</div>
              </nav>
              <div class="btn nav-btn">
                <a href="./files/schedule.xlsx" download="schedule.xlsx" class="download-button">Скачать</a>
              </div>
            </div>
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide active-item" data-day="schedule-container1">
            <div class="slide-text">
                <div class="slide-day-text">День 1</div>
                <div class="slide-sup-text">23</div>
                <div class="slide-help-text">Сентября 2024</div>
            </div>
          </div>
          <div class="swiper-slide" data-day="schedule-container2">
            <div class="slide-text">
                <div class="slide-day-text">День 2</div>
                <div class="slide-sup-text">24</div>
                <div class="slide-help-text">Сентября 2024</div>
            </div>
          </div>
          <div class="swiper-slide" data-day="schedule-container3">
            <div class="slide-text">
                <div class="slide-day-text">День 3</div>
                <div class="slide-sup-text">25</div>
                <div class="slide-help-text">Сентября 2024</div>
            </div>
          </div>
          <div class="swiper-slide" data-day="schedule-container4">
            <div class="slide-text">
                <div class="slide-day-text">День 4</div>
                <div class="slide-sup-text">26</div>
                <div class="slide-help-text">Сентября 2024</div>
            </div>
          </div>
          <div class="swiper-slide" data-day="schedule-container5">
            <div class="slide-text">
                <div class="slide-day-text">День 5</div>
                <div class="slide-sup-text">27</div>
                <div class="slide-help-text">Сентября 2024</div>
            </div>
          </div>
        </div>
      </div>
      <div id="schedule-container1" class="schedule-schedule"></div>
      <div id="schedule-container2" class="schedule-schedule"></div>
      <div id="schedule-container3" class="schedule-schedule"></div>
      <div id="schedule-container4" class="schedule-schedule"></div>
      <div id="schedule-container5" class="schedule-schedule"></div>
        </div>

    </div>
    <div class="btn-div">
      <button class="btn bottom-btn">Скачать</button>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>
    <script>
    function loadSchedule() {
        const url = './files/schedule.xlsx'; // Путь к вашему файлу

        fetch(url)
            .then(response => response.arrayBuffer())
            .then(data => {
                const workbook = XLSX.read(data, { type: 'array' });

                workbook.SheetNames.forEach((sheetName, index) => {
                    const worksheet = workbook.Sheets[sheetName];
                    const json = XLSX.utils.sheet_to_json(worksheet, { header: 1 });

                    const container = document.getElementById(`schedule-container${index + 1}`);
                    if (!container) {
                        console.error(`Container schedule-container${index + 1} not found`);
                        return;
                    }

                    container.innerHTML = '';  // Clear any existing content

                    console.log(`Creating table for schedule-container${index + 1}`); // Debug log

                    json.forEach((row, rowIndex) => {
                        // Skip empty rows
                        if (!row || row.length === 0) return;

                        const time = row[0];
                        let section1 = row[1] || '';
                        let section2 = row[2] || '';
                        let section3 = row[3] || '';

                        const scheduleRow = document.createElement('div');
                        scheduleRow.classList.add('schedule-row');
                        
                        const timeDiv = document.createElement('div');
                        timeDiv.classList.add('schedule-time');
                        timeDiv.textContent = time;
                        scheduleRow.appendChild(timeDiv);

                        const sectionsDiv = document.createElement('div');
                        sectionsDiv.classList.add('schedule-2nd-row');

                        if (section1) {
                            const section1Div = document.createElement('div');
                            section1Div.classList.add('schedule-section');
                            if (section1.includes('Секция')) {
                                section1 = section1.replace(/Секция\s*\d+/, '').trim();
                                section1Div.innerHTML = '<span class="section-title">Секция 1</span> <br>' + section1.replace(/\n/g, '<br />');
                            } else {
                                section1Div.innerHTML = section1.replace(/\n/g, '<br />');
                            }
                            sectionsDiv.appendChild(section1Div);
                        }

                        if (section2) {
                            const section2Div = document.createElement('div');
                            section2Div.classList.add('schedule-section');
                            if (section2.includes('Секция')) {
                                section2 = section2.replace(/Секция\s*\d+/, '').trim();
                                section2Div.innerHTML = '<span class="section-title">Секция 2</span> ' + section2.replace(/\n/g, '<br />');
                            } else {
                                section2Div.innerHTML = section2.replace(/\n/g, '<br />');
                            }
                            sectionsDiv.appendChild(section2Div);
                        }

                        if (section3) {
                            const section3Div = document.createElement('div');
                            section3Div.classList.add('schedule-section');
                            if (section3.includes('Секция')) {
                                section3 = section3.replace(/Секция\s*\d+/, '').trim();
                                section3Div.innerHTML = '<span class="section-title">Секция 3</span> ' + section3.replace(/\n/g, '<br />');
                            } else {
                                section3Div.innerHTML = section3.replace(/\n/g, '<br />');
                            }
                            sectionsDiv.appendChild(section3Div);
                        }

                        scheduleRow.appendChild(sectionsDiv);
                        container.appendChild(scheduleRow);
                    });
                });

                // Show the first day by default
                const firstDay = document.getElementById('schedule-container1');
                if (firstDay) {
                    firstDay.style.display = 'block';
                    console.log('Displayed schedule-container1'); // Debug log
                } else {
                    console.error('schedule-container1 not found');
                }
            })
            .catch(error => {
                console.error('Error loading schedule:', error);
            });
    }

    function showDay(day) {
        console.log(`Showing day: ${day}`);
        document.querySelectorAll('.schedule-schedule').forEach(schedule => {
            schedule.style.display = 'none';
        });
        const selectedDay = document.getElementById(day);
        if (selectedDay) {
            selectedDay.style.display = 'block';
            console.log(`Displayed ${day}`); // Debug log
        } else {
            console.error(`Day ${day} not found`);
        }
    }

    function centerSlide(swiper, index) {
        swiper.slideTo(index, 500, false); // 500 ms animation, no loop
    }

    document.addEventListener('DOMContentLoaded', () => {
        loadSchedule();

        const swiper = new Swiper('.swiper', {
            centeredSlides: true,
            spaceBetween: 16,
            slidesPerView: 3,
        });

        // Add event listeners to nav items
        document.querySelectorAll('.nav-item2').forEach(item => {
            item.addEventListener('click', () => {
                document.querySelectorAll('.nav-item2').forEach(nav => nav.classList.remove('active-item'));
                item.classList.add('active-item');
                const day = item.getAttribute('data-day');
                console.log(`Clicked on: ${day}`);
                showDay(day);
            });
        });

        // Add event listeners to swiper slides
        document.querySelectorAll('.swiper-slide').forEach((slide, index) => {
            slide.addEventListener('click', () => {
                document.querySelectorAll('.swiper-slide').forEach(swiper => swiper.classList.remove('active-item'));
                slide.classList.add('active-item');
                const day = slide.getAttribute('data-day');
                showDay(day);
                centerSlide(swiper, index); // Center the clicked slide
            });
        });
    });
</script>
    <?php require_once './components/footer.php'?>
  </body>
</html>
