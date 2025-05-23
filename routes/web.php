<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home');
});

//INDEX - Rota para mostrar todos os jobs

Route::get('/jobs',[JobController::class, 'index']);


//CREATE - Rota para criar um novo job

Route::get('/jobs/create', [JobController::class, 'create']);


//SHOW -Rota para mostrar um job

Route::get('/jobs/{job}', [JobController::class, 'show']);


//STORE - Rota para guardar um novo job na DB

Route::post('/jobs', [JobController::class, 'store']);


//EDIT -Rota para editar um job

Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);


//UPDATE -Rota para salvar a edição de um job

Route::patch('/jobs/{job}', [JobController::class, 'update']);


//DESTROY -Rota para apagar um job

Route::delete('/jobs/{job}', [JobController::class, 'destroy']);


Route::get('/contact', function () {
    return view('contact');
});
