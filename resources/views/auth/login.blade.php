<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="css.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>SoundCloud</title>
</head>
<body>
<div class="container-fluid">
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark"style="padding: 0">
        <div class="container-fluid"style="padding: 0;">
            <a class="navbar-brand" href="/"><img class="imglogo" src='sound.png'></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!--navbar-->
    <!--Login form-->
    <form autocomplete="off" method="POST" action="{{ route('Admin.Panel') }} "style="width: 30%;margin-left: 35%;margin-top: 15%;">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="username" name="name" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingInput" placeholder="password" name="password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" >
            @error('password')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="floatingInput">password</label>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-outline-warning">Login</button>
        </div>
    </form>
    <!--Login form-->

</div>
</body>
</html>
