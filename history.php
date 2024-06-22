<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./styles/schedule.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <?php require_once './components/header.php'?>
    <div class="container">
      <div class=page-head>
        <h1>История форума</h1>
        <?php include './components/breadcrumbs.php'; ?>
        <?php echo get_breadcrumb(); ?>
      </div>
  </div>
    <?php require_once './components/footer.php'?>
  </body>
</html>
