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
    <title>Diplom</title>
</head>
<body class="body-theme">
  <div class="personal_page">
    
    			<!-- Header Start-->
    <?php require_once("header.php") ?>
    			<!-- Header End-->
    
    <main class="main">
      
    <!-- Carousel Start -->
    <div class="container container_sections">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
          <section class="section_1">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./assets/images/2.jpg" class="d-block w-100" alt="1">
                  <div class="carousel-caption d-none d-md-block"></div>
                </div>  
                <div class="carousel-item">
                  <img src="./assets/images/1.jpg" class="d-block w-100" alt="2">
                  <div class="carousel-caption d-none d-md-block"></div>
                </div>
                <div class="carousel-item">
                  <img src="./assets/images/logo3.jpg" class="d-block w-100" alt="3">
                  <div class="carousel-caption d-none d-md-block"></div>
                </div>
              </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Предыдущий</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Следующий</span>
            </a>
          </section>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
          <section class="section_2">
            <div class="card text-light border-0 shadow p-1 rounded card-theme text-center m-2 style="max-width: 36rem;">
                <div class="card-body">
                  <h5 class="card-title">Новости</h5>
                  <p class="card-text">Текст новостей: Пример текста, который должен описывать актуальную тему для пользователей, информация о нововведениях, внесении изменений в нормативные документы.</p>
                </div>
              </div>
              <div class="form form_style">
                <form action="">
                  <div class="form-group">
                    <input type="text" class="form-control card-theme" placeholder="What's your name?">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control card-theme" placeholder="E-mail">
                  </div>
                  <div class="form-group">
                    <textarea rows="2" class="form-control card-theme" placeholder="Message"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="form-control btn mybtn" placeholder="Send">
                  </div>
                </form>
              </div>
          </section>
        </div>
      </div>
    </div>
      <!-- Carousel End -->
                                                                                         
       <!--Cards Start  -->
          <section class="section_3">
              <div class="card-deck mt-3">
               <div class="card text-light border-0 shadow p-1 rounded card-theme">
                 <div class="card-body">
                   <h5 class="card-title">ИНСТРУМЕНТЫ</h5>
                   <p class="card-text font-italic">HTML5, CSS3, JS, PHP</p>
                   <img class="card_img" src="./assets/images/instruments.jpg" alt="инструменты">
                   <a href="instruments.php" class="btn mybtn mt-1">Перейти -></a>
                 </div>
               </div>
               <div class="card text-light border-0 shadow p-1 rounded card-theme">
                  <div class="card-body">
                    <h5 class="card-title">ШАБЛОНЫ</h5>
                    <p class="card-text font-italic">Примеры готового кода</p>
                    <img class="card_img" src="./assets/images/samples.jpg" alt="Шаблоны">
                    <a href="templates.php" class="btn mybtn m-1">Перейти<span class="btn_img_icon">-></span></a>
                  </div>
                </div>
               <div class="card text-light border-0 shadow p-1 rounded card-theme">
                 <div class="card-body">
                   <h5 class="card-title">ПОЛЕЗНЫЕ ССЫЛКИ</h5>
                   <p class="card-text font-italic">Ссылки на ПО, Приложения</p>
                   <img class="card_img" src="./assets/images/links.jpg" alt="Ссылки на ПО">
                    <a href="useful_links.php" class="btn mybtn m-1">Перейти -></a>
                 </div>
               </div>
             </div>
           </section>
          </main>
      <!-- Cards End -->
										<!-- Footer Start -->
      <?php require_once("footer.php") ?>
      									<!-- Footer End -->
    </main>
      <!-- Second card End -->
    <!--<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>