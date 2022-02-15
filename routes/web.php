<?php

use App\Http\Controllers\{
    TodoController
};

use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'index']);

Route::post('/save-todo', [TodoController::class, 'store']);
?>