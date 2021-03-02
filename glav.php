<?php
    require "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сайт</title>
    <link rel="stylesheet" href="css/bibl.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/main.css">
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
        <div class="center">
          <img src="img/Untitled15.svg" width="600" height="600" alt="Logo" class="logo">
          <ul class="ul">
             <li>Фильмотека от ПМИ </li>
              <li class="li1">Первая фильмотека,созданная супер классной группой
                  <br>Волгоградского Государственного Университета
              </li>
          </ul>
       </div>
       <div class="f1">
            <div class="arrow arrow-bottom"  ></div>
     </div>
      <div class="f2"></div>
      <div class="f3"></div>
      <div class="f4"></div>
      <div class="f5"></div>
      <div class="polka-wrap">
          <a href="film.php">
          <div class="polka">
              <p class="shrift">
                  Фильмы
              </p>
              <img src="img/kisspng-film-festival-world-cinema-box-office-movie-5abbd41d0cd571.3464808315222589730526.png" width="180px" height="180px" class="ipg" alt="">
          </div>
          </a>
          <a href="jur.php">
          <div class="polka">
              <p class="shrift">
                  Журнал
              </p>
              <img src="img/Izobrazhenie_PNG.png" width="180" height="180" class="ipg" alt="">
          </div>
          </a>
          <a href="klient.php">
          <div class="polka polka1">
              <p class="shrift">
                  Клиенты
              </p>
              <img src="img/pngwing.com.png" width="180" height="180" class="ipg" alt="cartinka">
          </div>
          </a>
          <a href="bibl.php">
          <div class="polka polka1">
              <p class="shrift1">
                  Библиотекари
              </p>
              <img src="img/kisspng-computer-icons-library-biblioteca-5b375eac0bd318.6056342515303553720484.png" width="180" height="180" class="ipg" alt="">
          </div>
          </a>
      </div>

      <div class="p1">

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
