<?php
    require "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сайт</title>
    <link rel="stylesheet" href="css/jur.css">
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
    <section id="sered" class="sered jur">
        <div class="fon">
        <table class="table">
            <thead class="t">
            <tr>
                <th class="table__th">#</th>
                <th class="table__th">Клиент</th>
                <th class="table__th">Фильмы</th>
                <th class="table__th">Дата взятия</th>
                <th class="table__th">Дата сдачи</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="table__td">1</td>
                <td class="table__td">Никита Родионов</td>
                <td class="table__td">Брах</td>
                <td class="table__td">10.03.2020</td>
                <td class="table__td">10.04.2020</td>
            </tr>
            <tr>
                <td class="table__td">2</td>
                <td class="table__td">Омельченко Олеся</td>
                <td class="table__td">Сплит</td>
                <td class="table__td">17.03.2020</td>
                <td class="table__td">17.04.2020</td>
            </tr>
            <tr>
                <td class="table__td">3</td>
                <td class="table__td">Ахмед Кызылов</td>
                <td class="table__td">Оченьстранные дела</td>
                <td class="table__td">18.03.2020</td>
                <td class="table__td">17.04.2020</td>
            </tr>
            <tr>
                <td class="table__td">4</td>
                <td class="table__td">Сергей Мамонтов</td>
                <td class="table__td">Мы</td>
                <td class="table__td">21.03.2020</td>
                <td class="table__td">21.04.2020</td>
            </tr>
            <tr>
                <td class="table__td">5</td>
                <td class="table__td">Максим Мостовой</td>
                <td class="table__td">Сумерки</td>
                <td class="table__td">25.03.2020</td>
                <td class="table__td">25.04.2020</td>
            </tr>
            </tbody>
        </table>
      </div>
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
