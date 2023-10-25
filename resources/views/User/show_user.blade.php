<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Dane uzytkownika</h3>
    {{print_r($user)}}<br>
    Imię i nazwisk: {{$user['firstName']}} {{$user['lastName']}}<br>
    Miasto: {{$user['city']}}<br>
    Hobby:
    {{--print_r($user['hobby'])--}}<br>
    <ul>
    @foreach($user['hobby'] as $hobby)
        {{$hobby}}

    @endforeach
</ul>


</body>
</html>