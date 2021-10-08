<!DOCTYPE html>
<html lang="en">
<head>
    <title> {{ $car->title }} </title>
</head>
<body>
    <a href = "/cars"> Vrati na cars </a>
        <h2>
            {{ $car->title }}
        </h2>
    <p>
        {{ $car->producer }}
    </p>
</body>
</html>