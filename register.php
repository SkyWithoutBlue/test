<?php
require_once('db.php');

$login = $_POST['login'];
$password = $_POST['password'];
$repeatpass = $_POST['repeatpass'];
$email = $_POST['email'];

if(empty($login) || empty($password) || empty($repeatpass) || empty($email)){
    echo "Заполните все поля!";
} else 
{
    if($password != $repeatpass){
        echo "Пароли не совпадают!";
    } else
    {
       if( $connection->query("INSERT INTO `users` (`login`, `password`, `email`) VALUES ('$login', '$password', '$email')") == TRUE){
        echo "Успешная регистрация!";
       } 
       else 
       {
        echo "Ошибка!";
       }

    }
}



