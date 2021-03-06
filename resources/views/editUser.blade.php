<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar de Usuário</title>
</head>
<body>

<form action="{{ route('users.edit', ['user' => $user->id]) }}" method="post">
    @csrf
    @method('PUT')
    <label for="">Nome do usuário:</label>
    <input type="text" name="name" value="{{$user->name}}">

    <label for="">E-mail do usuário:</label>
    <input type="email" name="email" value="{{$user->email}}">

    <label for="">Senha do usuário:</label>
    <input type="password" name="password" >

    <input type="submit" value="Editar Usuário">
</form>

</body>
</html>
