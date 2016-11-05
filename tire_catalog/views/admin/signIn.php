<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="icon" href="">
    <title>Страница авторизации</title>
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">
    <link href="/template/css/style.css" rel="stylesheet">
</head>
<body>


    <div class="container" id="sign">
        <div class="col-md-4 text-center">
            <form class="form-signin" role="form" action="/user/">
                <h2 class="form-signin-heading">Вход</h2>
                <label for="inputName" class="sr-only">Имя</label>
                <input type="text" id="inputName" name="name" class="form-control" placeholder="Имя" required autofocus>
                <label for="inputPassword" class="sr-only">Пароль</label>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Пароль" required>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me">Запомнить меня
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Вход</button>
            </form>
        </div>
    </div>



</body>
</html>



