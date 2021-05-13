<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>user create</title>
  </head>
  <body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h3> Форма регистрации </h3>
                <a class="mt-5" href="{{ route('login') }}">Логин</a>
                <a class="mt-5" href="{{ route('loginForm') }}">Логин Форм</a>
                <a class="mt-5" href="{{ route('logout') }}">Логаут</a>

                <form method="post" action="{{ route('register.storeUser') }}">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="email">Your email</label>
                        <input type ="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group mt-3">
                        <label for="password">Your password</label>
                        <input type ="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Send</button>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    </body>
</html>
