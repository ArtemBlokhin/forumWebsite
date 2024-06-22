<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Достопримечательности Нижнего Новгорода</title>
    <link rel="stylesheet" href="./styles/places.css"/>
</head>
<body>
    <?php require_once './components/header.php'?>
    <div class="container">
        <div class="page-head">
            <h1>Достопримечательности Нижнего Новгорода</h1>
            <?php include './components/breadcrumbs.php'; ?>
            <?php echo get_breadcrumb(); ?>
        </div>
            <div class="section-wrapper">
                <div class="section">
                    <img src="./images/places/кремль.png" alt="Нижний Новгород">
                    <div>
                        <h2>Нижегородский кремль</h2>
                        <p>Нижегородский кремль — это историческая крепость в центре Нижнего Новгорода, построенная в начале XVI века. Он включает в себя 13 башен и стены общей протяженностью около двух километров. Кремль является архитектурным памятником и важным культурным центром, где расположены музеи, выставочные залы и административные здания. Это знаковое место привлекает множество туристов благодаря своей богатой истории и живописным видам на Волгу.</p>
                    </div>
                </div>            
            </div>
            <div class="section-wrapper bg">
                <div class="section second-section">
                    <div>
                        <h2>Чкаловская лестница</h2>
                        <p>Чкаловская лестница — монументальная лестница в историческом центре Нижнего Новгорода, соединяющая Верхне-Волжскую и Нижне-Волжскую набережные. Построена по проекту архитекторов Александра Яковлева, Льва Руднева и Владимира Мунца. Являлась самой длинной лестницей в России до аннексии Крыма</p>
                    </div>
                    <img src="./images/places/чкаловская.jpg" alt="Нижний Новгород">
                </div>            
            </div>
            <div class="section-wrapper">
                <div class="section">
                    <img src="./images/places/покра.jpg" alt="Нижний Новгород">
                    <div>
                        <h2>Улица Большая Покровская</h2>
                        <p>Большая Покровская улица — главная улица Нижнего Новгорода. Расположена в историческом центре города. Связывает 4 площади: Минина и Пожарского, Театральную, Горького и Лядова. Одна из самых старинных улиц. До 1917 года считалась дворянской. Оформилась как главная улица города к концу XVIII века.</p>
                    </div>
                </div>        
            </div>
            <div class="more-places-wrapper bg">
            <div class="more-places-text ">
                <h2>Еще больше интересных мест</h2>
                <p>Здесь собраны еще больше интересных мест Нижнего Новгорода. Здесь собраны достопримечательности, отели и рестораны. Мы надеемся, что эти рекомендации помогут вам максимально эффективно провести время вне мероприятия. Наслаждайтесь предложениями города, насладитесь незабываемыми гастрономическими впечатлениями и оставьте незабываемые воспоминания во время вашего пребывания.</p>
            </div>
            <div class="more-places">
                <nav class="more-places-nav">
                    <a href="#" class="link" data-target="places">Знаковые места</a>
                    <a href="#" class="link" data-target="hotels">Отели</a>
                    <a href="#" class="link" data-target="restaurants">Рестораны</a>
                </nav>
                <div class="places-cards" id="places">
                    <div class="place-cards">
                        <img src="./images/places/places2/нижне-волжская.jpg">
                        <p>Нижне-Волжская набережная</p>
                    </div>
                    <div class="place-cards">
                        <img src="./images/places/places2/рожд.jpg">
                        <p>Улица Рождественская</p>
                    </div>
                    <div class="place-cards">
                        <img src="./images/places/places2/печер.jpg">
                        <p>Печерский Вознесенский монастырь</p>
                    </div>
                    <div class="place-cards">
                        <img src="./images/places/places2/гос банк.jpg">
                        <p>Государственный банк</p>
                    </div>
                    <div class="place-cards">
                        <img src="./images/places/places2/наб фед.jpg">
                        <p>Набережная Федоровского</p>
                    </div>
                    <div class="place-cards">
                        <img src="./images/places/places2/храм.jpg">
                        <p>Кафедральный собор во имя святого благоверного князя Александра Невского</p>
                    </div>
                </div>
                <div class="places-cards no-cards" id="hotels">
                    <div class="place-cards">
                        <img src="./images/places/hotels/hamp.jpg">
                        <p>Отель Hampton</p>
                    </div>
                    <div class="place-cards">
                        <img src="./images/places/hotels/azim.jpg">
                        <p>AZIMUT Отель</p>
                    </div>
                    <div class="place-cards">
                        <img src="./images/places/hotels/grand.jpeg">
                        <p>Гранд Отель Ока Бизнес</p>
                    </div>
                    <div class="place-cards">
                        <img src="./images/places/hotels/ibiz.jpg">
                        <p>Отель Ибис</p>
                    </div>
                </div>
                <div class="places-cards no-cards" id="restaurants">
                    <div class="place-cards">
                        <img src="./images/places/rests/джани.jpg">
                        <p>Ресторан "Джани"</p>
                    </div>
                    <div class="place-cards">
                        <img src="./images/places/rests/Пельменная.jpg">
                        <p>Пельменная "Лепи тесто"</p>
                    </div>
                    <div class="place-cards">
                        <img src="./images/places/rests/le grill.jpg">
                        <p>Le grill</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php require_once './components/footer.php'?>
    <script>
        document.querySelectorAll('.more-places-nav a').forEach(navLink => {
            navLink.addEventListener('click', function(event) {
                event.preventDefault();

                // Hide all sections
                document.querySelectorAll('.places-cards').forEach(section => {
                    section.classList.add('no-cards');
                });

                // Remove active class from all links
                document.querySelectorAll('.more-places-nav a').forEach(link => {
                    link.classList.remove('active');
                });

                // Show the targeted section
                const targetId = this.getAttribute('data-target');
                document.getElementById(targetId).classList.remove('no-cards');
                document.getElementById(targetId).classList.add('places-cards');
                console.log("Для " + targetId + "добавлен класс");

                // Add active class to the clicked link
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>