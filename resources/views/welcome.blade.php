<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="./style.css">

    <title>To Do List</title>
</head>

<body>

    <header>
        <h1 style = "text-decoration: underline;color:rgb(91, 0, 131)">   To Do List</h1>
    </header>

    <form method="post" action="/save-todo">
        @csrf
        <input class="todo-input" name="todo" type="text" placeholder="New task...">

        <button class="todo-button" type="submit">
            <i class ="fas fa-plus-square"></i>
        </button>

        <div class="select">
            <select name="todos" class="filter-todo">
                <option value="all">All</option>
                <option value="completed">Completed</option>
                <option value="notcompleted">Not Complete</option>
            </select>
        </div> 

    </form>

   
        <table>
            <tr>
                <th>name</th>
                <th>titulo</th>
                <th>situação</th>
            </tr>
            @foreach($todos as $todo)
            <tr>
                <td>{{$todo->name}}</td>
                <td>{{$todo->title}}</td>
                <td>{{$todo->complete}}</td>
            </tr>
            @endforeach
        </table>

    
</body>
</html>
