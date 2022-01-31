<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view("index", ["name" => "<u>Anderson</u>", "lastname" => "<u>Pinheiro</u>"]);
    }   
}
