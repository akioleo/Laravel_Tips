<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Usuário</title>
</head>
<body>

<form action="{{route('users.store')}}" method="post">
    @csrf
    <label for="">Nome do usuário:</label>
    <input type="text" name="name">

    <label for="">E-mail do usuário:</label>
    <input type="email" name="email">

    <label for="">Senha do usuário:</label>
    <input type="password" name="password">

    <input type="submit" value="Cadastrar Usuário">
</form>

</body>
</html>
