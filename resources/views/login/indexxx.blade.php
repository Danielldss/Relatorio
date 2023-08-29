<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>Login</title>
</head>

<body>
<div id="login">
    <form class="card" action="{{ route('auth.login') }}" method="post">
        @csrf
        <div class="card-header">
            <h2>Login</h2>
        </div>
        <div class="card-content">
            <div class="card-content-area">
                <label for="usuario">Usuário</label>
                <input name="email" type="email" id="usuario" placeholder="E-mail">
            </div>

            <div class="card-content-area">
                <label for="password">Senha</label>
                <input name="password" type="password" id="password" placeholder="Senha">
            </div>

        </div>
        <div class="card-footer">
            <input type="submit" value="login" class="submit">
            <a href="#" class="recuperar_senha">Esqueceu a senha?</a>
        </div>
    </form>
</div>

</body>

</html>
