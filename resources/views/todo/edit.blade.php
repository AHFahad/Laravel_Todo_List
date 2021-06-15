<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Todo</title>

</head>
<body>
    <h1>Edit your todo</h1>
    <h6>
        <x-alert />
    </h6>
    <form action="/update" method="post">
        @csrf
        @method('patch')
        <input type="text" name="title" value='{{ $title }}' />
        <input  type="hidden" name="id" value="{{$id}}">
        <input type="submit" Value="Edit"/>

    </form>
    <br>
    <a href="/index">Back</a>
</body>
</html>
