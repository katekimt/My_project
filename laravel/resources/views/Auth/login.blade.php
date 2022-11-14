<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <title>Login</title>
</head>
<body>
<section class="login  container_auth">
    <div class="login__title login__pad">Вхід</div>
    <form method="post" action="{{route('user.login')}}">
        @csrf
        <div class="form-group global login__pad">
            <label class="login__label" for="email">Введіть пошту</label>
            <input type="email" name="email" placeholder="Введіть пошту" id="email" class="form-control">
            @error('email')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group global login__pad">
            <label class="login__label" for="password">Введіть пароль</label>
            <input type="password" name="password" placeholder="Введіть пароль" id="password" class="form-control">
            @error('password')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-outline-info login__pad">Увійти</button>
    </form>
</section>
</body>
</html>
