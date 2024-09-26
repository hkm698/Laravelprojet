<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>Cats</title>
    <link rel="stylesheet" href="style.css" type="text/css">

</head>

<body>

<h1>SHOW ID</h1>

    <p> {{ $cat -> id }}</p>
    <p> {{ $cat -> name }}</p>
    <p> {{ $cat -> price }}</p>
    <p> {{ $cat -> desc }}</p>
    <p> {{ $cat -> birth_date }}</p>

</body>
</html>
