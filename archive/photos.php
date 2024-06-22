<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Grid Layout</title>
    <link rel="stylesheet" href="../styles/photos.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        footer{
            margin-top:70px;
        }
        body{
            margin:0
        }
        .parent {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            grid-template-rows: repeat(3, 265px);
            grid-column-gap: 20px;
            grid-row-gap: 20px;
            max-width:1440px;
            margin:0 50px;
        }
        @media (max-width: 768px) {
            .parent {
                margin:0 24px;
            }
        }
        .img-wrp img{
            height:100%;
            width:100%;
            object-fit:cover;
            border-radius:8px;
            box-shadow: 0px 0px 4px black;
        }
        .div1 { grid-area: 1 / 1 / 3 / 3; }
        .div2 { grid-area: 3 / 1 / 4 / 5; }
        .div3 { grid-area: 1 / 3 / 2 / 5; }
        .div4 { grid-area: 2 / 3 / 3 / 5; }
        .div5 { grid-area: 1 / 5 / 3 / 7; }
        .div6 { grid-area: 3 / 5 / 4 / 7; }
        iframe {
            width: 500px;
            height: 300px;
        }
        @media (max-width: 1024px) {
            .parent {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: auto;
            }

            .div1, .div2, .div3, .div4, .div5, .div6 {
                grid-area: auto;
            }
        }
        @media (max-width: 480px) {
            .parent {
                grid-template-columns: repeat(1, 1fr);
            }
        }
        @media (max-width:768px){
            .page-head h1 {
                font-size: 36px;
            }   
        }
        @media (max-width:480px){
            .page-head h1 {
                font-size: 30px;
            }   
        }
        .watch-all{
            border:none;
            padding:12px 24px;
            color:white;
            background-color: var(--main-color1);
            font-size:16px;
            font-family:InterM;
            border-radius:8px;
            transition: background-color 0.3s ease;
            cursor:pointer;
        }
        .watch-all:hover{
            background-color: var(--main-color2);
        }
        h2{
            font-size:36px;
            font-family:InterM;
            color:var(--main-color1);
        }
        .grid123 {
            display: flex;
            gap: 20px;
            max-width:1440px;
            flex-wrap:wrap;
            justify-content:center;
            margin:0 24px;
        }
        @media (max-width: 570px) {
            iframe {
                width:100%;
            }
        }
        .swiper-container {
            width: 100%;
            height: 100%;
            display: none; /* Initially hide the swiper */
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            background-color: rgba(0, 0, 0, 0.8);
        }
        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        .swiper-button-next,
        .swiper-button-prev {
            color: #fff;
        }

    </style>
</head>
<body>
    <?php require_once '../components/header.php'?>
    <div class="container">
      <div class=page-head class="z-index:1;">
        <h1>Фотографии и видео с конференции</h1>
        <?php include '../components/breadcrumbs.php'; ?>
        <?php echo get_breadcrumb(); ?>
        <div class="parent" class="z-index:1;">
            <div class="img-wrp div1"><img src="../images/news/6.jpg" onclick="openGallery(0)"></div>
            <div class="img-wrp div2"><img src="../images/news/3.jpg" onclick="openGallery(1)"></div>
            <div class="img-wrp div3"><img src="../images/news/1.jpg" onclick="openGallery(2)"></div>
            <div class="img-wrp div4"><img src="../images/news/2.jpg" onclick="openGallery(3)"></div>
            <div class="img-wrp div5"><img src="../images/news/4.jpg" onclick="openGallery(4)"></div>
            <div class="img-wrp div6"><img src="../images/news/5.jpg" onclick="openGallery(5)"></div>
        </div>
        <button class="watch-all" onclick="openGallery(0)">Посмотреть все фото</button>
        <h2>Видеозаписи конференции</h2>
        <div class="grid123">
            <iframe src="https://www.youtube.com/embed/adWZtEwQgDY?si=wvJ0p47QHBawNtC5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe src="https://www.youtube.com/embed/adWZtEwQgDY?si=wvJ0p47QHBawNtC5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe src="https://www.youtube.com/embed/adWZtEwQgDY?si=wvJ0p47QHBawNtC5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
         </div>
        <button class="watch-all"><a href="https://www.youtube.com/@belpresscenter">Посмотреть все видео</a></button>    
    </div>
    <?php require_once '../components/footer.php'?>
    
    <!-- Swiper -->
    <div class="swiper-container" id="swiper-container">
    <button class="swiper-close" id="swiper-close">&times;</button>
    <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="../images/news/6.jpg"></div>
        <div class="swiper-slide"><img src="../images/news/3.jpg"></div>
        <div class="swiper-slide"><img src="../images/news/1.jpg"></div>
        <div class="swiper-slide"><img src="../images/news/2.jpg"></div>
        <div class="swiper-slide"><img src="../images/news/4.jpg"></div>
        <div class="swiper-slide"><img src="../images/news/5.jpg"></div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
    function openGallery(startIndex) {
        const swiperContainer = document.getElementById('swiper-container');
        swiperContainer.style.display = 'block';
        const swiper = new Swiper('.swiper-container', {
            initialSlide: startIndex,
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            on: {
                init: function () {
                    document.body.style.overflow = 'hidden';
                },
                slideChange: function () {
                    document.body.style.overflow = 'hidden';
                },
                destroy: function () {
                    document.body.style.overflow = '';
                }
            }
        });

        // Add event listener to close button
        document.getElementById('swiper-close').addEventListener('click', function() {
            swiperContainer.style.display = 'none';
            document.body.style.overflow = '';
            swiper.destroy();
        });

        // Add event listener to swiper container to close on click outside
        swiperContainer.addEventListener('click', function(event) {
            if (event.target === swiperContainer) {
                swiperContainer.style.display = 'none';
                document.body.style.overflow = '';
                swiper.destroy();
            }
        });
    }
</script>

</body>
</html>
