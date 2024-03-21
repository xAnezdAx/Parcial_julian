<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentsController;


// OPERACIOINES CRUD DE DEPARTAMENTOS:
Route::apiResource('/departaments', DepartmentsController::class);
//Route::get('/departaments', [DepartmentsController::class, 'index']);
//Route::post('/departaments', [DepartmentsController::class, 'store']);
//Route::get('/departaments/{id}', [DepartmentsController::class, 'show']);
//Route::put('/departaments/{id}', [DepartmentsController::class, 'update']);
//Route::delete('/departaments/{id}', [DepartmentsController::class, 'destroy']);