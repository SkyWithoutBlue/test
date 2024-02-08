<?php
  require('./db.php');

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
  
  

  $connection->query("INSERT INTO `works` (`title`, `category`, `date`, `description`, `card_image`) VALUES ('$title', '$category', '$date', '$description', '$img')");
  
  
  header('Location: /admin.php');
?>


