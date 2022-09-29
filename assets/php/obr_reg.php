<?PHP 
header('Content-Type: text/html; charset=utf-8');

$mysqli = mysqli_connect("localhost", "gngtqies_base", "base", "gngtqies_base"); //Подключаюсь к БД
if ($mysqli == false){
print("error");

 } else{																						//Если подключение произошло, привязываю значения из формы к переменным БД
$name = $_POST["name"];
$lastname = $_POST["lastname"];
$email = trim(mb_strtolower($_POST["email"]));
$pass = trim($_POST["pass"]);
$pass = password_hash($pass, PASSWORD_DEFAULT);

$result = $mysqli->query("SELECT * FROM `Registration` WHERE `email` = '$email'");		//Проверяю есть ли в БД запись с email, которую ввели в форму на сайте (чтобы не плодить дубликаты пользователей)

if($result->num_rows !== 0){						//если количество таких email в БД отлично от нуля (т.е. пользователь уже зарегистрирован)
	print("exist");
} else {
		$mysqli->query("INSERT INTO `Registration`(`name`, `lastname`, `email`, `pass`) VALUES ('$name', '$lastname', '$email', '$pass')");	//Иначе (такого пользователя еще нет) ввожу данные из формы в БД
		print("ok");
}
}
?>