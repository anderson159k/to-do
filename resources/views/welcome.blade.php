<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
   
    <title>To Do List</title>
</head>

<body>
    <div class="todo">

            <h1 style = "text-decoration: underline;color:rgb(91, 0, 131)">To-Do List</h1>

    </div>
    <div class="position-absolute top-50 start-50 translate-middle">
        <form method="post" action="/save-todo">
            <div class="table-top">
            @csrf
            <input class="todo-input" name="todo" type="text" placeholder="New task...">

            <button class="btn btn-outline-primary" type="submit">Enviar</button>

        </form>
            <div class="displai">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">situação</th>
                        <th scope="col">name</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($todos as $todo)
                    <tr>
                    <td scope="col">
                        @if($todo->complete == 1)
                        Concluída
                        @else
                        Pendente
                        @endif
                    </td>
                    <td scope="col">{{$todo->name}}</td>
                    <td scope="col">
                        <input name="check" type="checkbox">

                    </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
            </div>
    </div>
</body>
</html>
