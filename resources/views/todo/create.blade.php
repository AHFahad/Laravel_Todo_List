<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo Create</title>

</head>
<body>
    <h1>Create Your Todo</h1>
    <h6>
        <x-alert />
    </h6>
    <form action="/upload" method="post">
        @csrf
        <input type="text" name="title"/>
        <input type="submit" Value="Create"/>

    </form>
    <br>
    <a href="/index">Back</a>
</body>
</html>
