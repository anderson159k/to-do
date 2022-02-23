<?php

use App\Http\Controllers\{
    TodoController
};

use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'index']);

Route::post('/save-todo', [TodoController::class, 'store']);

Route::get('welcome/{id}', [TodoController::class, 'show']);

Route::post('update/{id}' , [TodoController::class, 'update']);

Route::post('delete/{id}', [TodoController::class, 'destroy']);

?>