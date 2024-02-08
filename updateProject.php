<?php
require('./db.php');

// Проверка, передан ли параметр id через URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Выполняем запрос, чтобы получить данные по id
    $stmt = $connection->prepare("SELECT * FROM `works` WHERE `id` = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    
    // Проверка, есть ли данные
    if ($stmt->rowCount() > 0) {
        $works = $stmt->fetch(PDO::FETCH_ASSOC);
        // Теперь $works содержит данные по указанному id
     
    } else {
        echo "Работа с ID=$id не найдена.";
    }
} else {
    echo "Не передан параметр id в URL.";
}
?>


<style>
  .form__input, .form__textarea{
    min-width: 350px;
  }
  input[type='file'] {
  display: none;
}
</style>

<div class="wrapper" style="display: flex; flex-direction: column; height: 100%">
<?php
  include('./header.php')
?>

<form class="form" style="display: flex; flex-direction: column; flex: 1 1 auto; align-items: center;" action="./update.php" method="post" enctype="multipart/form-data">
    <div class="form__group">
    <input type="hidden" name="id" value="<?= $works['id'] ?>">
        <label class="form__label" for="title">Название проекта</label>
        <input class="form__input" name="title" type="text" id="title" placeholder="Название проекта" value="<?= $works['title'] ?>">
    </div>
    <div class="form__group">
        <label class="form__label" for="category">Категория</label>
        <input class="form__input" name="category" type="text" id="category" placeholder="Категория" value="<?= $works['category'] ?>">
    </div>
    <div class="form__group">
        <label class="form__label" for="date">Дата</label>
        <input class="form__input" name="date" type="text" id="date" placeholder="Дата заказа" value="<?= $works['date'] ?>">
    </div>
    <div class="form__group">
        <label class="form__label" for="description">Описание</label>
        <textarea class="form__textarea" name="description" id="description" placeholder="Описание проекта"><?= $works['description'] ?></textarea>
    </div>
    <label class="btn" style="margin-bottom: 15px;" for="img">Изображение</label>
    <input type="file" id="img" name="img" value="<?= $works['img'] ?>">
    <div class="text-right">
        <button class="btn" type="submit">Обновить</button>
    </div>
</form>

<?php
  include('./footer.php')
?>
</div>