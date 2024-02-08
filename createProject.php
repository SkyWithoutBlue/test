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
<form class="form" style="display: flex; flex-direction: column; flex: 1 1 auto; align-items: center;" action="./create.php" method="post" enctype="multipart/form-data">
                        <div class="form__group">
                            <label class="form__label" for="title">Название проекта</label>
                            <input class="form__input" name="title" type="text" id="title" placeholder="Название проекта">
                        </div>
                        <div class="form__group">
                            <label class="form__label" for="category">Категория</label>
                            <input class="form__input" name="category" type="text" id="category" placeholder="Категория">
                        </div>
                        <div class="form__group">
                            <label class="form__label" for="date">Дата</label>
                            <input class="form__input" name="date" type="text" id="date" placeholder="Дата заказа">
                        </div>
                        <div class="form__group">
                          <label class="form__label" for="description">Описание</label>
                          <textarea class="form__textarea" name="description" id="description" placeholder="Описание проекта"></textarea>
                        </div>
                        <label class="btn" style="margin-bottom: 15px;" for="img">Изображение</label>
                        <input type="file" id="img" name="img">
                    <div class="text-right">
                        <button class="btn" type="submit">Добавить</button>
                    </div>
                </form> 
<?php
  include('./footer.php')
?>
</div>