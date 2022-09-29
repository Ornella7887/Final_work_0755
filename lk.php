<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/dbc5c9fc7d.js" crossorigin="anonymous"></script>
  	<link rel="stylesheet" href="./assets/styles/style.css">
    <title>Personal page</title>
</head>
<body class="body-theme">
    <div class="personal_page">
      <!-- Header Start-->
    <?php require_once("header.php") ?>
      <!-- Header End-->
      <!-- Main part Start-->
      <!-- Section_1 Start-->
      <main style="background-image: url(./assets/images/fon_for_lk.png); background-size: cover;">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <h1>Личный кабинет</h1>
              <h4>Имя:
                <span><?= $_SESSION["name"]; ?></span>
              </h4>
              <h4>Фамилия:
                <span><?php echo $_SESSION["lastname"]; ?></span>
              </h4>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 img_style">
            <p><img class="img_profile_photo" src="./assets/images/my_picture.jpg"></p>
          </div>
        </div>
      </div>
      <!-- Section_1 End-->

      <!-- Section_2 Start-->
      <div class="container pt-3">  
        <div class="row">
          <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <h3>Мои проекты</h3>
              <p><a class="project_link" href="#">Проект № 1 (Тема)</a></p>
              <p><a class="project_link" href="#">Проект № 2 (Тема)</a></p>
              <p><a class="project_link" href="#">Проект № 3 (Тема)</a></p>
              <p><a class="project_link" href="#">Проект № 4 (Тема)</a></p>
              <p><a class="project_link" href="#">Проект № 5 (Тема)</a></p>
          </div>
          <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 text-center" container_frame">
              <!-- <p><b>Помощник в планировании задач</b></p> -->
            <h3 class="text-center">Календарь</h3>
              <p><iframe frameborder="1" width="350px" height="250px" class="frameborder_style" src="https://tweek.so/ru"></iframe></p>
          </div>
        </div>
      </div>
      <!-- Section_2 End-->

      <!-- Section_2 Start-->
      <div class="container pt-3">
      <div class="row">
        <div class="col-sm-4">
          <div class="card rounded border-info border-0 text-center">
            <div class="card-body shadow-lg p-1 rounded card-theme">
              <h5 class="card-title">Что почитать?</h5>
              <img class="card_img" src="./assets/images/instruments.jpg" alt="изображение">
              <a href="https://habr.com/ru/company/cloud4y/blog/665444/" class="btn mybtn m-1">Перейти -></a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card rounded border-info border-0 text-center">
            <div class="card-body shadow-lg p-1 rounded card-theme">
              <h5 class="card-title">Что посмотреть?</h5>
              <iframe width="270" height="178" src="https://www.youtube.com/embed/7NNtOXgNPBM?list=PL3LQJkGQtzc6Nwz67GGrMdqxim1c0H5DC" title="Курс по WordPress | Урок 1. Установка Wordpress | Академия вёрстки" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <a href="https://www.youtube.com/" class="btn mybtn m-1">Перейти -></a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card rounded border-info border-0 text-center">
            <div class="card-body shadow-lg p-1 rounded card-theme">
              <h5 class="card-title">Что послушать?</h5>
              <iframe width="270" height="178" src="https://www.youtube.com/embed/hFoKgX3IHY4" title="Музыка для учебы, работы, релаксации и концентрации |#4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <a href="https://www.youtube.com/" class="btn mybtn m-1">Перейти -></a>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Section_2 End-->
     <!-- Main part End-->
          <!-- Footer Start -->
      <?php require_once("footer.php") ?>
          <!-- Footer End -->
          <script>
				let response = await fetch("./assets/php/lk_obr.php", {
					method: 'POST',
					body: formData
			})
	</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>
