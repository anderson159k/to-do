   <!DOCTYPE html>
   <html lang="en">

   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" type="text/css" href="bootstrap.css">

       <title>To Do List</title>

   </head>

   <body>
       <nav class="nav navbar-light bg-light">
        <div class="todo">
           <h1 style="text-decoration: underline;color:#0d6efd">To-Do List</h1> 
        </div>
</nav>
            <form method="post" action="/save-todo">
                @csrf
                <div class="input-todo">
                <input class="form-control" name="todo" type="text" placeholder="New task...">
                </div>
                <div class="btn-todo">
                <button id="btn-todo" name="btn-todo" class="btn btn-outline-primary" type="submit">Enviar</button>
</div>
                <div class="table-top">
            </form>
       <div class="position-absolute translate-middle">
           <div class="displai">
               <table class="table">
                   <thead>
                       <tr>
                           <th scope="col">#</th>
                           <th scope="col">situação</th>
                           <th scope="col">name</th>

                       </tr>
                   </thead>
                   <tbody>
                       @foreach($todos as $todo)
                       <tr>
                           <div class="text-primary">
                           <td class="font-todo" scope="col">{{$todo->id}}</td>
                            </div>
                           <td class="font-todo" scope="col">
                               @if($todo->complete == 1)
                               Concluída
                               @else
                               Pendente
                               @endif
                           </td>
                           <td class="font-todo" scope="col">{{$todo->name}}</td>
                           <td class="font-todo" scope="col">
                               <form method="post" action="update/{{$todo->id}}">
                                   @csrf
                                   <button name="concluir" class="btn btn-outline-success">Concluída</button>
                               </form>
                           </td>
                           <td class="font-todo" scope="col">
                               <form method="post" action="delete/{{$todo->id}}">
                                   @csrf
                                   <button name="delete" class="btn btn-outline-danger">Deletar</button>
                               </form>
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