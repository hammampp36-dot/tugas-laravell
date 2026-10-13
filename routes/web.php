<?php

use App\Http\Controllers\todocontroller;
use Illuminate\Support\Facades\Route;

route::resource('todos', TodoController::class);


route::redirect('/', '/todos');
