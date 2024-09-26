<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>Cats</title>
    <link rel="stylesheet" href="style.css" type="text/css">

</head>

<body>

    <table class="cat-table">
    <tr>
        <th>Id</th>
        <th>Price</th>
        <th>Name</th>
        <th>Desc</th>
        <th>Birth_date</th>
        <th>Voir</th>
    </tr>

        @foreach($cats as $cat)

            <tr>
            <td> {{ $cat -> id }}</td>
            <td> {{ $cat -> price }}</td>
            <td> {{ $cat -> name }}</td>
            <td> {{ $cat -> desc }}</td>
            <td> {{ $cat -> birth_date }}</td>
                <td><a href="affiche1">Lien</a></td>
            </tr>

        @endforeach
</table>

</body>
</html>
