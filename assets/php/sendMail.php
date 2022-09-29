<?php
$userName = $_POST["user-name"];
$email = $_POST["email"];
$message = $_POST["message"];
echo "Ваше сообщение получено! Благодарим за обратную связь!";
mail('nastasyall@rambler.ru', 'Вопрос пользователя', "$message");
?>