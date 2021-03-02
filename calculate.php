<?php
  require "db.php"; //использую RedBeanphp

  $data = $_POST;
  if(isset($data['do_signup']))
  {
    $errors=array();
    if(trim($data['login']) == '')
    {
      $errors[]= 'Введите логин!';
    }
    if(trim($data['email']) == '')
    {
      $errors[]= 'Введите Email!';
    }
    if($data['password'] == '')
    {
      $errors[]= 'Введите пароль!';
    }
    if(R::count('users', "login = ? OR email = ?", array($data['login'], $data['email'])) > 0)
    {
      $errors[]= 'Пользователь с такими данными существует!';
    }

    if(empty($errors))
    {
      //vse okey
      $user = R::dispense('users');
      $user->login = $data['login'];
      $user->email = $data['email'];
      $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
      R::store($user);
      echo '<div style="color: white;">Вы зарегистрированны!</div><hr>';
    }
    else
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


             <li>
                 <a href="lk.php" >
                 Личный кабинет
                 </a>
             </li>
             <li>
                 <a href="signup.php">
                  Регистрация
                 </a>
             </li>
            </ul>
           </div>
      </div>
			<body>
				<form action='' method='post' class="calculate-form">
					<input type="text" name="number1" class="numbers" placeholder="Первое число">
					<select class="operations" name="operation">
						<option value='plus'>+</option>
						<option value='minus'>-</option>
						<option value="multiply">*</option>
						<option value="divide">/</option>
					</select>
					<input type="text" name="number2" class="numbers" placeholder="Второе число">

					<input class="submit_form" type="submit" name="submit" value="Получить ответ">
				</form>
			</body>
			</html>

			<?php
			if(isset($_POST['submit'])){
				$number1 = $_POST['number1'];
				$number2 = $_POST['number2'];
				$operation = $_POST['operation'];

				// Валидация
				if(!$operation || (!$number1 && $number1 != '0') || (!$number2 && $number2 != '0')) {
					$error_result = 'Не все поля заполнены';

				}
			    else {

					if(!is_numeric($number1) || !is_numeric($number2)){
						$error_result = "Операнды должны быть числами";
					}
					else
			        switch($operation){
						case 'plus':
						    $result = $number1 + $number2;
						    break;
						case 'minus':
						    $result = $number1 - $number2;
						    break;
						case 'multiply':
						    $result = $number1 * $number2;
						    break;
						case 'divide':
						    if( $number2 == '0')
						    	$error_result = "На ноль делить нельзя!";
						    else
						       $result = $number1 / $number2;
						    break;
					}

				}
			    if(isset($error_result)){
			    	echo "<div class='error-text'>Ошибка: $error_result</div>";
			    }
			    else {
				    echo "<div class='answer-text'>Ответ: $result</div>";
			    }
			}
			?>


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
