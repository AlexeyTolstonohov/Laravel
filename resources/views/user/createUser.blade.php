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
                <form method="post" action="{{ route('register.storeUser') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="name">Your name</label>
                        <input type ="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">Your email</label>
                        <input type ="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group mt-3">
                        <label for="password">Your password</label>
                        <input type ="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group mt-3">
                        <label for="password_confirmation"> Confirm password</label>
                        <input type ="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>
                    <div class="form-group mt-3">
                        <label for="avatar">Avatar</label>
                        <input type ="file" class="form-control-file" id="avatar" name="avatar">
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Send</button>
                </form>
            </div>
        </div>
    </div>

    @include('layouts.footer');

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    </body>
</html>
