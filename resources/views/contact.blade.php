<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>


    <div class="container mt-4">


            <div class="row">
                <div class="col-md-6">
                    <h3> Форма регистрации </h3>
                    <form action="{{route('contact')}}" method="post">
                        @csrf
                        <input type="text" class="form-control input" name="login" placeholder="Введите логин"> <br>
                        <input type="text" class="form-control input" name="pass"  placeholder="Введите пароль"> <br>
                        <input type="text" class="form-control input" name="name"  placeholder="Введите имя"> <br>
                        <button class="btn btn-success" type="submit">Зарегистрировать</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <h3> Форма авторизации </h3>
                    <form action="../validation_form/auth.php" method="post">
                        @csrf
                        <input type="text" class="form-control input" name="login2"  placeholder="Введите логин"> <br>
                        <input type="text" class="form-control input" name="pass2"  placeholder="Введите пароль"> <br>
                        <button class="btn btn-success" type="submit">Войти</button>
                    </form>
                </div>
            </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  </body>
</html>
