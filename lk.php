<?php
  require "db.php"; //использую RedBeanphp

  $data = $_POST;

if( isset($data['do_login']))
{
    $errors = array();
    $user = R::findOne('users', 'login = ?', array($data['login']));
    if ($user)
    {
      if( password_verify($data['password'], $user->password))
      {
        $_SESSION['logged_user'] = $user;
        header("Location: http://localhost/lk2.php");
      }
      else
      {
        $errors[] = 'Пароль не верный!';
      }
    }
    else
    {
      $errors[] = 'Пользователья не существует!';
    }
    if( ! empty($errors))
      {
        echo '<div  style="color: red;">Неправильно введены данные!</div><hr>';
      }
}
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сайт</title>
    <link rel="stylesheet" href="css/bibl.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700"  rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header id="header" class="header">
     <div class="container">
          <div class="nav">
              <a href="./glav.html">
                <img src="img/Group 217.svg" alt="VlzCinema" width="80" height="80" href="#" class="logo2">
              </a>

              <ul class="verh">
                  <li>
                     <a href="film.html" >
                      Фильмы
                     </a>
                  </li>
                   <li>
                      <a href="jur.html" >
                      Журнал
                     </a>
                  </li>
                  <li>
                     <a href="klient.html" >
                     Клиенты
                     </a>
                  </li>
                  <li>
                     <a href="bibl.html" >
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
      <div class="align">
		<div class="card">
			<div class="head">
				<div></div>
				<a id="login" class="selected" href="#login">Личный кабинет</a>
				<div></div>
			</div>
			<div class="tabs">


   <form actions="/lk.php" method="POST">
       <div class="inputs">
          <div class="input">
              <input name="login" placeholder="Логин" type="text">
              <img src="img/user.svg">
            </div>
          <div class="input">
            <input name="password" placeholder="Пароль" type="password">
            <img src="img/pass.svg">
          </div>
        </div>
        <button type="submit" name="do_login">Войти</button>
   </form>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/index.js"></script>
    </header>

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
