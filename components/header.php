<?php require_once __DIR__ . '/../config.php'; ?>

<header class="header">
    <div class="header-logo">
        <img class="logo" src="<?php echo BASE_URL; ?>/images/лого.png" alt="Логотип" />
        <p class="logo-text">XII Форум вузов</p>
    </div>
    <div class="burger-menu" id="burger-menu">
        <div class="burger-bar"></div>
        <div class="burger-bar"></div>
        <div class="burger-bar"></div>
    </div>
    <nav class="header-nav" id="header-nav">
        <a class="nav-item" href="<?php echo BASE_URL; ?>/main.php">Главная</a>
        <a class="nav-item" href="<?php echo BASE_URL; ?>/schedule.php">Программа</a>
        <div class="dropdown">
            <button class="nav-item dropbtn">Архив</button>
            <div class="dropdown-content">
                <a href="<?php echo BASE_URL; ?>/archive/photos.php">Фото и видео</a>
                <a href="<?php echo BASE_URL; ?>/archive/materials.php">Материалы конференции</a>
            </div>
        </div>
        <a class="nav-item" href="<?php echo BASE_URL; ?>/news.php">Новости</a>
        <a class="header-nav-btn" href="<?php echo BASE_URL; ?>/registration.php">Регистрация</a>
    </nav>
</header>

<style>
button a {
    text-decoration: none;
    color: white;
}
/* Кнопка выпадающего списка */
.dropbtn {
    background: none;
    border: none;
}
/* Контейнер <div> - необходим для размещения выпадающего содержимого */
.dropdown {
    position: relative;
    display: inline-block;
    width: 100%;
}
/* Выпадающее содержимое (скрыто по умолчанию) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    width: 200px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
    border-radius: 8px;
}
/* Ссылки внутри выпадающего списка */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    font-size: 16px;
    font-family: InterM;
    display: block;
    border-radius: 8px;
}
/* Изменение цвета выпадающих ссылок при наведении курсора */
.dropdown-content a:hover {
    background-color: #ddd;
}
/* Показать выпадающее меню при наведении курсора */
.dropdown:hover .dropdown-content {
    display: block;
}
/* Стили для бургер-меню и мобильной навигации */
header {
    position: relative;
}
.burger-menu {
    display: none;
    cursor: pointer;
    flex-direction: column;
    gap: 4px;
    padding: 10px;
}
.burger-bar {
    width: 40px;
    height: 6px;
    background-color: var(--main-color1);
    border-radius: 2px;
}
.dropdown-content a:hover {
        color:var(--main-color1);
    }
@media (max-width: 768px) {
    .burger-menu {
        display: flex;
    }
    .header-nav {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        width: 70%; /* Установлена ширина блока */
        background-color: white;
        border-radius: 8px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        padding: 10px; /* Уменьшение высоты блока и добавление отступов */
    }
    .header-nav.active {
        display: flex;
    }
    .nav-item, .header-nav-btn {
        padding: 12px;
        text-align: center;
        width: 100%;
        box-sizing: border-box;
        color: #333; /* Цвет текста для ссылок */
        font-family: InterM, sans-serif;
    }
    .header-nav-btn {
        display: block;
        color: white; /* Цвет текста для кнопки */
        background-color: #007bff; /* Цвет фона кнопки */
        padding: 10px;
        border-radius: 5px;
        text-decoration: none;
        margin-top: 10px; /* Отступ сверху для кнопки регистрации */
    }
    .header-nav-btn:hover {
        background-color: #0056b3; /* Цвет фона кнопки при наведении */
    }
    .nav-item:hover {
        background-color: #f1f1f1; /* Фон при наведении на ссылку */
    }
    .dropdown-content{
        width:100%;
    }
    .dropdown-content a {
    font-size: 14px;
    display: block;
    text-align:center
    }
}
</style>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const burgerMenu = document.getElementById('burger-menu');
    const headerNav = document.getElementById('header-nav');

    burgerMenu.addEventListener('click', function () {
        headerNav.classList.toggle('active');
    });
});
</script>
