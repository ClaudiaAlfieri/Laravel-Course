<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


// Route::get('/', function () {
//     return view('home');
// });

Route::view('/', 'home');

// Route group

Route::controller(JobController::class)->group(function(){

//INDEX - Rota para mostrar todos os jobs

// Route::get('/jobs',[JobController::class, 'index']);
Route::get('/jobs', 'index');

//CREATE - Rota para criar um novo job

Route::get('/jobs/create',  'create');


//SHOW - Rota para mostrar um job

Route::get('/jobs/{job}',  'show');


//STORE - Rota para guardar um novo job na DB

Route::post('/jobs', 'store');


//EDIT - Rota para editar um job

Route::get('/jobs/{job}/edit',  'edit');


//UPDATE - Rota para salvar a edição de um job

Route::patch('/jobs/{job}',  'update');


//DESTROY - Rota para apagar um job

Route::delete('/jobs/{job}',  'destroy');

});

// Route Resource - "resume todo o route group"
// Route::resource('jobs', JobController::class);


// Route::get('/contact', function () {
//     return view('contact');
// });

Route::view('/contact', 'contact');
