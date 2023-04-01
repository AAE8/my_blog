<?php 
      include 'path.php';
      include 'app/database/db.php'; 
?>

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
    <title>Мой блог</title>
</head>
<body>
<!-- Блок FOOTER START-->
<?php include("app/include/header.php"); ?>
<!-- Блок FOOTER END-->
    <!-- Блок карусели START-->
    <div class="container">
    <div class="row">
      <h2 class="slider-title">Топ публикации</h2>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <!-- <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div> -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/front.png" class="d-block w-100" alt="...">
            <div class="carousel-caption-hack carousel-caption d-none d-md-block">
              <h5><a href="">First slide label</a></h5>
              <!-- <p>Some representative placeholder content for the first slide.</p> -->
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/PHP.png" class="d-block w-100" alt="...">
            <div class="carousel-caption-hack carousel-caption d-none d-md-block">
              <h5><a href="">Second slide label</a></h5>
              <!-- <p>Some representative placeholder content for the second slide.</p> -->
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/projects.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption-hack carousel-caption d-none d-md-block">
              <h5><a href="">Third slide label</a></h5>
              <!-- <p>Some representative placeholder content for the third slide.</p> -->
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
<!-- Блок карусели END-->

<!-- Блок MAIN START-->
<div class="container">
  <div class="content row">
    <!-- Main content -->
    <div class="main-content col-md-9 col-12">
      <h2>Последние публикации</h2>
      <div class="post row">
        <div class="img col-12 col-md-4">
          <img src="assets/img/mpage.jpeg" alt="" class="img-thumbnail">
        </div>
        <div class="post_text col-12 col-md-8">
          <h3>
            <a href="#">Прикольная статья на тему динамического сайта</a>
          </h3>
          <i class="far fa-user"> Имя Автора</i>
          <i class="far fa-calendar"> Март 24, 2023</i>
          <p class="preview-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed repudiandae temporibus sequi ducimus animi ab assumenda molestiae nisi, odit cupiditate repellendus recusandae, beatae quis omnis ut labore quos qui quas!
          </p>
        </div>
      </div>
      <div class="post row">
        <div class="img col-12 col-md-4">
          <img src="assets/img/mpage.jpeg" alt="" class="img-thumbnail">
        </div>
        <div class="post_text col-12 col-md-8">
          <h3>
            <a href="#">Прикольная статья на тему динамического сайта</a>
          </h3>
          <i class="far fa-user"> Имя Автора</i>
          <i class="far fa-calendar"> Март 24, 2023</i>
          <p class="preview-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed repudiandae temporibus sequi ducimus animi ab assumenda molestiae nisi, odit cupiditate repellendus recusandae, beatae quis omnis ut labore quos qui quas!
          </p>
        </div>
      </div>
      <div class="post row">
        <div class="img col-12 col-md-4">
          <img src="assets/img/mpage.jpeg" alt="" class="img-thumbnail">
        </div>
        <div class="post_text col-12 col-md-8">
          <h3>
            <a href="#">Прикольная статья на тему динамического сайта</a>
          </h3>
          <i class="far fa-user"> Имя Автора</i>
          <i class="far fa-calendar"> Март 24, 2023</i>
          <p class="preview-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed repudiandae temporibus sequi ducimus animi ab assumenda molestiae nisi, odit cupiditate repellendus recusandae, beatae quis omnis ut labore quos qui quas!
          </p>
        </div>
      </div>
      <div class="post row">
        <div class="img col-12 col-md-4">
          <img src="assets/img/mpage.jpeg" alt="" class="img-thumbnail">
        </div>
        <div class="post_text col-12 col-md-8">
          <h3>
            <a href="#">Прикольная статья на тему динамического сайта</a>
          </h3>
          <i class="far fa-user"> Имя Автора</i>
          <i class="far fa-calendar"> Март 24, 2023</i>
          <p class="preview-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed repudiandae temporibus sequi ducimus animi ab assumenda molestiae nisi, odit cupiditate repellendus recusandae, beatae quis omnis ut labore quos qui quas!
          </p>
        </div>
      </div>
      <div class="post row">
        <div class="img col-12 col-md-4">
          <img src="assets/img/mpage.jpeg" alt="" class="img-thumbnail">
        </div>
        <div class="post_text col-12 col-md-8">
          <h3>
            <a href="#">Прикольная статья на тему динамического сайта</a>
          </h3>
          <i class="far fa-user"> Имя Автора</i>
          <i class="far fa-calendar"> Март 24, 2023</i>
          <p class="preview-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed repudiandae temporibus sequi ducimus animi ab assumenda molestiae nisi, odit cupiditate repellendus recusandae, beatae quis omnis ut labore quos qui quas!
          </p>
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