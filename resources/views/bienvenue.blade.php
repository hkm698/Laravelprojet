<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>Bienvenue</title>
    <link rel="stylesheet" href="style.css" type="text/css">

</head>

<body>
    <h1>BIEN ?</h1>

    Bonjour {{$username}},
    Ton mdp est {{$password}}

</body>
</html>
