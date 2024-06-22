<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./styles/news.css" />
  </head>
  <style>
    .top-news-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-template-rows: repeat(2, 300px);
      grid-column-gap: 25px;
      grid-row-gap: 25px;
    }
    .div1 { grid-area: 1 / 1 / 3 / 3; }
    .div2 { grid-area: 1 / 3 / 2 / 4; }
    .div3 { grid-area: 1 / 4 / 2 / 5; }
    .div4 { grid-area: 2 / 3 / 3 / 5; }
    .div144{
      position: relative;
      box-sizing: border-box;
    }
    .div144 img{
      width: 100%;
      height: 100%;
      display: block;
      filter: brightness(60%);
      border-radius: 8px;
      object-fit:cover;
      cursor:pointer;
    }
    .container{
      margin-top:30px;
      width:100%;
      display:flex;
      flex-direction:column;
      align-items:center;
      margin-bottom:70px;
    }
  </style>
  <body>
    <?php require_once './components/header.php'?>
    <div class="page-head">
      <h1>Новости форума</h1>
      <?php include './components/breadcrumbs.php'; ?>
      <?php echo get_breadcrumb(); ?>
    </div>
    <div class="container">
      <div class="news-section">
        <div class="top-news-grid">
          <div class="div144 div1">
            <img src="./images/news/6.jpg">
            <div class="news-text">
                <div class="news-head-text">Открытие форума в Москве</div>
                <div class="news-sup-text">24 Августа, 2024</div>
            </div>
          </div>
          <div class="div144 div2">
            <img src="./images/news/1.jpg">
            <div class="news-text">
                <div class="news-head-text">Открытие форума в Москве</div>
                <div class="news-sup-text">24 Августа, 2024</div>
            </div>
          </div>
          <div class="div144 div3">
            <img src="./images/news/2.jpg">
            <div class="news-text">
                <div class="news-head-text">Открытие форума в Москве</div>
                <div class="news-sup-text">24 Августа, 2024</div>
            </div>
          </div>
          <div class="div144 div4">
            <img src="./images/news/3.jpg">
            <div class="news-text">
                <div class="news-head-text">Открытие форума в Москве</div>
                <div class="news-sup-text">24 Августа, 2024</div>
            </div>
          </div>
        </div>
        <h2>Все новости</h2>
        <div class="all-news-grid">
          <div class="news-item">
            <img src="./images/back.jpg" class="news-image" alt="Открытие форума в Москве" />
            <div class="news-text">
                <div class="news-head-text">Открытие форума в Москве</div>
                <div class="news-sup-text">24 Августа, 2024</div>
            </div>

          </div>
          <div class="news-item">
            <img src="./images/back.jpg" class="news-image" alt="Открытие форума в Москве" />
            <div class="news-text">
                <div class="news-head-text">Открытие форума в Москве</div>
                <div class="news-sup-text">24 Августа, 2024</div>
            </div>
          </div>
          <div class="news-item">
            <img src="./images/back.jpg" class="news-image" alt="Открытие форума в Москве" />
            <div class="news-text">
                <div class="news-head-text">Открытие форума в Москве</div>
                <div class="news-sup-text">24 Августа, 2024</div>
            </div>
          </div>
          <div class="news-item">
            <img src="./images/back.jpg" class="news-image" alt="Открытие форума в Москве" />
            <div class="news-text">
                <div class="news-head-text">Открытие форума в Москве</div>
                <div class="news-sup-text">24 Августа, 2024</div>
            </div>
          </div>
        </div>
      </div>
  </div>

    <?php require_once './components/footer.php'?>
  </body>
</html>