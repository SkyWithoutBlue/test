<?php
require('./db.php');

// Включаем вывод ошибок для PDO
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_GET['id'];

// Используйте подготовленный запрос для безопасности
$stmt = $connection->prepare("DELETE FROM `works` WHERE `works`.`id` = :id");
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

// Добавляем вывод сообщения после выполнения запроса
echo "Проект с ID $id успешно удален.";

header('Location: /admin.php');
?>


