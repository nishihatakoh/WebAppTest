<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;

Route::get('/',[ToDoController::class,'index']);
Route::post('/todo/create',[ToDoController::class,'create']);
Route::post('/todo/update',[ToDoController::class,'update']);