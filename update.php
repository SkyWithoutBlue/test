<?php
  require('./db.php');
   
  $id = $_POST['id'];
  $title = $_POST['title'];
  $category = $_POST['category'];
  $date = $_POST['date'];
  $description = $_POST['description'];

  if(!empty($_FILES['img'])){
    $file = $_FILES['img'];
    $img = $file['name'];
    $pathFile = __DIR__.'/assets/images/'.$img;

    if(!move_uploaded_file($file['tmp_name'], $pathFile)){
      echo 'Файл не смог загрузиться';
    }
  }
  
  

  $connection->query("UPDATE `works` SET `title` = '$title', `category`='$category', `date`='$date', `description`='$description', `card_image`='$img' WHERE `works`.`id` = '$id' ");
  
  
  header('Location: /admin.php');
?>