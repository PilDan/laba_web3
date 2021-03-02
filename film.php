<?php
    require "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сайт</title>
    <link rel="stylesheet" href="css/film.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    <header id="header" class="header">
     <div class="container">
          <div class="nav">
          <a href="./glav.php">
                <img src="img/Group 217.svg" alt="VlzCinema" width="80" height="80" href="#" class="logo2">
              </a>

              <ul class="verh">
                  <li>
                     <a href="film.php" >
                      Фильмы
                     </a>
                  </li>
                   <li>
                      <a href="jur.php" >
                      Журнал
                     </a>
                  </li>
                  <li>
                     <a href="klient.php" >
                     Клиенты
                     </a>
                  </li>
                  <li>
                     <a href="bibl.php" >
                     Библиотекари
                     </a>
                  </li>
                  <li>
                     <a href="calculate.php" >
                     Калькулятор
                     </a>
                  </li>
                  <?php
                      if( isset($_SESSION['logged_user'])) :
                    ?>
                        <a href="/lk2.php">
                        Привет, <?php echo $_SESSION['logged_user']->login; ?>!
                        </a>
                    </li>
                    <li>
                    <a href="/logout.php">Выход</a>
                    </li>
                    <?php
                    else :
                    ?>
                        <li>
                        <a href="lk.php">
                        Личный кабинет
                        </a>
                    </li>
                    <li>
                        <a href="signup.php">
                         Регистрация
                        </a>
                    </li>
                    <?php
                    endif;
                    ?>
             </ul>
           </div>
      </div>
    </header>
    <section id="sered" class="sered">
        <p class="luch">Лучшее аниме за последнюю 1000лет</p>
      <div class="tut" >
         <div class="kino">
              <img src="img/film/UP.jpg" width="120 " class="img" alt="">
             <p class="text1">
              Унесённые призраками
             </p>
         </div>
         <div class="kino1">
             <img src="img/film/hz.jpg" width="120" class="img" alt="">
             <p class="text2">Ходячий замок</p>
         </div>
         <div class="kino1">
            <img src="img/film/kinopoisk.ru-Tonari-no-Totoro-3560428.jpg" width="130" class="img" alt="">
            <p class="text3">Мой сосед Тоторо</p>
         </div>
         <div class="kino1">
            <img src="img/film/kinopoisk.ru-Majo-no-takky_26_23251_3Bbin-738706.jpg" width="132" class="img" alt="">
            <p class="text4">Ведьмина служба доставки</p>
         </div>
      </div>
      <p class="vse">А больше вам знать и не нужно</p>
    </section>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
      </script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
      </script>

  </body>
  </html>
