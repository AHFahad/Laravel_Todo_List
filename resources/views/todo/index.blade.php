<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo Home</title>
</head>
<body>
    <h1> todo list...</h1>
    <h3>
        <a href='{{ route('todo.create') }}'>Create</a>
    </h3>
    <h3>
        <x-alert/>
    </h3>
    @foreach($todos as $todo)
        <li>
            @if($todo->completed)
                <span style="text-decoration:line-through"> {{ $todo->title }} </span>
            @else
                {{ $todo->title }}
            @endif
            {{-- <a href='{{  route('todo.edit') .'/'.$todo->id }}'> Edit</a> --}}

            <a href='{{  route('todo.edit' ,['id'=>$todo->id])}}'> Edit</a>
            <a href='{{  route('todo.completed' ,['id'=>$todo->id])}}'> Completed</a>
            <a href='{{  route('todo.delete' ,['id'=>$todo->id])}}'> Delete</a>
        </li>
    @endforeach
</body>
</html>
