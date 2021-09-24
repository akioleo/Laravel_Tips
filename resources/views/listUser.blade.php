<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalhes do Usuário</title>
</head>
<body>

<h1>{{$user->name}}</h1>
<p>{{$user->email}}</p>
<p>{{date('d/m/Y H:i', strtotime($user->created_at))}}</p>

</body>
</html>
