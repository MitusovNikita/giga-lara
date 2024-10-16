<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First page</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Include your CSS file -->
</head>
<body>
<div class="container">
    <h1>My number: {{ $number }}</h1>
</div>
</body>
</html>
