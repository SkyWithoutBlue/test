<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Отзывы</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</head>
<body style="background-color: #faf6f4;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">
                Отзывы
                </h2>
            </div>
            <div class="col-lg-6">
                <div id="comment-field"></div>
            </div>
            <div class="col-lg-6">
                    <form>
                            <div class="form-group">
                              <label for="comment_name">Имя:</label>
                              <input type="email" class="form-control" id="comment_name"  placeholder="Введите имя">
                            </div>
                            <div class="form-group">
                              <label for="comment_body">Отзыв:</label>
                              <textarea type="password" class="form-control" id="comment_body" placeholder="Ваш отзыв"></textarea>
                            </div>
                            <div class="form-group form-check text-right">
                                    <button type="submit" id="comment-add" class="btn btn-primary">Добавить отзыв</button>
                            </div>
                          </form>
            </div>
        </div>
    </div>
  
    


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="js/comment.js"></script>
</body>
</html>