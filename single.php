<?php include('path.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/d68a41201f.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&family=Expletus+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Poiret+One&display=swap" rel="stylesheet">
    <title>Статья</title>
</head>
<body>

<?php include("app/include/header.php"); ?>

<!-- Блок MAIN START-->
<div class="container">
  <div class="content row">
    <!-- Main content -->
    <div class="main-content col-md-9 col-12">
      <h2>Публикация Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident quibusdam voluptates nam quia soluta, inventore adipisci aliquid nesciunt eveniet perferendis quae laboriosam modi nisi dolore dolor, alias repudiandae culpa voluptate!</h2>

      <div class="single_post row">
        <div class="img col-12">
          <img src="assets/img/mpage.jpeg" alt="" class="img-thumbnail">
          <div class="info">
            <i class="far fa-user"> Имя Автора</i>
            <i class="far fa-calendar"> Март 24, 2023</i>
          </div>
        </div>
        <div class="single_post_text col-12">
          <h3>Заголовок третьего уровня</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. <a href="#">Temporibus</a>, in. Qui repellendus placeat quam tempore harum. Beatae enim neque fuga ratione facilis atque deserunt optio numquam sed, assumenda autem suscipit.</p>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus, in. Qui repellendus placeat quam tempore harum. Beatae enim neque fuga ratione facilis atque deserunt optio numquam sed, assumenda autem suscipit.</p>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus, in. Qui repellendus placeat quam tempore harum. Beatae enim neque fuga ratione facilis atque deserunt optio numquam sed, assumenda autem suscipit.</p>
        </div>
      </div>

    </div>
    <!-- sidebar Content -->
    <div class="sidebar col-md-3 col-12">

      <div class="section search">
        <h3>Поиск</h3>
        <form action="/" method="post">
          <input type="text" name="search-term" class="text-input" placeholder="Что ищете?">
        </form>
      </div>

      <div class="section topics">
        <h3>Категории</h3>
        <ul>
          <li><a href="#">Программирование</a></li>
          <li><a href="#">Дизайн</a></li>
          <li><a href="#">Визуализация</a></li>
          <li><a href="#">Кейсы</a></li>
          <li><a href="#">Мотивация</a></li>
        </ul>
      </div>

    </div>
  </div>
</div>
<!-- Блок MAIN END-->
<!-- Блок FOOTER START-->
<?php include("app/include/footer.php"); ?>
<!-- Блок FOOTER END-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>