<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Me</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ url('/about-me') }}">About Me</a></li>
            <li><a href="{{ url('/skills') }}">Skills</a></li>
            <li><a href="{{ url('/hobbies') }}">Hobbies</a></li>
        </ul>
    </nav>
    <h1>About Me</h1>
    <p>{{$data}}</p>
</body>
</html>